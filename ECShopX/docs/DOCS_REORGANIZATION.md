# ECShopX 文档整理方案

> **版本**: v1.1  
> **更新日期**: 2026-02-05  
> **状态**: 待执行

---

## 一、文档现状汇总

### 1.1 当前文档清单

| # | 文件路径 | 类别 | 状态 | 说明 |
|---|----------|------|------|------|
| 1 | `ECShopX/docs/DOCKER_DEPLOYMENT.md` | 部署 | 有效 | Docker 部署主文档 |
| 2 | `ECShopX/docs/DOCKER_TODO.md` | 部署 | 待合并 | 与 DOCKER_DEPLOYMENT 内容重叠，待删除 |
| 3 | `ECShopX/docs/STARTUP.md` | 启动 | 有效 | 启动流程 |
| 4 | `ECShopX/docs/ARCHITECTURE.md` | 架构 | 有效 | 项目架构说明 |
| 5 | `ECShopX/docs/FLOW.md` | 流程 | 归档 | 业务流程（移入 LEGACY/） |
| 6 | `ECShopX/docs/API_ROUTES.md` | API | 保留 | API 路由 |
| 7 | `ECShopX/docs/API.md` | API | 保留 | API 说明 |
| 8 | `ECShopX/docs/API_ROUTE_STATUS_2026-02-04.md` | API | 保留 | API 路由状态检查 |
| 9 | `ECShopX/STARTUP_ISSUES.md` | 问题 | 有效 | 启动问题记录 |
| 10 | `ECShopX/README.md` | 说明 | 有效 | 项目主 README |
| 11 | `ECShopX/README_cn.md` | 说明 | 归档 | 原中文 README（移入 LEGACY/） |
| 12 | `ECShopX/CONTRIBUTING.md` | 说明 | **删除** | 贡献指南（删除） |
| 13 | `MULTI_FRONTEND_SETUP.md` | 联调 | 新增 | 多前端联调方案 |
| 14 | `ECShopX/todo/paypal-*.md` (9个) | PayPal | 保留 | PayPal 集成任务（保留原位置） |
| 15 | `ECShopX_admin-frontend/README.md` | 前端 | 有效 | Admin 前端说明 |
| 16 | `ECShopX_desktop-frontend/README.md` | 前端 | 有效 | Desktop 前端说明 |

### 1.2 问题识别

| 问题类型 | 具体表现 |
|----------|----------|
| **目录分散** | 文档在根目录、docs/、todo/ 多处存放 |
| **内容重叠** | DOCKER_TODO 与 DOCKER_DEPLOYMENT 重复 |
| **新增文档位置** | MULTI_FRONTEND_SETUP 在根目录 |
| **无统一索引** | 缺少文档入口导航 |

---

## 二、目录结构重组

### 2.1 目标结构

```
ecshopx-all/
│
├── ECShopX/
│   ├── docs/                          # 统一文档目录
│   │   ├── README.md                   # 文档索引（新增）
│   │   ├── ARCHITECTURE.md             # 项目架构
│   │   ├── STARTUP.md                  # 本地启动
│   │   ├── DOCKER_DEPLOYMENT.md        # Docker 部署
│   │   ├── DOCKER_TODO.md              # 删除（合并后删除）
│   │   ├── MULTI_FRONTEND_SETUP.md     # 多前端联调（从根目录移入）
│   │   ├── API/                        # API 文档目录
│   │   │   ├── API_ROUTES.md
│   │   │   ├── API.md
│   │   │   └── API_ROUTE_STATUS_2026-02-04.md
│   │   ├── ISSUES/                     # 问题记录目录
│   │   │   └── STARTUP_ISSUES.md       # 启动问题
│   │   └── LEGACY/                     # 历史文档归档
│   │       ├── README_cn.md            # 原中文 README
│   │       └── FLOW.md                 # 业务流程
│   │
│   ├── todo/                           # 保留（PayPal 文档）
│   │   ├── paypal-*.md                 # 9 个文件，不合并
│   │   └── ...
│   │
│   ├── ECShopX_admin-frontend/         # 前端仓库（根目录不变）
│   │   └── README.md
│   │
│   └── ECShopX_desktop-frontend/       # 前端仓库（根目录不变）
│       └── README.md
│
├── MULTI_FRONTEND_SETUP.md             # 删除（已移入 docs/）
│
└── CONTRIBUTING.md                     # 删除
```

### 2.2 移动/操作清单

| 操作 | 源文件 | 目标位置 | 说明 |
|------|--------|----------|------|
| 删除 | `DOCKER_TODO.md` | - | 内容已合并到 DOCKER_DEPLOYMENT |
| 移动 | `MULTI_FRONTEND_SETUP.md` | `docs/MULTI_FRONTEND_SETUP.md` | 从根目录移入 docs |
| 移动 | `STARTUP_ISSUES.md` | `docs/ISSUES/STARTUP_ISSUES.md` | 移入 ISSUES 目录 |
| 移动 | `README_cn.md` | `docs/LEGACY/README_cn.md` | 归档到 LEGACY |
| 移动 | `FLOW.md` | `docs/LEGACY/FLOW.md` | 归档到 LEGACY |
| 删除 | `CONTRIBUTING.md` | - | 删除此文件 |
| 保留 | `todo/paypal-*.md` | `todo/paypal-*.md` | 保留原位置，不合并 |
| 创建 | - | `docs/README.md` | 文档索引入口 |
| 创建 | - | `docs/API/` | API 文档子目录 |
| 创建 | - | `docs/ISSUES/` | 问题记录子目录 |
| 创建 | - | `docs/LEGACY/` | 历史文档归档目录 |

