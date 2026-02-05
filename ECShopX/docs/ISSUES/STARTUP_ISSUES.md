# ECShopX Startup Issues Log

This log tracks startup blockers and their resolutions. Check here first when errors repeat.

## 2026-02-03
- Issue: `php` command not found when checking version.
  Next step: Install PHP (via Homebrew) before running composer/artisan.
- Issue: `brew install php mysql redis` timed out when run as a single command.
  Resolution: Install packages individually (php, mysql, redis) with longer timeout.
- Issue: `composer install` failed because Aliyun mirror `mirrors.aliyun.com` could not be resolved.
  Resolution: Removed the Aliyun mirror entry from `composer.json` to use `repo.packagist.org`.
- Issue: Outbound network/DNS appears unavailable in this environment; `curl https://repo.packagist.org/...` fails with "Could not resolve host".
  Impact: `composer install` cannot download dependencies from Packagist.
- Issue: MySQL 9.6.0 and 8.4.8 `mysqld --initialize-insecure` crash with SIGSEGV on this machine.
  Impact: Cannot initialize a local MySQL data directory with Homebrew MySQL.
- Issue: MariaDB can initialize a datadir, but `mariadbd` fails to bind TCP port ("Operation not permitted") and even Unix socket bind fails in /tmp.
  Impact: Cannot start a local MySQL-compatible server in this environment.
- Update: Network access works when commands are run outside the sandbox (escalated). Use escalated `curl`/`composer` when downloads fail.
- Issue: `composer install` failed due to `vimeo/psalm` PHP version constraints with PHP 8.5.
  Resolution: Set `config.platform.php` to 8.2.0 in `composer.json`, then run `composer install --no-dev --no-scripts`.
- Issue: `composer install` failed at `cghooks` post-install script.
  Resolution: Re-run with `--no-scripts`.
- Issue: `php artisan key:generate` failed due to missing `Espier\\Swagger\\Providers\\SwaggerServiceProvider` (dev-only) and unwritable `storage/logs`.
  Resolution: Guard the provider registration in `bootstrap/app.php` with `class_exists(...)` and ensure `storage/` + `bootstrap/cache` are writable.
- Issue: `doctrine:migrations:migrate` reported menu update error due to missing table `outside_item_multi_lang_mod_lang_arsa`.
  Status: Migration continued; may need to re-check if multilingual tables for `ar-SA` are required.
- Issue: API login returned error `outside_item_multi_lang_mod_lang_arsa` table missing.
  Resolution: Ran `php artisan lang:init ar-SA` to create language tables.
- Issue: API login returned `Could not create token: Key provided is shorter than 256 bits`.
  Resolution: Set `JWT_SECRET` to a base64-encoded 32-byte value in `.env`.


## 2026-02-04
- Issue: `php artisan lang:init ar-SA` failed with `Table 'ecshopx.multi_lang_mod' doesn't exist`.
  Resolution: Run `php artisan doctrine:migrations:migrate --no-interaction` first, then re-run `php artisan lang:init ar-SA`.
- Issue: First migration run printed `update shop menus` error because `outside_item_multi_lang_mod_lang_arSA` was missing.
  Resolution: After `lang:init ar-SA`, re-run `php artisan doctrine:migrations:migrate --no-interaction` to refresh menus (prints `update shop menus success!`).
- Issue: `npm install` warns `EBADENGINE` because current Node is `v23.11.0` but project requires `16.16.0`.
  Status: Dev server still starts, but use Node 16.16.0 for best compatibility.

## 2026-02-05
- Issue: Desktop 前端启动后提示 `Address 0.0.0.0:3000 is already in use`，Nuxt 自动切换到随机端口，导致访问 `http://localhost:3000` 看到错误或不是当前实例。
  Resolution: 释放 3000 端口（结束占用进程），重新执行 `npm run dev`，确认服务监听 `:3000`。
- Issue: Desktop 页面点击后出现 CORS 报错（页面刷新后偶尔恢复）。原因是浏览器实际访问的是 `http://192.168.7.101:3000`，但后端 `CORS_ALLOWED_ORIGINS` 仅允许 `localhost/127.0.0.1`。
  Resolution: 在 `ECShopX/.env` 的 `CORS_ALLOWED_ORIGINS` 中加入 `http://192.168.7.101:3000`（或直接使用 `http://localhost:3000` 访问），并重启后端服务。
