# ECShopX 项目总览

本仓库为 ECShopX 多子项目合并后的工作区，包含后端、管理端与桌面端三套代码。用于本地开发与部署实践。

## 目录结构

- `ECShopX/`：后端服务（Lumen）
- `ECShopX_admin-frontend/`：Admin 管理端前端（Vue 2）
- `ECShopX_desktop-frontend/`：Desktop 前端（Nuxt 2）
- `ECShopX/docs/`：开发与部署文档

## 快速开始（本地开发）

完整步骤请看：`ECShopX/docs/DEVELOPMENT_AND_DEPLOYMENT.md`。

简要流程：

1. 启动数据库与缓存（Docker）

```bash
cd ECShopX
docker compose up -d
```

2. 启动后端

```bash
cd ECShopX
cp .env.full .env
php composer.phar install --no-dev --no-scripts
php artisan key:generate
php artisan doctrine:migrations:migrate --no-interaction
php -S 0.0.0.0:9058 -t public
```

3. 启动 Admin 前端

```bash
cd ECShopX_admin-frontend
npm install
# 编辑 .env: VUE_APP_BASE_API=http://127.0.0.1:9058/api
npm run dev:b2c
```

4. 启动 Desktop 前端

```bash
cd ECShopX_desktop-frontend
npm install
# 编辑 .env: VUE_APP_API_BASE_URL=http://127.0.0.1:9058
npm run dev
```

## 停止项目

- 后端或前端：在终端按 `Ctrl+C`
- 数据库/缓存：

```bash
cd ECShopX
docker compose down
```

## 文档入口

- 统一开发与部署指南：`ECShopX/docs/DEVELOPMENT_AND_DEPLOYMENT.md`
- 文档索引：`ECShopX/docs/README.md`