---

## 三、文档索引模板

### 3.1 docs/README.md

```markdown
# ECShopX 文档索引

> 本文档为 ECShopX 项目文档的入口索引。

## 快速开始

| 场景 | 文档链接 |
|------|----------|
| 本地启动开发 | [STARTUP.md](STARTUP.md) |
| Docker 部署 | [DOCKER_DEPLOYMENT.md](DOCKER_DEPLOYMENT.md) |
| 多前端联调 | [MULTI_FRONTEND_SETUP.md](MULTI_FRONTEND_SETUP.md) |

## 文档目录

### 核心文档
- [ARCHITECTURE.md](ARCHITECTURE.md) - 项目架构说明
- [STARTUP.md](STARTUP.md) - 本地启动流程
- [DOCKER_DEPLOYMENT.md](DOCKER_DEPLOYMENT.md) - Docker 部署方案

### 联调指南
- [MULTI_FRONTEND_SETUP.md](MULTI_FRONTEND_SETUP.md) - 多前端联调

### API 文档
- [API/](API/) - API 相关文档目录
  - [API_ROUTES.md](API/API_ROUTES.md) - API 路由说明
  - [API.md](API/API.md) - API 接口文档
  - [API_ROUTE_STATUS_2026-02-04.md](API/API_ROUTE_STATUS_2026-02-04.md) - API 状态检查

### 问题记录
- [ISSUES/](ISSUES/) - 问题记录和解决方案
  - [STARTUP_ISSUES.md](ISSUES/STARTUP_ISSUES.md) - 启动问题记录

### 历史文档
- [LEGACY/](LEGACY/) - 过时或历史文档（仅供参考）
  - [README_cn.md](LEGACY/README_cn.md) - 原中文 README
  - [FLOW.md](LEGACY/FLOW.md) - 业务流程（待确认时效性）

### PayPal 集成（历史任务）
- [ECShopX/todo/](../todo/) - PayPal 集成相关文档
  - [paypal-integration-plan.md](../todo/paypal-integration-plan.md)
  - [paypal-testing-guide.md](../todo/paypal-testing-guide.md)
  - 等 9 个文档

## 前端项目

- [ECShopX_admin-frontend README](../ECShopX_admin-frontend/README.md) - 管理后台前端
- [ECShopX_desktop-frontend README](../ECShopX_desktop-frontend/README.md) - 商城前端

## 相关链接

- [项目主 README](../README.md)
- [Docker 部署方案](DOCKER_DEPLOYMENT.md)
- [多前端联调](MULTI_FRONTEND_SETUP.md)
```

---

## 四、实施步骤

### 步骤 1: 创建目录结构
```bash
cd /Users/dysania/program/ecshopx-all
mkdir -p ECShopX/docs/API
mkdir -p ECShopX/docs/ISSUES
mkdir -p ECShopX/docs/LEGACY
```

### 步骤 2: 移动文档文件
```bash
# 移动多前端联调文档
mv MULTI_FRONTEND_SETUP.md ECShopX/docs/

# 移动启动问题文档
mv ECShopX/STARTUP_ISSUES.md ECShopX/docs/ISSUES/

# 移动历史文档
mv ECShopX/README_cn.md ECShopX/docs/LEGACY/
mv ECShopX/docs/FLOW.md ECShopX/docs/LEGACY/
```

### 步骤 3: 删除文件
```bash
# 删除已合并的 TODO 文档
rm ECShopX/docs/DOCKER_TODO.md

# 删除 CONTRIBUTING.md
rm ECShopX/CONTRIBUTING.md
```

### 步骤 4: 创建索引文档
```bash
# 创建 docs/README.md
```

### 步骤 5: 更新项目主 README
```bash
# 更新 ECShopX/README.md 的文档导航链接
```

---

## 五、预计成果

| 指标 | 整理前 | 整理后 |
|------|--------|--------|
| 文档目录数 | 5处 | 1处 (docs/) |
| 文件总数 | 32个 md | 28个 md |
| 有效文档 | 分散 | 集中在 docs/ |
| 历史文档 | 混杂 | 移入 LEGACY/ |
| PayPal 文档 | 散落 todo/ | 保留原位，索引中链接 |

---

## 六、校验清单

- [ ] README.md 能正确打开前端 README（根目录）
- [ ] README.md 有 PayPal 文档链接，且仍指向 ECShopX/todo/
- [ ] CONTRIBUTING.md 删除后无悬空引用
- [ ] MULTI_FRONTEND_SETUP.md 已在 ECShopX/docs/ 下并被索引链接
- [ ] 所有文档链接路径正确

---

## 七、修订历史

| 版本 | 日期 | 说明 |
|------|------|------|
| v1.0 | 2026-02-04 | 初始方案 |
| v1.1 | 2026-02-05 | 前端根目录不变；PayPal 不合并；删除 CONTRIBUTING.md |
