# ECShopX 开发与部署指南

> **版本**: v2.0（合并版）
> **日期**: 2026-02-05
> **来源**: 合并 DOCKER_DEPLOYMENT.md (v1.6) + MULTI_FRONTEND_SETUP.md (v1.1)

---

## 目录

### 第一部分：本地开发
1. [方案概述](#1-方案概述)
2. [整体架构](#2-整体架构)
3. [环境准备](#3-环境准备)
4. [后端启动](#4-后端启动)
5. [Admin 前端启动](#5-admin-前端启动)
6. [Desktop 前端启动](#6-desktop-前端启动)
7. [多前端联调](#7-多前端联调)
8. [验证步骤](#8-验证步骤)
9. [停止项目](#9-停止项目)
10. [常见问题](#10-常见问题)

### 第二部分：Docker 部署
11. [Docker 部署概述](#11-docker-部署概述)
12. [后端容器化](#12-后端容器化)
13. [前端容器化](#13-前端容器化)
14. [生产环境部署](#14-生产环境部署)

---

## 1. 方案概述

### 1.1 本文档定位

本文档整合了 **本地开发指南** 与 **Docker 部署方案**：

| 部分 | 用途 | 说明 |
|------|------|------|
| 第一部分 | 本地开发 | 后端 + Admin 前端 + Desktop 前端联调 |
| 第二部分 | Docker 部署 | 生产环境容器化部署 |

### 1.2 目标

| 目标 | 说明 |
|------|------|
| 本地开发友好 | 前端 DevServer 热重载，后端本地服务 |
| 多前端联调 | 同时启动 Admin + Desktop，共享后端 API |
| Docker 部署准备 | 提供容器化部署的基础配置 |

### 1.3 技术栈

| 组件 | 技术选型 | 版本 |
|------|----------|------|
| 后端框架 | PHP + Lumen | 8.x |
| 数据库 | MariaDB | 10.11 |
| 缓存 | Redis | 7.x |
| 前端框架 | Vue.js | 2.x |
| 构建工具 | Node.js | 16.16.0 |

### 1.4 端口规划

| 服务 | 地址 | 说明 |
|------|------|------|
| 后端 API | `127.0.0.1:9058` | `php -S 0.0.0.0:9058 -t public` |
| PHP-FPM | `127.0.0.1:9000` | 仅容器化/生产使用（FastCGI，需 Nginx 反代） |
| Admin 前端 | `127.0.0.1:8080` | `npm run dev:b2c` |
| Desktop 前端 | `127.0.0.1:3000` | `npm run dev` (Nuxt.js) |
| MariaDB | `127.0.0.1:3307` | Docker 映射端口 |
| Redis | `127.0.0.1:6379` | 默认端口 |

---

## 2. 整体架构

### 2.1 本地开发模式架构

```
[浏览器]
   │
   ├── http://localhost:8080 ──────────→ Admin Frontend (Vue 2)
   │         │
   │         └── VUE_APP_BASE_API ───────┐
   │                                        │
   ├── http://localhost:3000 ──────────→ Desktop Frontend (Nuxt 2)
   │         │                             │
   │         └── VUE_APP_API_BASE_URL ──────┤
   │                                          │
   └── 共享后端 API ←──────────────────────────┘
                http://127.0.0.1:9058
                         │
                         ▼
            [MariaDB/Redis (Docker)]
```

### 2.2 项目对比

| 项目 | 技术栈 | 代码目录 | 默认端口 | 启动命令 |
|------|--------|----------|----------|----------|
| Backend | PHP + Lumen | `ECShopX/` | 9058 | `php -S` |
| Admin Frontend | Vue 2 + Webpack | `ECShopX_admin-frontend/` | 8080 | `npm run dev:b2c` |
| Desktop Frontend | Nuxt.js 2.x | `ECShopX_desktop-frontend/` | 3000 | `npm run dev` |

---

## 3. 环境准备

### 3.1 本地依赖安装

| 依赖 | 作用 | 安装命令（macOS） | 检查命令 |
|------|------|-------------------|----------|
| PHP | 运行后端 | `brew install php@8.2` | `php -v` |
| Composer | 后端依赖 | 内置于仓库 | `php composer.phar -V` |
| Node.js | 前端构建 | `nvm install 16.16.0` | `node -v` |
| npm | 前端依赖 | 随 Node | `npm -v` |

**默认数据库/缓存方式**：使用 Docker Compose 启动 MariaDB/Redis（见 3.5）。

#### 3.1.1 可选：本地安装数据库/缓存

如果你不使用 Docker，也可以本地安装（可选）：

| 依赖 | 作用 | 安装命令（macOS） | 检查命令 |
|------|------|-------------------|----------|
| MariaDB | 数据库 | `brew install mariadb` | `mariadb --version` |
| Redis | 缓存 | `brew install redis` | `redis-cli ping` |

### 3.2 nvm 安装（首次）

```bash
# 安装 nvm
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash

# 激活 nvm
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"

# 安装 Node.js 16.16.0
nvm install 16.16.0
nvm use 16.16.0
nvm alias default 16.16.0
```

### 3.3 PHP 扩展要求

| 扩展 | 作用 | 检查命令 |
|------|------|----------|
| pdo_mysql | 数据库连接 | `php -m \| grep pdo_mysql` |
| mbstring | 字符串处理 | `php -m \| grep mbstring` |
| openssl | 加密 | `php -m \| grep openssl` |
| tokenizer | 代码解析 | `php -m \| grep tokenizer` |
| json | JSON 处理 | `php -m \| grep json` |
| curl | HTTP 请求 | `php -m \| grep curl` |

### 3.4 Docker Desktop（用于数据库）

默认使用 Docker 运行 MariaDB/Redis：

| 步骤 | 操作 |
|------|------|
| 1. 下载 | 访问 https://www.docker.com/products/docker-desktop |
| 2. 安装 | 双击 `.dmg` 文件，将 Docker 拖入应用程序 |
| 3. 启动 | 打开 Docker Desktop |
| 4. 验证 | `docker --version` |

### 3.5 启动 Docker 数据库服务

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX
docker compose up -d
```

使用的是仓库内 `ECShopX/docker-compose.yml`（仅包含 MariaDB/Redis）。

---

## 4. 后端启动

### 4.1 配置环境变量

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX
cp .env.full .env
```

**关键配置（必须检查）**：

```
APP_URL=http://127.0.0.1:9058
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=ecshopx
DB_USERNAME=ecshopx
DB_PASSWORD=ecshopx
REDIS_HOST=127.0.0.1
REDIS_PORT=6379
```

### 4.2 目录权限

```bash
mkdir -p storage/logs bootstrap/cache
chmod -R u+rwX storage bootstrap/cache
```

### 4.3 安装依赖

```bash
php composer.phar install --no-dev --no-scripts
```

### 4.4 初始化应用

```bash
php artisan key:generate
php artisan doctrine:migrations:migrate --no-interaction
php artisan lang:init ar-SA
php artisan doctrine:migrations:migrate --no-interaction
```

### 4.5 配置 JWT_SECRET

```bash
python - <<'PY'
import base64, os
print(base64.b64encode(os.urandom(32)).decode())
PY
```

将输出写入 `.env`：

```
JWT_SECRET=YOUR_BASE64_32_BYTES
```

### 4.6 启动后端服务

```bash
php -S 0.0.0.0:9058 -t public
```

**预期输出**：

```
PHP Development Server started
Listening on http://0.0.0.0:9058
Document root is /path/to/ecshopx-all/ECShopX/public
```

---

## 5. Admin 前端启动

### 5.1 安装依赖

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX_admin-frontend
npm install
```

**注意**：如果 npm 安装缓慢，可使用淘宝镜像：

```bash
npm install --registry=https://registry.npmmirror.com
```

### 5.2 配置环境变量

**文件**: `ECShopX_admin-frontend/.env`

```bash
VUE_APP_BASE_API=http://127.0.0.1:9058/api
```

### 5.3 启动开发服务器

```bash
npm run dev:b2c  # B2C 平台
# 或
npm run dev:bbc  # BBC 平台
```

**访问**: http://localhost:8080

---

## 6. Desktop 前端启动

### 6.1 安装依赖

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX_desktop-frontend
npm install
```

### 6.2 配置文件

Desktop 前端使用 **Nuxt.js**，项目已自带 `.env`（默认指向 demo 域名）。

**推荐直接修改 `.env`**（避免 `.env.local` 未被加载导致配置不生效）：

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX_desktop-frontend

cp .env .env.bak
```

编辑 `.env`，确保至少包含以下配置：

```
VUE_APP_API_BASE_URL=http://127.0.0.1:9058
VUE_APP_HOST=http://localhost:3000
VUE_APP_COMPANYID=1
```

### 6.3 启动开发服务器

```bash
npm run dev
```

**访问**: http://localhost:3000

---

## 7. 多前端联调

### 7.1 联调说明

同时启动 Admin 和 Desktop 前端，共享同一个后端 API：

| 前端 | 端口 | 环境变量 |
|------|------|----------|
| Admin | 8080 | `VUE_APP_BASE_API` |
| Desktop | 3000 | `VUE_APP_API_BASE_URL` |

### 7.2 联调验证

1. 在 Admin 后台创建商品/订单
2. 在 Desktop 商城查看数据
3. 确认两者数据互通

---

## 8. 验证步骤

### 8.1 后端 API 验证

```bash
curl -X POST "http://127.0.0.1:9058/api/operator/login?username=admin&password=Shopex123"
```

**预期结果**：返回包含 `token` 字段的 JSON

### 8.2 Desktop 前台接口验证

```bash
curl "http://127.0.0.1:9058/api/h5app/wxapp/goods/category"
```

### 8.3 数据库连接测试

```bash
# MariaDB（Docker 默认）
docker exec -it ecshopx-mariadb mariadb -u ecshopx -p

# Redis（Docker 默认）
docker exec -it ecshopx-redis redis-cli ping
```

如果你使用本地安装的 MariaDB/Redis，可改为：

```bash
/opt/homebrew/opt/mariadb/bin/mariadb -h 127.0.0.1 -P 3307 -u ecshopx -p
redis-cli -h 127.0.0.1 -p 6379 ping
```

---

## 9. 停止项目

### 9.1 停止后端（php -S）

在运行 `php -S` 的终端按 `Ctrl+C`。

### 9.2 停止前端（Admin / Desktop）

在对应的 `npm run dev:*` 终端按 `Ctrl+C`。

### 9.3 停止 Docker 数据库/缓存

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX
docker compose down
```

如果需要清理数据卷（慎用）：

```bash
docker compose down -v
```

如果使用了自建 compose 文件（如 `docker-compose.prod.yml`），请加 `-f`：

```bash
docker compose -f docker-compose.prod.yml down
```

### 9.4 停止 Docker 部署示例服务（如已启动）

如果你使用了 compose 示例启动 `app/nginx`：

```bash
docker compose down
```

如果是单独 `docker run` 启动容器：

```bash
docker stop ecshopx-php
```

---

## 10. 常见问题

### 10.1 端口占用

```bash
# 查找占用端口的进程
lsof -i:9058

# 终止进程
kill -9 <PID>
```

### 10.2 无法连接数据库

| 现象 | 原因 | 解决办法 |
|------|------|----------|
| `SQLSTATE[HY000] [2002]` | 连接被拒绝 | 确认 Docker 数据库已启动 |
| `Access denied` | 用户名/密码错误 | 检查 `.env` 配置 |

### 10.3 npm 安装失败

```bash
# 使用淘宝镜像
npm install --registry=https://registry.npmmirror.com

# 清理缓存后重试
npm cache clean --force
rm -rf node_modules package-lock.json
npm install
```

### 10.4 Desktop API 请求 404

1. 确认 `.env` 中 `VUE_APP_API_BASE_URL` 正确
2. 确认 Nuxt 正在运行
3. 尝试清除缓存：`rm -rf .nuxt && npm run dev`

---

## 11. Docker 部署概述

### 11.1 部署架构

```
浏览器 -> Nginx -> PHP-FPM (容器) -> MariaDB / Redis (容器)
```

### 11.2 容器化组件

| 组件 | 镜像 | 状态 |
|------|------|------|
| PHP-FPM | 自定义 `docker-new/Dockerfile` | 已提供（默认 php-fpm） |
| MariaDB | mariadb:10.11 | 已提供（`ECShopX/docker-compose.yml` 仅含 DB/Redis） |
| Redis | redis:7-alpine | 已提供（`ECShopX/docker-compose.yml` 仅含 DB/Redis） |
| Nginx | nginx:alpine | 需自建（生产建议） |

---

## 12. 后端容器化

### 12.1 Dockerfile 位置

```
ECShopX/docker-new/Dockerfile
```

### 12.2 构建镜像

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX
docker build -t ecshopx-php -f docker-new/Dockerfile .
```

### 12.3 生产默认：PHP-FPM + Nginx

后端镜像默认启动 `php-fpm`（FastCGI 9000），**不能直接用浏览器访问**，需要 Nginx 反代。

```bash
docker run -d \
  --name ecshopx-php \
  -p 9000:9000 \
  -v $(pwd):/data/httpd \
  ecshopx-php
```

Nginx 需要单独容器或宿主机部署，并将请求转发到 `ecshopx-php:9000`。

### 12.4 开发示例：容器内 php -S（可选）

如果仅用于开发调试，可覆盖命令启动内置服务：

```bash
docker run -d \
  --name ecshopx-php \
  -p 9058:9058 \
  -v $(pwd):/data/httpd \
  ecshopx-php \
  php -S 0.0.0.0:9058 -t public
```

### 12.5 端口映射速查表

|| 用途 | 容器端口 | 主机端口 | 适用场景 |
||------|----------|----------|----------|
|| PHP-FPM（生产） | 9000 | 9000 | 需要外部 Nginx 反代 |
|| php -S（开发示例） | 9058 | 9058 | 容器内直接运行 PHP 内置服务器 |

**说明**：
- 9000 端口是 PHP-FPM 標準 FastCGI 端口，不能直接用浏览器访问
- 9058 端口是 PHP 内置服务器端口，可直接用浏览器访问（仅限开发调试）

---

## 13. 前端容器化

### 13.1 Admin 前端 Dockerfile

**文件**: `ECShopX_admin-frontend/Dockerfile`

```dockerfile
FROM reg.ishopex.cn/base-images/node-python3:16.16.0-alpine3.16 AS builder

ARG CMD
ARG VUE_APP_BASE_API=/api
ARG VUE_APP_QIANKUN_ENTRY=/newpc/

ENV VUE_APP_BASE_API ${VUE_APP_BASE_API}
ENV VUE_APP_QIANKUN_ENTRY ${VUE_APP_QIANKUN_ENTRY}

WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN ${CMD}

FROM registry.cn-zhangjiakou.aliyuncs.com/jst-shopex/openresty:1.19
WORKDIR /app
COPY --from=builder /app/dist .
EXPOSE 80
```

构建示例（必须传 `CMD`）：

```bash
cd /Users/dysania/program/ecshopx-all/ECShopX_admin-frontend
docker build -t ecshopx-admin \
  --build-arg CMD="npm run build:b2c" \
  .
```

### 13.2 Nginx 配置

**文件**: `ECShopX_admin-frontend/docker/nginx-default.conf`

```nginx
server {
    listen 80;
    server_name localhost;
    root /usr/share/nginx/html;
    index index.html;

    location / {
        try_files $uri $uri/ /index.html;
    }

    location /api {
        proxy_pass http://ecshopx-php:9058;
    }
}
```

注意：当前 Dockerfile 未默认 `COPY` 该配置；如需生效，请自行修改 Dockerfile 增加：

```dockerfile
COPY docker/nginx-default.conf /etc/nginx/conf.d/default.conf
```

如果后端采用 **PHP-FPM + Nginx** 模式，这里的 `proxy_pass` 应指向后端 **Nginx 的 HTTP 地址**（而不是 php-fpm 端口）。

---

## 14. 生产环境部署

### 14.1 docker-compose.yml 示例（需自建）

仓库当前仅提供 **DB/Redis** 的 `ECShopX/docker-compose.yml`。  
如下为完整栈示例（`app + nginx + mariadb + redis`），需自行创建：

```yaml
version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: docker-new/Dockerfile
    ports:
      - "9000:9000"
    volumes:
      - .:/data/httpd
    environment:
      - APP_ENV=production

  nginx:
    image: nginx:alpine
    ports:
      - "80:80"
    volumes:
      # 挂载代码目录（供 Nginx 解析静态资源/路径）
      - .:/data/httpd
      # 自行提供 Nginx 配置文件（示例占位）
      - ./nginx.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - app

  mariadb:
    image: mariadb:10.11
    environment:
      MYSQL_ROOT_PASSWORD: rootpass
      MYSQL_DATABASE: ecshopx
      MYSQL_USER: ecshopx
      MYSQL_PASSWORD: ecshopx

  redis:
    image: redis:7-alpine
```

`nginx.conf` 最小示例（需自建）：

```nginx
server {
    listen 80;
    root /data/httpd/public;
    index index.php index.html;

    location / {
        try_files $uri /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass app:9000;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME /data/httpd/public$fastcgi_script_name;
    }
}
```

### 14.2 部署步骤

```bash
# 构建并启动所有服务（示例文件自建后）
docker compose up -d --build

# 执行数据库迁移
docker compose exec app php artisan doctrine:migrations:migrate --no-interaction
```

---

## 附录 A：修订历史

| 版本 | 日期 | 说明 | 来源 |
|------|------|------|------|
| v2.0 | 2026-02-05 | 合并本地开发与 Docker 部署文档 | DOCKER_DEPLOYMENT v1.6 + MULTI_FRONTEND v1.1 |
| v1.6 | 2026-02-04 | 新手级详细说明完善 | DOCKER_DEPLOYMENT |
| v1.1 | 2026-02-04 | 支持 Admin + Desktop 双前端联调 | MULTI_FRONTEND_SETUP |

## 附录 B：相关文档

| 文档 | 说明 |
|------|------|
| [docs/README.md](docs/README.md) | 文档索引入口 |
| [docs/ARCHITECTURE.md](docs/ARCHITECTURE.md) | 项目架构说明 |
| [docs/API/](docs/API/) | API 文档目录 |
| [docs/ISSUES/](docs/ISSUES/) | 问题记录 |
