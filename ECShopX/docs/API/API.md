# ECShopX 接口文档（简版）

**基础信息**
- Base URL: `http://127.0.0.1:9058`
- 前缀: `/api`
- 版本: `v1`（Dingo API，默认版本）
- 响应格式: JSON

**鉴权**
- 使用 JWT
- `Authorization: Bearer <token>`

**登录接口（已验证）**
- 方法: `POST`
- 路径: `/api/operator/login`
- Body (form-urlencoded)
  - `username`: `admin`
  - `password`: `Shopex123`
  - `logintype`: `admin`
  - `product_model`: `default`

示例：
```bash
curl -X POST http://127.0.0.1:9058/api/operator/login \
  -H 'Accept: application/json' \
  -d 'username=admin&password=Shopex123&logintype=admin&product_model=default'
```

成功响应示例：
```json
{
  "data": {
    "token": "<jwt>"
  }
}
```

**Token 刷新与失效**
- `GET /api/token/refresh`
- `GET /api/token/invalidate`

**路由索引**
完整路由清单已从 `routes/` 目录提取，见 `docs/API_ROUTES.md`。

**说明**
- 路由基于 Dingo API，`config/api.php` 中 `API_PREFIX=api`。
- 部分路由在 `routes/*` 中按模块拆分，存在 `group(['prefix' => ...])` 前缀叠加。
