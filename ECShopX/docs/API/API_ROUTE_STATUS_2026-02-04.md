# API Route Status Report

- Generated: 2026-02-04
- Base URL: http://127.0.0.1:9058/api
- Source: docs/API_ROUTES.md

## Summary

- Total routes: 2303
- GET tested: 1232
- Passed (HTTP 200 and no error status_code): 112
- Failed (non-200 or error status_code): 1120
- Skipped (non-GET): 1071

## Results

| Method | Route | Prefix | File | Line | HTTP | API Status | Result | Snippet |
|---|---|---|---|---:|---:|---:|---|---|
| GET | /aftersales | /admin/wxapp | routes/admin/aftersales.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /aftersales/info | /admin/wxapp | routes/admin/aftersales.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /aftersales/review | /admin/wxapp | routes/admin/aftersales.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /aftersales/refundCheck | /admin/wxapp | routes/admin/aftersales.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /aftersales | /admin/wxapp | routes/admin/aftersales.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /aftersales/reason/list | /admin/wxapp | routes/admin/aftersales.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /login | /admin/wxapp | routes/admin/auth.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /workwecahtlogin | /admin/wxapp | routes/admin/auth.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /check | /admin/wxapp | routes/admin/auth.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /qrcode | /admin/wxapp | routes/admin/auth.php | 26 | 200 | 500 | ERROR | {"data":{"message":"Cannot use object of type CompanysBundle\\Ego\\GenericUser as array","status_code":500}} |
| POST | /espier/image_upload_token | /admin/wxapp | routes/admin/auth.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/uploadlocal | /admin/wxapp | routes/admin/auth.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /card_consume | /admin/wxapp | routes/admin/card.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /user_card_detail | /admin/wxapp | routes/admin/card.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /salespersongivecoupons | /admin/wxapp | routes/admin/card.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /salespersongivecoupons/{id} | /admin/wxapp | routes/admin/card.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /permissioncoupons | /admin/wxapp | routes/admin/card.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getusercoupons | /admin/wxapp | routes/admin/card.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /couponrecord | /admin/wxapp | routes/admin/card.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sendCouponList | /admin/wxapp | routes/admin/card.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesperson/coupon | /admin/wxapp | routes/admin/card.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /couponrecord | /admin/wxapp | routes/admin/card.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getinfo | /admin/wxapp | routes/admin/distributor.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getinfo | /h5app | routes/admin/distributor.php | 16 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /distributorlist | /admin/wxapp | routes/admin/distributor.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributorlist | /h5app | routes/admin/distributor.php | 17 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /shoplist | /admin/wxapp | routes/admin/distributor.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shoplist | /h5app | routes/admin/distributor.php | 18 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salespersonCount | /admin/wxapp | routes/admin/distributor.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salespersonCount | /h5app | routes/admin/distributor.php | 19 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salespersonQrcode | /admin/wxapp | routes/admin/distributor.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salespersonQrcode | /h5app | routes/admin/distributor.php | 21 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /salespersonQrcode | /admin/wxapp | routes/admin/distributor.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /salespersonQrcode | /h5app | routes/admin/distributor.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /cartdataadd | /admin/wxapp | routes/admin/distributor.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /cartdataadd | /h5app | routes/admin/distributor.php | 24 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /items/scancodeAddcart | /admin/wxapp | routes/admin/distributor.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /items/scancodeAddcart | /h5app | routes/admin/distributor.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /scancodeAddcart | /admin/wxapp | routes/admin/distributor.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /scancodeAddcart | /h5app | routes/admin/distributor.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /cartdataupdate | /admin/wxapp | routes/admin/distributor.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /cartdataupdate | /h5app | routes/admin/distributor.php | 27 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /cartdatalist | /admin/wxapp | routes/admin/distributor.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /cartdatalist | /h5app | routes/admin/distributor.php | 28 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /cartdatadel | /admin/wxapp | routes/admin/distributor.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /cartdatadel | /h5app | routes/admin/distributor.php | 29 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salesPromotion | /admin/wxapp | routes/admin/distributor.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesPromotion | /h5app | routes/admin/distributor.php | 30 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /statistics | /admin/wxapp | routes/admin/distributor.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /statistics | /h5app | routes/admin/distributor.php | 32 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /statistics/typelist | /admin/wxapp | routes/admin/distributor.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /statistics/typelist | /h5app | routes/admin/distributor.php | 33 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /noticeunreadcount | /admin/wxapp | routes/admin/distributor.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /noticeunreadcount | /h5app | routes/admin/distributor.php | 35 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /noticelist | /admin/wxapp | routes/admin/distributor.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /noticelist | /h5app | routes/admin/distributor.php | 36 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /notice | /admin/wxapp | routes/admin/distributor.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /notice | /h5app | routes/admin/distributor.php | 37 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /leaderboard | /admin/wxapp | routes/admin/distributor.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /leaderboard | /h5app | routes/admin/distributor.php | 39 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /leaderboard/salesperson | /admin/wxapp | routes/admin/distributor.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /leaderboard/salesperson | /h5app | routes/admin/distributor.php | 40 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /leaderboard/distributor | /admin/wxapp | routes/admin/distributor.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /leaderboard/distributor | /h5app | routes/admin/distributor.php | 41 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salesperson/task | /admin/wxapp | routes/admin/distributor.php | 43 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesperson/task | /h5app | routes/admin/distributor.php | 43 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salesperson/task/{taskId} | /admin/wxapp | routes/admin/distributor.php | 44 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesperson/task/{taskId} | /h5app | routes/admin/distributor.php | 44 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /shop/checkSign | /admin/wxapp | routes/admin/distributor.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shop/checkSign | /h5app | routes/admin/distributor.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shop/signin | /admin/wxapp | routes/admin/distributor.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shop/signin | /h5app | routes/admin/distributor.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shop/signout | /admin/wxapp | routes/admin/distributor.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shop/signout | /h5app | routes/admin/distributor.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /bydistributor/salespersonQrcode/{company_id} | /admin/wxapp | routes/admin/distributor.php | 51 | 200 |  | OK | {"data":[]} |
| GET | /bydistributor/salespersonQrcode/{company_id} | /h5app | routes/admin/distributor.php | 51 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/bydistributor/salespersonQrcode/{company_id} | /admin/wxapp | routes/admin/distributor.php | 54 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/bydistributor/salespersonQrcode/{company_id} | /h5app | routes/admin/distributor.php | 54 | 200 |  | OK | {"data":[]} |
| GET | /salespersonCount | /admin/wxapp | routes/admin/distributor.php | 60 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salespersonCount | /h5app | routes/admin/distributor.php | 60 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salespersonFee | /admin/wxapp | routes/admin/distributor.php | 61 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /salespersonFee | /h5app | routes/admin/distributor.php | 61 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /items/list | /admin/wxapp | routes/admin/goods.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/promotion/items | /admin/wxapp | routes/admin/goods.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/itemsinfo | /admin/wxapp | routes/admin/goods.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/category | /admin/wxapp | routes/admin/goods.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /custom/goods/category | /admin/wxapp | routes/admin/goods.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/category/{cat_id} | /admin/wxapp | routes/admin/goods.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/categorylevel | /admin/wxapp | routes/admin/goods.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getUserData | /admin/wxapp | routes/admin/member.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /asyncGetUserData | /admin/wxapp | routes/admin/member.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getUserList | /admin/wxapp | routes/admin/member.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributors/getUserList | /admin/wxapp | routes/admin/member.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/taglist | /admin/wxapp | routes/admin/member.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/reltag | /admin/wxapp | routes/admin/member.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /member/delreltag | /admin/wxapp | routes/admin/member.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/onlinetag | /admin/wxapp | routes/admin/member.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/tagadd | /admin/wxapp | routes/admin/member.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/tagupdate | /admin/wxapp | routes/admin/member.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/selftag | /admin/wxapp | routes/admin/member.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /member/delselftag | /admin/wxapp | routes/admin/member.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/grouplist | /admin/wxapp | routes/admin/member.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/grouplist | /admin/wxapp | routes/admin/member.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/userlistbygroup | /admin/wxapp | routes/admin/member.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /member/grouplist | /admin/wxapp | routes/admin/member.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/moveusertogroup | /admin/wxapp | routes/admin/member.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /member/grouplist | /admin/wxapp | routes/admin/member.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/remarks | /admin/wxapp | routes/admin/member.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/remarks | /admin/wxapp | routes/admin/member.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/browse/history/{userId} | /admin/wxapp | routes/admin/member.php | 43 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/create | /admin/wxapp | routes/admin/orders.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/getlist | /admin/wxapp | routes/admin/orders.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/getinfo | /admin/wxapp | routes/admin/orders.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/getsalespersonlist | /admin/wxapp | routes/admin/orders.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/getSalepersonOrdersList | /admin/wxapp | routes/admin/orders.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/delivery | /admin/wxapp | routes/admin/orders.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/process/{orderId} | /admin/wxapp | routes/admin/orders.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trackerpull | /admin/wxapp | routes/admin/orders.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/ziti | /admin/wxapp | routes/admin/orders.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/detail | /admin/wxapp | routes/admin/orders.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /normalcreate | /admin/wxapp | routes/admin/orders.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /cartcheckout | /admin/wxapp | routes/admin/orders.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /orderstatus | /admin/wxapp | routes/admin/orders.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /logistics/list | /admin/wxapp | routes/admin/orders.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/activearticlelist | /admin/wxapp | routes/admin/promotions.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/activearticle/{id} | /admin/wxapp | routes/admin/promotions.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/activearticleforward | /admin/wxapp | routes/admin/promotions.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /reservation/list | /admin/wxapp | routes/admin/reservation.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /reservation/getdate | /admin/wxapp | routes/admin/reservation.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /resourcelevel/list | /admin/wxapp | routes/admin/reservation.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /reservation | /admin/wxapp | routes/admin/reservation.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /getRightsList | /admin/wxapp | routes/admin/reservation.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getTimeList | /admin/wxapp | routes/admin/reservation.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /reservation/updateStatus | /admin/wxapp | routes/admin/reservation.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfform/list | /admin/wxapp | routes/admin/selfService.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfform/tempinfo | /admin/wxapp | routes/admin/selfService.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfform/saveuserform | /admin/wxapp | routes/admin/selfService.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfform/statisticalAnalysis | /admin/wxapp | routes/admin/selfService.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfform/physical/datelist | /admin/wxapp | routes/admin/selfService.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade | /admin/wxapp | routes/admin/trade.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /right | /admin/wxapp | routes/admin/trade.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /right/consume | /admin/wxapp | routes/admin/trade.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /right/list | /admin/wxapp | routes/admin/trade.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /consumer/list | /admin/wxapp | routes/admin/trade.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /discountcard |  | routes/api/CardVoucher.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /discountcard |  | routes/api/CardVoucher.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /discountcard |  | routes/api/CardVoucher.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /discountcard/get |  | routes/api/CardVoucher.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /discountcard/list |  | routes/api/CardVoucher.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /discountcard/detail/list |  | routes/api/CardVoucher.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /effectiveDiscountcard/list |  | routes/api/CardVoucher.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /discountcard/updatestore |  | routes/api/CardVoucher.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /discountcard/uploadToWechat |  | routes/api/CardVoucher.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /discountcard/listdata |  | routes/api/CardVoucher.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /discountcard/couponGrantSetting |  | routes/api/CardVoucher.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /discountcard/couponGrantSetting |  | routes/api/CardVoucher.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /discountcard/consume |  | routes/api/CardVoucher.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /membercard |  | routes/api/CardVoucher.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /membercard |  | routes/api/CardVoucher.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /membercard/grade |  | routes/api/CardVoucher.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /membercard/defaultGrade |  | routes/api/CardVoucher.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /membercard/grades |  | routes/api/CardVoucher.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /membercard/vipgrade |  | routes/api/CardVoucher.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /membercard/vipgrade |  | routes/api/CardVoucher.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /vipgrade/order |  | routes/api/CardVoucher.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /vipgrades/uselist |  | routes/api/CardVoucher.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /vipgrades/active_delay |  | routes/api/CardVoucher.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /vipgrades/batch_active_delay |  | routes/api/CardVoucher.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /voucher/package/list |  | routes/api/CardVoucher.php | 57 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /voucher/package/details |  | routes/api/CardVoucher.php | 58 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /voucher/package/check_grade_limit |  | routes/api/CardVoucher.php | 59 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /voucher/package/get_receives_log |  | routes/api/CardVoucher.php | 60 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /voucher/package |  | routes/api/CardVoucher.php | 61 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /voucher/package |  | routes/api/CardVoucher.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /voucher/package |  | routes/api/CardVoucher.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /getUserCardList |  | routes/api/CardVoucher.php | 68 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /is_open | /adapay | routes/api/adapay.php | 4 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /is_open | adapay | routes/api/adapay.php | 4 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /withdrawset | /adapay | routes/api/adapay.php | 5 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /withdrawset | adapay | routes/api/adapay.php | 5 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /withdrawset | /adapay | routes/api/adapay.php | 6 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /withdrawset | adapay | routes/api/adapay.php | 6 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /drawcash/getList | /adapay | routes/api/adapay.php | 7 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /drawcash/getList | adapay | routes/api/adapay.php | 7 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /withdraw | /adapay | routes/api/adapay.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /withdraw | adapay | routes/api/adapay.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/list | /adapay | routes/api/adapay.php | 9 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/list | adapay | routes/api/adapay.php | 9 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/info/{trade_id} | /adapay | routes/api/adapay.php | 10 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/info/{trade_id} | adapay | routes/api/adapay.php | 10 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/exportdata | /adapay | routes/api/adapay.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/exportdata | adapay | routes/api/adapay.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/list | /adapay | routes/api/adapay.php | 12 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/list | adapay | routes/api/adapay.php | 12 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /merchant_entry/create | /adapay | routes/api/adapay.php | 14 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /merchant_entry/create | adapay | routes/api/adapay.php | 14 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /merchant_entry/info | /adapay | routes/api/adapay.php | 15 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /merchant_entry/info | adapay | routes/api/adapay.php | 15 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/auditState | /adapay | routes/api/adapay.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/auditState | adapay | routes/api/adapay.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/setValid | /adapay | routes/api/adapay.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/setValid | adapay | routes/api/adapay.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/get | /adapay | routes/api/adapay.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/get | adapay | routes/api/adapay.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/create | /adapay | routes/api/adapay.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/create | adapay | routes/api/adapay.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/modify | /adapay | routes/api/adapay.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/modify | adapay | routes/api/adapay.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/update | /adapay | routes/api/adapay.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/update | adapay | routes/api/adapay.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /corp_member/get | /adapay | routes/api/adapay.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /corp_member/get | adapay | routes/api/adapay.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /corp_member/create | /adapay | routes/api/adapay.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /corp_member/create | adapay | routes/api/adapay.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /corp_member/modify | /adapay | routes/api/adapay.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /corp_member/modify | adapay | routes/api/adapay.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /corp_member/update | /adapay | routes/api/adapay.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /corp_member/update | adapay | routes/api/adapay.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /bank/list | /adapay | routes/api/adapay.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /bank/list | adapay | routes/api/adapay.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions/list | /adapay | routes/api/adapay.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions/list | adapay | routes/api/adapay.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions_third/list | /adapay | routes/api/adapay.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions_third/list | adapay | routes/api/adapay.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /merchant_resident/create | /adapay | routes/api/adapay.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /merchant_resident/create | adapay | routes/api/adapay.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /merchant_resident/info | /adapay | routes/api/adapay.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /merchant_resident/info | adapay | routes/api/adapay.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wx_business_cat/list | /adapay | routes/api/adapay.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wx_business_cat/list | adapay | routes/api/adapay.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | alipay_industry_cat/list | /adapay | routes/api/adapay.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | alipay_industry_cat/list | adapay | routes/api/adapay.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /license/upload | /adapay | routes/api/adapay.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /license/upload | adapay | routes/api/adapay.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /license_submit/create | /adapay | routes/api/adapay.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /license_submit/create | adapay | routes/api/adapay.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /license_submit/info | /adapay | routes/api/adapay.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /license_submit/info | adapay | routes/api/adapay.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /open_account/step | /adapay | routes/api/adapay.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /open_account/step | adapay | routes/api/adapay.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /generate/key | /adapay | routes/api/adapay.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /generate/key | adapay | routes/api/adapay.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /other/cat | /adapay | routes/api/adapay.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /other/cat | adapay | routes/api/adapay.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/list | /adapay | routes/api/adapay.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/list | adapay | routes/api/adapay.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/info/{id} | /adapay | routes/api/adapay.php | 42 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/info/{id} | adapay | routes/api/adapay.php | 42 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sub_approve/save_split_ledger | /adapay | routes/api/adapay.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/save_split_ledger | adapay | routes/api/adapay.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/draw_limit | /adapay | routes/api/adapay.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/draw_limit | adapay | routes/api/adapay.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sub_approve/draw_limit | /adapay | routes/api/adapay.php | 45 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/draw_limit | adapay | routes/api/adapay.php | 45 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sub_approve/draw_cash_config | /adapay | routes/api/adapay.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/draw_cash_config | adapay | routes/api/adapay.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sub_approve/draw_cash_config | /adapay | routes/api/adapay.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/draw_cash_config | adapay | routes/api/adapay.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/list | /adapay | routes/api/adapay.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/list | adapay | routes/api/adapay.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/distributors | /adapay | routes/api/adapay.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/distributors | adapay | routes/api/adapay.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/{id} | /adapay | routes/api/adapay.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/{id} | adapay | routes/api/adapay.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /dealer/disable | /adapay | routes/api/adapay.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /dealer/disable | adapay | routes/api/adapay.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /dealer/rel | /adapay | routes/api/adapay.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /dealer/rel | adapay | routes/api/adapay.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /log/list | /adapay | routes/api/adapay.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /log/list | adapay | routes/api/adapay.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /dealer/reset/{operatorId} | /adapay | routes/api/adapay.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /dealer/reset/{operatorId} | adapay | routes/api/adapay.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /dealer/update/{operatorId} | /adapay | routes/api/adapay.php | 57 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /dealer/update/{operatorId} | adapay | routes/api/adapay.php | 57 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /dealer/sub/del/{operatorId} | /adapay | routes/api/adapay.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /dealer/sub/del/{operatorId} | adapay | routes/api/adapay.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/list | /adapay | routes/api/adapay.php | 59 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/list | adapay | routes/api/adapay.php | 59 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/dealer_parent/get | /adapay | routes/api/adapay.php | 60 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dealer/dealer_parent/get | adapay | routes/api/adapay.php | 60 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /callback | /adapay | routes/api/adapay.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /callback | adapay | routes/api/adapay.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /aftersales |  | routes/api/aftersales.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /aftersales/logExport |  | routes/api/aftersales.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /aftersales/{aftersales_bn} |  | routes/api/aftersales.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /aftersales/review |  | routes/api/aftersales.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /aftersales/refundCheck |  | routes/api/aftersales.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /aftersales/reason/list |  | routes/api/aftersales.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /aftersales/reason/save |  | routes/api/aftersales.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /aftersales/financial/export |  | routes/api/aftersales.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /aftersales/remind/detail |  | routes/api/aftersales.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /aftersales/remind |  | routes/api/aftersales.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /aftersales/remark |  | routes/api/aftersales.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /aftersales/apply |  | routes/api/aftersales.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /aftersales/sendback |  | routes/api/aftersales.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /refund |  | routes/api/aftersales.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /refund/detail/{refund_bn} |  | routes/api/aftersales.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /refund/logExport |  | routes/api/aftersales.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /refund/offline/bank |  | routes/api/aftersales.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /refund/offline |  | routes/api/aftersales.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /setting/info | /aliminiapp | routes/api/aliminiapp.php | 5 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /setting/save | /aliminiapp | routes/api/aliminiapp.php | 6 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /config | /aliyunsms | routes/api/aliyunsms.php | 4 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /config | /aliyunsms | routes/api/aliyunsms.php | 5 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /status | /aliyunsms | routes/api/aliyunsms.php | 6 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /status | /aliyunsms | routes/api/aliyunsms.php | 7 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sign/list | /aliyunsms | routes/api/aliyunsms.php | 10 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sign/info | /aliyunsms | routes/api/aliyunsms.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sign/add | /aliyunsms | routes/api/aliyunsms.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sign/modify | /aliyunsms | routes/api/aliyunsms.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /sign/delete/{id} | /aliyunsms | routes/api/aliyunsms.php | 14 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /template/list | /aliyunsms | routes/api/aliyunsms.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /template/info | /aliyunsms | routes/api/aliyunsms.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /template/add | /aliyunsms | routes/api/aliyunsms.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /template/modify | /aliyunsms | routes/api/aliyunsms.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /template/delete/{id} | /aliyunsms | routes/api/aliyunsms.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /scene/list | /aliyunsms | routes/api/aliyunsms.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /scene/simpleList | /aliyunsms | routes/api/aliyunsms.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /scene/detail | /aliyunsms | routes/api/aliyunsms.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /scene/addItem | /aliyunsms | routes/api/aliyunsms.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /scene/enableItem | /aliyunsms | routes/api/aliyunsms.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /scene/disableItem | /aliyunsms | routes/api/aliyunsms.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /scene/deleteItem/{id} | /aliyunsms | routes/api/aliyunsms.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /record/list | /aliyunsms | routes/api/aliyunsms.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /task/add | /aliyunsms | routes/api/aliyunsms.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /task/modify | /aliyunsms | routes/api/aliyunsms.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /task/list | /aliyunsms | routes/api/aliyunsms.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /task/info | /aliyunsms | routes/api/aliyunsms.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /task/revoke | /aliyunsms | routes/api/aliyunsms.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/login |  | routes/api/auth.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/login |  | routes/api/auth.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/getLevel |  | routes/api/auth.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/authorizeurl |  | routes/api/auth.php | 28 | 200 |  | OK | {"data":{"url":"https:\/\/openapi.shopex.cn\/oauth\/authorize?response_type=code&redirect_uri=iframeLogin&view=ydsaas_iframe_login&reg=ydsaas_login&direct_reg_uri="}} |
| GET | /operator/oauth/logout |  | routes/api/auth.php | 30 | 200 |  | OK | {"data":{"url":"https:\/\/openapi.shopex.cn\/oauth\/logout?redirect_uri=login"}} |
| POST | /operator/oauth/login |  | routes/api/auth.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/workwechat/oauth/login |  | routes/api/auth.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/workwechat/bind_mobile |  | routes/api/auth.php | 41 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/workwechat/authorizeurl |  | routes/api/auth.php | 42 | 200 | 400 | ERROR | {"data":{"message":"\u7f3a\u5c11\u53c2\u6570","status_code":400}} |
| POST | /operator/wechat/oauth/login |  | routes/api/auth.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/wechat/lite/login |  | routes/api/auth.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/wechat/bind_mobile |  | routes/api/auth.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/wechat/bind_account |  | routes/api/auth.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/wechat/authorizeurl |  | routes/api/auth.php | 49 | 200 | 400 | ERROR | {"data":{"message":"\u7f3a\u5c11\u53c2\u6570","status_code":400}} |
| POST | /operator/wechat/sms/code |  | routes/api/auth.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/wechat/distributor/js/config |  | routes/api/auth.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /token/refresh |  | routes/api/auth.php | 55 | 401 |  | ERROR | {"data":{"message":"Token not provided","status_code":401}} |
| GET | /token/invalidate |  | routes/api/auth.php | 59 | 200 | 500 | ERROR | {"data":{"message":"Token could not be parsed from the request.","status_code":500}} |
| POST | /operator/shuyun/login |  | routes/api/auth.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /user/audit_state | /bspay | routes/api/bspay.php | 6 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /user/audit_state | bspay | routes/api/bspay.php | 6 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /user_indv/get | /bspay | routes/api/bspay.php | 7 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /user_indv/get | bspay | routes/api/bspay.php | 7 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /user_indv/create | /bspay | routes/api/bspay.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_indv/create | bspay | routes/api/bspay.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_indv/modify | /bspay | routes/api/bspay.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_indv/modify | bspay | routes/api/bspay.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_indv/update | /bspay | routes/api/bspay.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_indv/update | bspay | routes/api/bspay.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /user_ent/get | /bspay | routes/api/bspay.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /user_ent/get | bspay | routes/api/bspay.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /user_ent/create | /bspay | routes/api/bspay.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_ent/create | bspay | routes/api/bspay.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_ent/modify | /bspay | routes/api/bspay.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_ent/modify | bspay | routes/api/bspay.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_ent/update | /bspay | routes/api/bspay.php | 14 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /user_ent/update | bspay | routes/api/bspay.php | 14 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sub_approve/list | /bspay | routes/api/bspay.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/list | bspay | routes/api/bspay.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/info/{id} | /bspay | routes/api/bspay.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/info/{id} | bspay | routes/api/bspay.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sub_approve/save_audit | /bspay | routes/api/bspay.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/save_audit | bspay | routes/api/bspay.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/draw_limit | /bspay | routes/api/bspay.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/draw_limit | bspay | routes/api/bspay.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sub_approve/draw_limit | /bspay | routes/api/bspay.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/draw_limit | bspay | routes/api/bspay.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sub_approve/draw_cash_config | /bspay | routes/api/bspay.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sub_approve/draw_cash_config | bspay | routes/api/bspay.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sub_approve/draw_cash_config | /bspay | routes/api/bspay.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sub_approve/draw_cash_config | bspay | routes/api/bspay.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions | /bspay | routes/api/bspay.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions | bspay | routes/api/bspay.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions/third | /bspay | routes/api/bspay.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regions/third | bspay | routes/api/bspay.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/list | /bspay | routes/api/bspay.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/list | bspay | routes/api/bspay.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/info/{trade_id} | /bspay | routes/api/bspay.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/info/{trade_id} | bspay | routes/api/bspay.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/exportdata | /bspay | routes/api/bspay.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/exportdata | bspay | routes/api/bspay.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /withdraw/balance | /bspay | routes/api/bspay.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /withdraw/balance | bspay | routes/api/bspay.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /withdraw/apply | /bspay | routes/api/bspay.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /withdraw/apply | bspay | routes/api/bspay.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /withdraw/lists | /bspay | routes/api/bspay.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /withdraw/lists | bspay | routes/api/bspay.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /withdraw/audit | /bspay | routes/api/bspay.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /withdraw/audit | bspay | routes/api/bspay.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /withdraw/huifu | /bspay | routes/api/bspay.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /withdraw/huifu | bspay | routes/api/bspay.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /withdraw/exportdata | /bspay | routes/api/bspay.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /withdraw/exportdata | bspay | routes/api/bspay.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /callback/{eventType} | /bspay | routes/api/bspay.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /callback/{eventType} | bspay | routes/api/bspay.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /division/list |  | routes/api/chinaumspay.php | 18 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /division/detail/list |  | routes/api/chinaumspay.php | 19 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /division/errorlog/list |  | routes/api/chinaumspay.php | 20 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| PUT | /division/errorlog/resubmit/{id} |  | routes/api/chinaumspay.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /division/exportdata |  | routes/api/chinaumspay.php | 22 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /division/detail/exportdata |  | routes/api/chinaumspay.php | 23 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /comment |  | routes/api/comments.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /comment/{comment_id} |  | routes/api/comments.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /comments |  | routes/api/comments.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /chief/apply_fields | community | routes/api/community.php | 8 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /chief/apply_field | community | routes/api/community.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | chief/apply_field/switch/{id} | community | routes/api/community.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /chief/apply_field/{id} | community | routes/api/community.php | 11 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /chief/apply_field/{id} | community | routes/api/community.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /chief/apply/wxaCode | community | routes/api/community.php | 14 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /chief/apply/list | community | routes/api/community.php | 15 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /chief/apply/info/{apply_id} | community | routes/api/community.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /chief/approve/{apply_id} | community | routes/api/community.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /chief/setMemberCommunity | community | routes/api/community.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /chief/list | community | routes/api/community.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /chief/{chief_id} | community | routes/api/community.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /rebate/count | community | routes/api/community.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /cash_withdrawal | community | routes/api/community.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /cash_withdrawal/{cash_withdrawal_id} | community | routes/api/community.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /cash_withdrawal/payinfo/{cash_withdrawal_id} | community | routes/api/community.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /orders | community | routes/api/community.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /orders/export | community | routes/api/community.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/{order_id} | community | routes/api/community.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /list | community | routes/api/community.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /activity/confirm/delivery | community | routes/api/community.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /chief/deliver | community | routes/api/community.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /items | community | routes/api/community.php | 42 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /items | community | routes/api/community.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /itemMinDeliveryNum | community | routes/api/community.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /itemSort | community | routes/api/community.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /item/{goods_id} | community | routes/api/community.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /activity/setting | community | routes/api/community.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /activity/setting | community | routes/api/community.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/credential |  | routes/api/companys.php | 17 | 200 | 500 | ERROR | {"data":{"message":"\u65e0\u6743\u8bbf\u95ee\u8be5API,\u7b7e\u540d\u9519\u8bef","status_code":500}} |
| GET | /operator/basic |  | routes/api/companys.php | 18 | 200 | 500 | ERROR | {"data":{"message":"\u65e0\u6743\u8bbf\u95ee\u8be5API,\u7b7e\u540d\u9519\u8bef","status_code":500}} |
| GET | /operator/images/code |  | routes/api/companys.php | 22 | 200 |  | OK | {"data":{"imageToken":"76a4e529d057d227ade2105f8b9e1457","imageData":"data:image\/png;base64,\/9j\/4AAQSkZJRgABAQEAYABgAAD\/\/gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2ODApLCBxdWFsaXR5ID0 |
| POST | /operator/sms/code |  | routes/api/companys.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/resetpassword |  | routes/api/companys.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/app/image/code |  | routes/api/companys.php | 29 | 200 |  | OK | {"data":{"imageToken":"94447003d0d5577d0018eca30f74d1ca","imageData":"data:image\/png;base64,\/9j\/4AAQSkZJRgABAQEAYABgAAD\/\/gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2ODApLCBxdWFsaXR5ID0 |
| POST | /operator/app/sms/code |  | routes/api/companys.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /company/activate |  | routes/api/companys.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /company/activate |  | routes/api/companys.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /company/applications |  | routes/api/companys.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /company/resources |  | routes/api/companys.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /companys/setting |  | routes/api/companys.php | 42 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /company/privacy_setting |  | routes/api/companys.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /company/privacy_setting |  | routes/api/companys.php | 45 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /company/domain_setting |  | routes/api/companys.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /company/domain_setting |  | routes/api/companys.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /company/setting |  | routes/api/companys.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /company/setting |  | routes/api/companys.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /share/setting |  | routes/api/companys.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /share/setting |  | routes/api/companys.php | 53 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /setting/selfdelivery |  | routes/api/companys.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /setting/selfdelivery |  | routes/api/companys.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /company/operatorlogs |  | routes/api/companys.php | 57 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /operator/updatedata |  | routes/api/companys.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/select/distributor |  | routes/api/companys.php | 61 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /operator/changestatus |  | routes/api/companys.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /setting/weburl |  | routes/api/companys.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /setting/weburl |  | routes/api/companys.php | 66 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /traderate/setting |  | routes/api/companys.php | 68 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /traderate/setting |  | routes/api/companys.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/whitelist/setting |  | routes/api/companys.php | 71 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/whitelist/setting |  | routes/api/companys.php | 72 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pickupcode/setting |  | routes/api/companys.php | 75 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pickupcode/setting |  | routes/api/companys.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ydleads/create |  | routes/api/companys.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /gift/setting |  | routes/api/companys.php | 80 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /gift/setting |  | routes/api/companys.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sendoms/setting |  | routes/api/companys.php | 82 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sendoms/setting |  | routes/api/companys.php | 83 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /nostores/setting |  | routes/api/companys.php | 86 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /nostores/setting |  | routes/api/companys.php | 87 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /recharge/setting |  | routes/api/companys.php | 90 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /recharge/setting |  | routes/api/companys.php | 91 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /itemStore/setting |  | routes/api/companys.php | 94 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /itemStore/setting |  | routes/api/companys.php | 95 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /itemSales/setting |  | routes/api/companys.php | 98 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /itemSales/setting |  | routes/api/companys.php | 99 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /invoice/setting |  | routes/api/companys.php | 102 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /invoice/setting |  | routes/api/companys.php | 103 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /itemshare/setting |  | routes/api/companys.php | 106 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /itemshare/setting |  | routes/api/companys.php | 107 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shareParameters/setting |  | routes/api/companys.php | 110 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /shareParameters/setting |  | routes/api/companys.php | 111 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /dianwu/setting |  | routes/api/companys.php | 114 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /dianwu/setting |  | routes/api/companys.php | 115 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /itemPrice/setting |  | routes/api/companys.php | 118 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /itemPrice/setting |  | routes/api/companys.php | 119 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /categoryPage/setting |  | routes/api/companys.php | 120 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /categoryPage/setting |  | routes/api/companys.php | 121 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /pharmaIndustry/setting |  | routes/api/companys.php | 123 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /settings |  | routes/api/companys.php | 125 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /openDivided/setting |  | routes/api/companys.php | 127 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /items/startNum/setting |  | routes/api/companys.php | 130 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /items/startNum/setting |  | routes/api/companys.php | 131 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /supplierItems/startNum/setting |  | routes/api/companys.php | 134 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /supplierItems/startNum/setting |  | routes/api/companys.php | 135 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /mail/setting |  | routes/api/companys.php | 138 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /mail/setting |  | routes/api/companys.php | 139 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shops/wxshops |  | routes/api/companys.php | 144 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/wxshops/sync |  | routes/api/companys.php | 146 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shops/wxshops/setting |  | routes/api/companys.php | 147 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /shops/wxshops/setting |  | routes/api/companys.php | 148 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/wxshops |  | routes/api/companys.php | 150 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /shops/wxshops/setDefaultShop |  | routes/api/companys.php | 151 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shops/wxshops/setShopResource |  | routes/api/companys.php | 152 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/wxshops/{wx_shop_id} |  | routes/api/companys.php | 153 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /shops/wxshops/{wx_shop_id} |  | routes/api/companys.php | 154 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shops/wxshops/{wx_shop_id} |  | routes/api/companys.php | 155 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shops/wxshops/setShopStatus |  | routes/api/companys.php | 157 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /company |  | routes/api/companys.php | 159 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shops/protocol |  | routes/api/companys.php | 160 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/protocol |  | routes/api/companys.php | 161 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /article/management |  | routes/api/companys.php | 166 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /article/management/{article_id} |  | routes/api/companys.php | 167 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /article/management/{article_id} |  | routes/api/companys.php | 168 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /article/management |  | routes/api/companys.php | 169 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /article/management/{article_id} |  | routes/api/companys.php | 170 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /article/updatestatusorsort |  | routes/api/companys.php | 171 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /article/category |  | routes/api/companys.php | 173 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /article/category |  | routes/api/companys.php | 174 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /article/category/{category_id} |  | routes/api/companys.php | 175 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /article/category/{category_id} |  | routes/api/companys.php | 176 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /article/category/{category_id} |  | routes/api/companys.php | 177 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /currency |  | routes/api/companys.php | 182 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /currency/{id} |  | routes/api/companys.php | 183 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /currency/{id} |  | routes/api/companys.php | 184 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /currency/{id} |  | routes/api/companys.php | 185 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /currency |  | routes/api/companys.php | 186 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /currencySetDefault/{id} |  | routes/api/companys.php | 187 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /currencyGetDefault |  | routes/api/companys.php | 188 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /account/management |  | routes/api/companys.php | 192 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /account/management |  | routes/api/companys.php | 193 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /account/management/{operator_id} |  | routes/api/companys.php | 194 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PATCH | /account/management/{operator_id} |  | routes/api/companys.php | 195 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /account/management/{operator_id} |  | routes/api/companys.php | 196 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /roles/management |  | routes/api/companys.php | 198 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /roles/management |  | routes/api/companys.php | 199 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /roles/management/{role_id} |  | routes/api/companys.php | 200 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PATCH | /roles/management/{role_id} |  | routes/api/companys.php | 201 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /roles/management/{role_id} |  | routes/api/companys.php | 202 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /permission |  | routes/api/companys.php | 206 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /operator/getinfo |  | routes/api/companys.php | 207 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getStatistics |  | routes/api/companys.php | 212 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getNoticeStatistics |  | routes/api/companys.php | 213 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regionauth |  | routes/api/companys.php | 218 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /regionauth/{id} |  | routes/api/companys.php | 219 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /regionauth |  | routes/api/companys.php | 220 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /regionauth/{id} |  | routes/api/companys.php | 221 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /regionauth/{id} |  | routes/api/companys.php | 222 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /regionauth/enable/{id} |  | routes/api/companys.php | 223 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxexternalconfig/list |  | routes/api/companys.php | 228 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxexternalconfig/create |  | routes/api/companys.php | 229 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxexternalconfig/update/{wx_external_config_id} |  | routes/api/companys.php | 230 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxexternalconfig/{wx_external_config_id} |  | routes/api/companys.php | 232 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxexternalroutes/list |  | routes/api/companys.php | 234 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxexternalroutes/create |  | routes/api/companys.php | 235 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxexternalroutes/update/{wx_external_config_id} |  | routes/api/companys.php | 236 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxexternalroutes/{wx_external_config_id} |  | routes/api/companys.php | 237 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxexternalconfigroutes/list |  | routes/api/companys.php | 238 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /datapass |  | routes/api/companys.php | 243 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /datapass/apply/{id} |  | routes/api/companys.php | 244 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /datapass/open/{id} |  | routes/api/companys.php | 245 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /datapass/close/{id} |  | routes/api/companys.php | 246 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datapass |  | routes/api/companys.php | 248 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datapass/{id} |  | routes/api/companys.php | 249 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datapasslog |  | routes/api/companys.php | 250 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /operator/scancodeAddcart |  | routes/api/companys.php | 255 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/cartdataadd |  | routes/api/companys.php | 256 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/cartdataupdate |  | routes/api/companys.php | 257 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/cartdatalist |  | routes/api/companys.php | 258 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /operator/cartdatadel |  | routes/api/companys.php | 259 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator/pending/list |  | routes/api/companys.php | 260 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /operator/cartdata/pending |  | routes/api/companys.php | 261 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/order/pending |  | routes/api/companys.php | 262 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator/pending/fetch |  | routes/api/companys.php | 263 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /operator/pending/delete |  | routes/api/companys.php | 264 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /crossborder/origincountry |  | routes/api/crossborder.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /crossborder/origincountry |  | routes/api/crossborder.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /crossborder/origincountry/{origincountry_id} |  | routes/api/crossborder.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /crossborder/origincountry/{origincountry_id} |  | routes/api/crossborder.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /crossborder/set |  | routes/api/crossborder.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /crossborder/set |  | routes/api/crossborder.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /crossborder/taxstrategy |  | routes/api/crossborder.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /crossborder/taxstrategy/{taxstrategy_id} |  | routes/api/crossborder.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /crossborder/taxstrategy |  | routes/api/crossborder.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /crossborder/taxstrategy/{taxstrategy_id} |  | routes/api/crossborder.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /crossborder/taxstrategy/{taxstrategy_id} |  | routes/api/crossborder.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /dataAnalysis/youshu/setting |  | routes/api/dataAnalysis.php | 4 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /dataAnalysis/youshu/query |  | routes/api/dataAnalysis.php | 5 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /datacube/sources |  | routes/api/datacube.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datacube/sources |  | routes/api/datacube.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/sources/{source_id} |  | routes/api/datacube.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /datacube/sources/{source_id} |  | routes/api/datacube.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /datacube/sources/{source_id} |  | routes/api/datacube.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datacube/companydata |  | routes/api/datacube.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/distributordata |  | routes/api/datacube.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/goodsdata |  | routes/api/datacube.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /datacube/savetags |  | routes/api/datacube.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datacube/deliverystaffdata |  | routes/api/datacube.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/Deliverystaffdata/export |  | routes/api/datacube.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/monitors |  | routes/api/datacube.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/monitors/{monitor_id} |  | routes/api/datacube.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /datacube/monitors/{monitor_id} |  | routes/api/datacube.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /datacube/monitors |  | routes/api/datacube.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /datacube/monitorsRelSources |  | routes/api/datacube.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datacube/monitorsRelSources/{monitor_id} |  | routes/api/datacube.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /datacube/monitorsRelSources/{monitor_id}/{source_id} |  | routes/api/datacube.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datacube/monitorsstats |  | routes/api/datacube.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /datacube/monitorsWxaCode64 |  | routes/api/datacube.php | 45 | 200 | 422 | ERROR | {"data":{"message":"\u83b7\u53d6\u5c0f\u7a0b\u5e8f\u7801\u53c2\u6570\u51fa\u9519\uff0c\u8bf7\u68c0\u67e5.","errors":{"monitor_id":["validation.required"],"source_id":["validation.required"]},"status_c |
| GET | /datacube/monitorsWxaCodeStream |  | routes/api/datacube.php | 46 | 200 | 422 | ERROR | {"data":{"message":"\u83b7\u53d6\u5c0f\u7a0b\u5e8f\u7801\u53c2\u6570\u51fa\u9519\uff0c\u8bf7\u68c0\u67e5.","errors":{"monitor_id":["validation.required"],"source_id":["validation.required"]},"status_c |
| GET | /datacube/miniprogram/pages |  | routes/api/datacube.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /deposit/rechargerule |  | routes/api/deposit.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /deposit/rechargerules |  | routes/api/deposit.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /deposit/rechargerule/{id} |  | routes/api/deposit.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /deposit/rechargerule |  | routes/api/deposit.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /deposit/recharge/agreement |  | routes/api/deposit.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /deposit/recharge/agreement |  | routes/api/deposit.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /deposit/recharge/multiple |  | routes/api/deposit.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /deposit/recharge/multiple |  | routes/api/deposit.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /deposit/trades |  | routes/api/deposit.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /deposit/count/index |  | routes/api/deposit.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /deposit/recharge |  | routes/api/deposit.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distributor |  | routes/api/distributor.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributors |  | routes/api/distributor.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributors/info |  | routes/api/distributor.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /distributor/{distributor_id} |  | routes/api/distributor.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /distributor/{distributor_id}/payment-subject |  | routes/api/distributor.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/count/{distributorId} |  | routes/api/distributor.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/wxacode |  | routes/api/distributor.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/easylist |  | routes/api/distributor.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/items |  | routes/api/distributor.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/items |  | routes/api/distributor.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/items/export |  | routes/api/distributor.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /distributor/items |  | routes/api/distributor.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /distributors/item |  | routes/api/distributor.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distribution/basic_config |  | routes/api/distributor.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distribution/basic_config |  | routes/api/distributor.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distribution/cash_withdrawals |  | routes/api/distributor.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /distribution/cash_withdrawal/{id} |  | routes/api/distributor.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/cash_withdrawal/payinfo/{cash_withdrawal_id} |  | routes/api/distributor.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distribution/logs |  | routes/api/distributor.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distribution/count |  | routes/api/distributor.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/getShop |  | routes/api/distributor.php | 44 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/default |  | routes/api/distributor.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distributor/tag |  | routes/api/distributor.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /distributor/tag/{tagId} |  | routes/api/distributor.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /distributor/tag/{tagId} |  | routes/api/distributor.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/tag |  | routes/api/distributor.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/tag/{tagId} |  | routes/api/distributor.php | 57 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/reltag |  | routes/api/distributor.php | 59 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distributor/deltag |  | routes/api/distributor.php | 61 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shops |  | routes/api/distributor.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shops/{distributor_id:[0-9]+} |  | routes/api/distributor.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /shops/{distributor_id:[0-9]+} |  | routes/api/distributor.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/{distributor_id:[0-9]+} |  | routes/api/distributor.php | 67 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shops |  | routes/api/distributor.php | 68 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /dshops/setDefaultShop |  | routes/api/distributor.php | 70 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /dshops/setShopStatus |  | routes/api/distributor.php | 71 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distribution/config |  | routes/api/distributor.php | 75 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distribution/config |  | routes/api/distributor.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distributors/aftersalesaddress |  | routes/api/distributor.php | 79 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /distributors/aftersalesaddress |  | routes/api/distributor.php | 80 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /distributors/aftersalesaddress/{address_id} |  | routes/api/distributor.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributors/aftersalesaddress |  | routes/api/distributor.php | 82 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributors/aftersalesaddress/{address_id} |  | routes/api/distributor.php | 83 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributors/aftersales |  | routes/api/distributor.php | 85 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/salesperson/role |  | routes/api/distributor.php | 87 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/salesperson/role/{salesmanRoleId} |  | routes/api/distributor.php | 88 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/salesperson/role |  | routes/api/distributor.php | 89 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /distributor/salesperson/role/{salesmanRoleId} |  | routes/api/distributor.php | 90 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /distributor/salesperson/role/{salesmanRoleId} |  | routes/api/distributor.php | 91 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distribution/getdistance |  | routes/api/distributor.php | 93 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distribution/setdistance |  | routes/api/distributor.php | 94 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shopScreen/advertisement |  | routes/api/distributor.php | 99 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /shopScreen/advertisement/{id} |  | routes/api/distributor.php | 100 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shopScreen/advertisement |  | routes/api/distributor.php | 101 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shopScreen/advertisement |  | routes/api/distributor.php | 102 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /shopScreen/slider |  | routes/api/distributor.php | 105 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shopScreen/slider |  | routes/api/distributor.php | 106 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/geofence |  | routes/api/distributor.php | 109 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/geofence |  | routes/api/distributor.php | 110 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /distributor/geofence |  | routes/api/distributor.php | 111 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pickuplocation/list |  | routes/api/distributor.php | 114 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /pickuplocation/{id} |  | routes/api/distributor.php | 115 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pickuplocation |  | routes/api/distributor.php | 116 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /pickuplocation/{id} |  | routes/api/distributor.php | 117 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /pickuplocation/{id} |  | routes/api/distributor.php | 118 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /pickuplocation/reldistributor |  | routes/api/distributor.php | 119 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /pickuplocation/reldistributor/cancel |  | routes/api/distributor.php | 120 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/selfdelivery/setting |  | routes/api/distributor.php | 123 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/selfdelivery/setting |  | routes/api/distributor.php | 124 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/whitelist/get |  | routes/api/distributor.php | 127 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/whitelist/delete |  | routes/api/distributor.php | 128 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distributor/whitelist/add |  | routes/api/distributor.php | 129 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/whitelist/export |  | routes/api/distributor.php | 130 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/config/inRule |  | routes/api/distributor.php | 133 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/config/inRule |  | routes/api/distributor.php | 134 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/getAreaByAddress |  | routes/api/distributor.php | 136 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /distributor/salesmans |  | routes/api/distributor.php | 140 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /distributor/salesman/{salesmanId} |  | routes/api/distributor.php | 141 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/salesman/role |  | routes/api/distributor.php | 142 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /distributor/salesman/role/{salesmanId} |  | routes/api/distributor.php | 143 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /distributor/salesman |  | routes/api/distributor.php | 144 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /distributor/salemanCustomerComplaints |  | routes/api/distributor.php | 145 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /distributor/salemanCustomerComplaints |  | routes/api/distributor.php | 146 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /salespersonotice/notice |  | routes/api/distributor.php | 148 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /salespersonotice/sendnotice |  | routes/api/distributor.php | 149 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /salespersonotice/withdrawnotice |  | routes/api/distributor.php | 150 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /salespersonotice/list |  | routes/api/distributor.php | 151 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salespersonotice/detail |  | routes/api/distributor.php | 152 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /salespersonotice/notice |  | routes/api/distributor.php | 153 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /salespersonotice/notice |  | routes/api/distributor.php | 154 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /profit/statistics |  | routes/api/distributor.php | 156 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /profit/export |  | routes/api/distributor.php | 157 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesperson/task |  | routes/api/distributor.php | 159 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesperson/task/statistics |  | routes/api/distributor.php | 160 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /salesperson/task/{taskId} |  | routes/api/distributor.php | 161 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /salesperson/task |  | routes/api/distributor.php | 162 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /salesperson/task/{taskId} |  | routes/api/distributor.php | 163 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /salesperson/task/{taskId} |  | routes/api/distributor.php | 164 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /salesperson/coupon |  | routes/api/distributor.php | 166 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /salesperson/coupon |  | routes/api/distributor.php | 167 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /salesperson/coupon/{id} |  | routes/api/distributor.php | 168 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shops/salesperson |  | routes/api/distributor.php | 171 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/salesperson |  | routes/api/distributor.php | 172 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /shops/salesperson/{salespersonId} |  | routes/api/distributor.php | 173 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shops/salesperson/{salespersonId} |  | routes/api/distributor.php | 174 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shops/saleperson/shoplist |  | routes/api/distributor.php | 176 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shops/saleperson/getinfo |  | routes/api/distributor.php | 177 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shops/saleperson/signlogs |  | routes/api/distributor.php | 179 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /enterprise |  | routes/api/employeepurchase.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /enterprise/{enterpriseId} |  | routes/api/employeepurchase.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /enterprise/{enterpriseId} |  | routes/api/employeepurchase.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /enterprise |  | routes/api/employeepurchase.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /enterprise/{enterpriseId} |  | routes/api/employeepurchase.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /enterprise/qrcode/{enterpriseId} |  | routes/api/employeepurchase.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /enterprise/status |  | routes/api/employeepurchase.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /enterprise/sort |  | routes/api/employeepurchase.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /enterprise/sendtestemail |  | routes/api/employeepurchase.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /employees |  | routes/api/employeepurchase.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /employee/{employeeId} |  | routes/api/employeepurchase.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /employee |  | routes/api/employeepurchase.php | 41 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /employee/{employeeId} |  | routes/api/employeepurchase.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /employee/{employeeId} |  | routes/api/employeepurchase.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /employees/export |  | routes/api/employeepurchase.php | 46 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /employeepurchase/activity/items |  | routes/api/employeepurchase.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /employeepurchase/activity/items |  | routes/api/employeepurchase.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/specitems |  | routes/api/employeepurchase.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /employeepurchase/activity/items |  | routes/api/employeepurchase.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /employeepurchase/activity/{activityId}/item/{itemId} |  | routes/api/employeepurchase.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /employeepurchase/activities |  | routes/api/employeepurchase.php | 61 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /employeepurchase/activity/users |  | routes/api/employeepurchase.php | 63 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /employeepurchase/activity/{activityId} |  | routes/api/employeepurchase.php | 65 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /employeepurchase/activity |  | routes/api/employeepurchase.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /employeepurchase/activity/{activityId} |  | routes/api/employeepurchase.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/if_share_store |  | routes/api/employeepurchase.php | 71 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/cancel/{activityId} |  | routes/api/employeepurchase.php | 73 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/suspend/{activityId} |  | routes/api/employeepurchase.php | 75 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/active/{activityId} |  | routes/api/employeepurchase.php | 77 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/end/{activityId} |  | routes/api/employeepurchase.php | 79 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /employeepurchase/activity/ahead/{activityId} |  | routes/api/employeepurchase.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/exportCsvData |  | routes/api/espier.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /espier/upload_file |  | routes/api/espier.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/upload_files |  | routes/api/espier.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/upload_error_file_export/{id} |  | routes/api/espier.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/upload_template |  | routes/api/espier.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /espier/image_upload_token |  | routes/api/espier.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/oss_upload_token |  | routes/api/espier.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/video_upload_token |  | routes/api/espier.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/image/cat |  | routes/api/espier.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/image/cat/children |  | routes/api/espier.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/image/cat/{image_cat_id} |  | routes/api/espier.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /espier/image/cat/{image_cat_id} |  | routes/api/espier.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/oss_upload |  | routes/api/espier.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/image |  | routes/api/espier.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/images |  | routes/api/espier.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /espier/images |  | routes/api/espier.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/image/movecat |  | routes/api/espier.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/upload_localimage |  | routes/api/espier.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/exportlog/list |  | routes/api/espier.php | 46 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/exportlog/file/down |  | routes/api/espier.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/address |  | routes/api/espier.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/printer |  | routes/api/espier.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /espier/printer |  | routes/api/espier.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/printer/shop |  | routes/api/espier.php | 53 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /espier/printer/shop |  | routes/api/espier.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /espier/printer/shop/{id} |  | routes/api/espier.php | 55 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /espier/printer/shop/{id} |  | routes/api/espier.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/config/request_fields |  | routes/api/espier.php | 60 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /espier/config/request_fields |  | routes/api/espier.php | 61 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /espier/config/request_fields/switch |  | routes/api/espier.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /espier/config/request_fields/info |  | routes/api/espier.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /espier/config/request_fields |  | routes/api/espier.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/config/request_field_setting |  | routes/api/espier.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/config/request_field_setting |  | routes/api/espier.php | 67 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/subdistrict |  | routes/api/espier.php | 70 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/subdistrict/{id} |  | routes/api/espier.php | 71 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /espier/subdistrict/{id} |  | routes/api/espier.php | 72 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /espier/subdistrict |  | routes/api/espier.php | 73 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /espier/offline/backaccount/lists |  | routes/api/espier.php | 76 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /espier/offline/backaccount/{id} |  | routes/api/espier.php | 77 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /espier/offline/backaccount/{id} |  | routes/api/espier.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/offline/backaccount/create |  | routes/api/espier.php | 79 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/offline/backaccount/update |  | routes/api/espier.php | 80 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/system/detect_version |  | routes/api/espier.php | 84 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/system/upgrade |  | routes/api/espier.php | 85 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/system/rollback |  | routes/api/espier.php | 86 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/system/changelog |  | routes/api/espier.php | 87 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/system/agreement |  | routes/api/espier.php | 90 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /fapiao/getFapiaoset |  | routes/api/fapiao.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /fapiao/saveFapiaoset |  | routes/api/fapiao.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/invoice/list |  | routes/api/fapiao.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/invoice/info/{id} |  | routes/api/fapiao.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/invoice/update/{id} |  | routes/api/fapiao.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/invoice/updateremark/{id} |  | routes/api/fapiao.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/invoice/log/list |  | routes/api/fapiao.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/invoice/resend |  | routes/api/fapiao.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/invoice/retryFailedInvoice |  | routes/api/fapiao.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/invoice/setting |  | routes/api/fapiao.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/invoice/setting |  | routes/api/fapiao.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/invoice/baiwangInvoiceSetting |  | routes/api/fapiao.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/invoice/baiwangInvoiceSetting |  | routes/api/fapiao.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/invoice/protocol |  | routes/api/fapiao.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/invoice/protocol |  | routes/api/fapiao.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/invoice-seller/list |  | routes/api/fapiao.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/invoice-seller/info/{id} |  | routes/api/fapiao.php | 42 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/invoice-seller/create |  | routes/api/fapiao.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/invoice-seller/update/{id} |  | routes/api/fapiao.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/category-taxrate/list |  | routes/api/fapiao.php | 59 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/category-taxrate/info/{id} |  | routes/api/fapiao.php | 64 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/category-taxrate/create |  | routes/api/fapiao.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/category-taxrate/update/{id} |  | routes/api/fapiao.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/category-taxrate/delete/{id} |  | routes/api/fapiao.php | 79 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/servicelabels |  | routes/api/goods.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/servicelabels |  | routes/api/goods.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/servicelabels/{label_id} |  | routes/api/goods.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /goods/servicelabels/{label_id} |  | routes/api/goods.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/servicelabels/{label_id} |  | routes/api/goods.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/set_commission_ratio |  | routes/api/goods.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/audit/items |  | routes/api/goods.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/items |  | routes/api/goods.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/setItemsTemplate |  | routes/api/goods.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/setItemsCategory |  | routes/api/goods.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/items |  | routes/api/goods.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/items/onsale |  | routes/api/goods.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/sku |  | routes/api/goods.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/items/{item_id} |  | routes/api/goods.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /goods/items/{item_id} |  | routes/api/goods.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /goods/items/{item_id}/response |  | routes/api/goods.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/items/{item_id} |  | routes/api/goods.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/distributionGoodsWxaCodeStream |  | routes/api/goods.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/warning_store |  | routes/api/goods.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/setItemsSort |  | routes/api/goods.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/epidemicItems/list |  | routes/api/goods.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/epidemicRegister/list |  | routes/api/goods.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/epidemicRegister/export |  | routes/api/goods.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/itemstoreupdate |  | routes/api/goods.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/itemstatusupdate |  | routes/api/goods.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/category |  | routes/api/goods.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/category/{category_id} |  | routes/api/goods.php | 48 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/category |  | routes/api/goods.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/createcategory |  | routes/api/goods.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /goods/category/{category_id} |  | routes/api/goods.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/category/{category_id} |  | routes/api/goods.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/attributes |  | routes/api/goods.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/attributes/{attribute_id} |  | routes/api/goods.php | 55 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/attributes |  | routes/api/goods.php | 56 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /goods/attributes/{attribute_id} |  | routes/api/goods.php | 57 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/itemsupdate |  | routes/api/goods.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/memberprice/save |  | routes/api/goods.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/memberprice/{item_id} |  | routes/api/goods.php | 65 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/tag |  | routes/api/goods.php | 68 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /goods/tag/{tag_id} |  | routes/api/goods.php | 71 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/tag |  | routes/api/goods.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/tag |  | routes/api/goods.php | 77 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/tag/{tag_id} |  | routes/api/goods.php | 80 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/reltag |  | routes/api/goods.php | 83 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/tagsearch |  | routes/api/goods.php | 86 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/rebateconf |  | routes/api/goods.php | 88 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/exportApiFileName |  | routes/api/goods.php | 90 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/export |  | routes/api/goods.php | 92 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/tag/export |  | routes/api/goods.php | 93 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/code/export |  | routes/api/goods.php | 94 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/goodsbycoupon/{coupon_id} |  | routes/api/goods.php | 95 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/profit/{item_id} |  | routes/api/goods.php | 98 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/profit/save |  | routes/api/goods.php | 99 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/category/profit/save |  | routes/api/goods.php | 100 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/keywords |  | routes/api/goods.php | 103 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /goods/keywords/{id} |  | routes/api/goods.php | 104 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/keywords |  | routes/api/goods.php | 105 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/keywordsDetail |  | routes/api/goods.php | 106 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/sync/items |  | routes/api/goods.php | 108 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/sync/itemCategory |  | routes/api/goods.php | 109 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/sync/itemSpec |  | routes/api/goods.php | 110 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/sync/brand |  | routes/api/goods.php | 111 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/itemsisgiftupdate |  | routes/api/goods.php | 113 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/commission/{item_id} |  | routes/api/goods.php | 116 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/commission/save |  | routes/api/goods.php | 117 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/upload/items |  | routes/api/goods.php | 119 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/query/inventory |  | routes/api/goods.php | 121 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/upload/wdterp/items |  | routes/api/goods.php | 124 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/medicineItems/sync |  | routes/api/goods.php | 127 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/items/params |  | routes/api/goods.php | 130 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /hfpay/ledgerconfig/index |  | routes/api/hfpay.php | 4 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /hfpay/ledgerconfig/save |  | routes/api/hfpay.php | 5 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /hfpay/enterapply/apply |  | routes/api/hfpay.php | 6 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /hfpay/enterapply/save |  | routes/api/hfpay.php | 7 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /hfpay/enterapply/getList |  | routes/api/hfpay.php | 8 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /hfpay/enterapply/hfkaihu |  | routes/api/hfpay.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /hfpay/enterapply/hffile |  | routes/api/hfpay.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /hfpay/enterapply/opensplit |  | routes/api/hfpay.php | 11 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /hfpay/getwithdrawset |  | routes/api/hfpay.php | 12 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /hfpay/savewithdrawset |  | routes/api/hfpay.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /hfpay/statistics/distributor |  | routes/api/hfpay.php | 14 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /hfpay/statistics/company |  | routes/api/hfpay.php | 15 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /hfpay/statistics/exportData |  | routes/api/hfpay.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /hfpay/statistics/orderList |  | routes/api/hfpay.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /hfpay/statistics/orderDetail/{orderId} |  | routes/api/hfpay.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /hfpay/statistics/orderExportData |  | routes/api/hfpay.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /hfpay/withdraw/getList |  | routes/api/hfpay.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /hfpay/withdraw |  | routes/api/hfpay.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /hfpay/withdraw/exportData |  | routes/api/hfpay.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /im/meiqia |  | routes/api/im.php | 15 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /im/meiqia |  | routes/api/im.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /im/meiqia/distributor/{distributor_id} |  | routes/api/im.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /im/meiqia/distributor/{distributor_id} |  | routes/api/im.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /im/echat |  | routes/api/im.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /im/echat |  | routes/api/im.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/fans/list |  | routes/api/member.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/fans |  | routes/api/member.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wechat/fans/remark |  | routes/api/member.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/fans/sync |  | routes/api/member.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/fans/tags |  | routes/api/member.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/tag |  | routes/api/member.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wechat/tag |  | routes/api/member.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wechat/tag |  | routes/api/member.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/tags |  | routes/api/member.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/tag/sync |  | routes/api/member.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/tag/fans |  | routes/api/member.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PATCH | /wechat/tag/batchSet |  | routes/api/member.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /members/register/setting |  | routes/api/member.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /members/register/setting |  | routes/api/member.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /members |  | routes/api/member.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member |  | routes/api/member.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/sms/code |  | routes/api/member.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/image/code |  | routes/api/member.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member |  | routes/api/member.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /member |  | routes/api/member.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /member |  | routes/api/member.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /member/salesman |  | routes/api/member.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /member/grade |  | routes/api/member.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /member/grade |  | routes/api/member.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operate/loglist |  | routes/api/member.php | 48 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/smssend |  | routes/api/member.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/tag |  | routes/api/member.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /member/tag/{tag_id} |  | routes/api/member.php | 55 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /member/tag |  | routes/api/member.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/tag |  | routes/api/member.php | 57 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/tag/{tag_id} |  | routes/api/member.php | 58 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/reltagdel |  | routes/api/member.php | 59 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/reltag |  | routes/api/member.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/tagsearch |  | routes/api/member.php | 62 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/export |  | routes/api/member.php | 64 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/batchOperating |  | routes/api/member.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /member/tagcategory |  | routes/api/member.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /member/tagcategory/{category_id} |  | routes/api/member.php | 68 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /member/tagcategory/{category_id} |  | routes/api/member.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/tagcategory |  | routes/api/member.php | 70 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member/tagcategory/{category_id} |  | routes/api/member.php | 71 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /member/bindusersalespersonrel |  | routes/api/member.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /member/update |  | routes/api/member.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /members/whitelist/list |  | routes/api/member.php | 79 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /members/whitelist/{id} |  | routes/api/member.php | 80 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /members/whitelist |  | routes/api/member.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /members/whitelist/{id} |  | routes/api/member.php | 82 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /members/whitelist/{id} |  | routes/api/member.php | 83 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /members/subscribe/list |  | routes/api/member.php | 86 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /members/trustlogin/list |  | routes/api/member.php | 89 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /members/trustlogin/setting |  | routes/api/member.php | 90 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /basesetting | /merchant | routes/api/merchant.php | 4 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /basesetting | /supplier | routes/api/merchant.php | 4 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /basesetting | /merchant | routes/api/merchant.php | 5 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /basesetting | /supplier | routes/api/merchant.php | 5 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /type/list | /merchant | routes/api/merchant.php | 7 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /type/list | /supplier | routes/api/merchant.php | 7 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /type/create | /merchant | routes/api/merchant.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /type/create | /supplier | routes/api/merchant.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /type/{id} | /merchant | routes/api/merchant.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /type/{id} | /supplier | routes/api/merchant.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /type/{id} | /merchant | routes/api/merchant.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /type/{id} | /supplier | routes/api/merchant.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /operator | /merchant | routes/api/merchant.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /operator | /supplier | routes/api/merchant.php | 11 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /operator | /merchant | routes/api/merchant.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /operator | /supplier | routes/api/merchant.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /operator/{id} | /merchant | routes/api/merchant.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /operator/{id} | /supplier | routes/api/merchant.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /settlement/apply/list | /merchant | routes/api/merchant.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /settlement/apply/list | /supplier | routes/api/merchant.php | 16 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /settlement/apply/{id} | /merchant | routes/api/merchant.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /settlement/apply/{id} | /supplier | routes/api/merchant.php | 17 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /settlement/apply/audit | /merchant | routes/api/merchant.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /settlement/apply/audit | /supplier | routes/api/merchant.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /list | /merchant | routes/api/merchant.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /list | /supplier | routes/api/merchant.php | 20 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /detail/{id} | /merchant | routes/api/merchant.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /detail/{id} | /supplier | routes/api/merchant.php | 21 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /{id} | /merchant | routes/api/merchant.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /{id} | /supplier | routes/api/merchant.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | / | /merchant | routes/api/merchant.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | / | /supplier | routes/api/merchant.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /visibletype/list | /merchant | routes/api/merchant.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /visibletype/list | /supplier | routes/api/merchant.php | 24 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /disabled/update/{id} | /merchant | routes/api/merchant.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /disabled/update/{id} | /supplier | routes/api/merchant.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /auditgoods/update/{id} | /merchant | routes/api/merchant.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /auditgoods/update/{id} | /supplier | routes/api/merchant.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /info | /merchant | routes/api/merchant.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /info | /supplier | routes/api/merchant.php | 27 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /register | /merchant | routes/api/merchant.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /register | /supplier | routes/api/merchant.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /get_supplier_info | /merchant | routes/api/merchant.php | 36 | 200 | 405 | ERROR | {"data":{"message":"405 Method Not Allowed","status_code":405}} |
| GET | /get_supplier_info | /supplier | routes/api/merchant.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /get_supplier_list | /merchant | routes/api/merchant.php | 37 | 200 | 405 | ERROR | {"data":{"message":"405 Method Not Allowed","status_code":405}} |
| GET | /get_supplier_list | /supplier | routes/api/merchant.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /check_supplier | /merchant | routes/api/merchant.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /check_supplier | /supplier | routes/api/merchant.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /batch_review_items | /merchant | routes/api/merchant.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /batch_review_items | /supplier | routes/api/merchant.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /notice/list |  | routes/api/notice.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /notice/{notice_id} |  | routes/api/notice.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /onecode/things |  | routes/api/onecode.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /onecode/things |  | routes/api/onecode.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /onecode/things/{thing_id} |  | routes/api/onecode.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /onecode/things/{thing_id} |  | routes/api/onecode.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /onecode/things/{thing_id} |  | routes/api/onecode.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /onecode/batchs |  | routes/api/onecode.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /onecode/batchs |  | routes/api/onecode.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /onecode/batchs/{batch_id} |  | routes/api/onecode.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /onecode/batchs/{batch_id} |  | routes/api/onecode.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /onecode/batchs/{batch_id} |  | routes/api/onecode.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /onecode/wxaOneCodeStream |  | routes/api/onecode.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /external | /setting/openapi | routes/api/openapi.php | 16 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /external | /setting/openapi | routes/api/openapi.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /developer | /setting/openapi | routes/api/openapi.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /developer | /setting/openapi | routes/api/openapi.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /rights/getdata |  | routes/api/order.php | 15 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /rights/list |  | routes/api/order.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /rights |  | routes/api/order.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /transfer/rights |  | routes/api/order.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /transfer/rights/list |  | routes/api/order.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /rights/log |  | routes/api/order.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /rights/info |  | routes/api/order.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /rights/delay |  | routes/api/order.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /delivery/process/list |  | routes/api/order.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shipping/templates/list |  | routes/api/order.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shipping/templates/info/{id} |  | routes/api/order.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /shipping/templates/create |  | routes/api/order.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shipping/templates/update/{id} |  | routes/api/order.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /shipping/templates/delete/{id} |  | routes/api/order.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/logistics/list |  | routes/api/order.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /company/logistics/list |  | routes/api/order.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /company/logistics/create |  | routes/api/order.php | 41 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /company/logistics/{id} |  | routes/api/order.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /company/logistics/qinglongcode |  | routes/api/order.php | 43 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /company/logistics/qinglongcode |  | routes/api/order.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /company/dada/create |  | routes/api/order.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /company/dada/info |  | routes/api/order.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /company/delivery |  | routes/api/order.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /company/delivery |  | routes/api/order.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /company/shansong/info |  | routes/api/order.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /company/shansong/info |  | routes/api/order.php | 54 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/message/new |  | routes/api/order.php | 58 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/message/list |  | routes/api/order.php | 59 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/message/update |  | routes/api/order.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/offline_payment/get_list |  | routes/api/order.php | 64 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/offline_payment/get_info |  | routes/api/order.php | 65 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/offline_payment/do_check |  | routes/api/order.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/offline_payment/export_data |  | routes/api/order.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /statement/period/default/setting |  | routes/api/order.php | 72 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /statement/period/distributor/setting |  | routes/api/order.php | 73 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /statement/period/supplier/setting |  | routes/api/order.php | 74 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /statement/period/setting |  | routes/api/order.php | 75 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /statement/summarized |  | routes/api/order.php | 77 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /statement/summarized/export |  | routes/api/order.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /statement/confirm/{statement_id} |  | routes/api/order.php | 79 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /statement/detail/{statement_id} |  | routes/api/order.php | 80 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /statement/detail/export |  | routes/api/order.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /checkout |  | routes/api/order.php | 86 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/create |  | routes/api/order.php | 87 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/payment |  | routes/api/order.php | 88 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/payment/query |  | routes/api/order.php | 89 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /supplier/get_order_list |  | routes/api/order.php | 93 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /supplier/order_paid_confirm |  | routes/api/order.php | 94 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /pagestemplate/set |  | routes/api/pagestemplate.php | 4 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pagestemplate/setInfo |  | routes/api/pagestemplate.php | 5 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /pagestemplate/lists |  | routes/api/pagestemplate.php | 6 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pagestemplate/add |  | routes/api/pagestemplate.php | 7 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /pagestemplate/edit |  | routes/api/pagestemplate.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pagestemplate/detail |  | routes/api/pagestemplate.php | 9 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pagestemplate/copy |  | routes/api/pagestemplate.php | 10 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /pagestemplate/del/{pages_template_id} |  | routes/api/pagestemplate.php | 11 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /pagestemplate/modifyStatus |  | routes/api/pagestemplate.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /pagestemplate/sync |  | routes/api/pagestemplate.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /openscreenad/set |  | routes/api/pagestemplate.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /openscreenad/set |  | routes/api/pagestemplate.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pctemplate/lists |  | routes/api/pagestemplate.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pctemplate/add |  | routes/api/pagestemplate.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /pctemplate/edit |  | routes/api/pagestemplate.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /pctemplate/delete/{theme_pc_template_id} |  | routes/api/pagestemplate.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pctemplate/getHeaderOrFooter |  | routes/api/pagestemplate.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pctemplate/saveHeaderOrFooter |  | routes/api/pagestemplate.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pctemplate/getTemplateContent |  | routes/api/pagestemplate.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pctemplate/saveTemplateContent |  | routes/api/pagestemplate.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pctemplate/loginPage/setting |  | routes/api/pagestemplate.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pctemplate/loginPage/setting |  | routes/api/pagestemplate.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /memberCenterShare/set |  | routes/api/pagestemplate.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /memberCenterShare/getInfo |  | routes/api/pagestemplate.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /point/member |  | routes/api/point.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /point/member/export |  | routes/api/point.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /point/adjustment |  | routes/api/point.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/point/rule |  | routes/api/point.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /member/point/rule |  | routes/api/point.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member/pointcount/index |  | routes/api/point.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/items |  | routes/api/pointsmall.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/setItemsTemplate |  | routes/api/pointsmall.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/setItemsCategory |  | routes/api/pointsmall.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/items |  | routes/api/pointsmall.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/items/{item_id} |  | routes/api/pointsmall.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /goods/items/{item_id} |  | routes/api/pointsmall.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/items/{item_id} |  | routes/api/pointsmall.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/setItemsSort |  | routes/api/pointsmall.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/itemstoreupdate |  | routes/api/pointsmall.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/itemstatusupdate |  | routes/api/pointsmall.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /goods/category |  | routes/api/pointsmall.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /goods/category/{category_id} |  | routes/api/pointsmall.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /goods/category |  | routes/api/pointsmall.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /goods/category/{category_id} |  | routes/api/pointsmall.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /goods/category/{category_id} |  | routes/api/pointsmall.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /goods/export |  | routes/api/pointsmall.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /setting |  | routes/api/pointsmall.php | 41 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /setting |  | routes/api/pointsmall.php | 42 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /template/setting |  | routes/api/pointsmall.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /template/setting |  | routes/api/pointsmall.php | 45 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /popularize/config |  | routes/api/popularize.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /popularize/config |  | routes/api/popularize.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /popularize/promoter/config |  | routes/api/popularize.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /popularize/promoter/config |  | routes/api/popularize.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /popularize/promoter/identity/list |  | routes/api/popularize.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/promoter/identity/info |  | routes/api/popularize.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /popularize/promoter/identity |  | routes/api/popularize.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /popularize/promoter/identity |  | routes/api/popularize.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /popularize/promoter/identity/default |  | routes/api/popularize.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /popularize/promoter/add |  | routes/api/popularize.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /popularize/promoter/children |  | routes/api/popularize.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/promoter/list |  | routes/api/popularize.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/promoter/export |  | routes/api/popularize.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/promoter/exportPopularizeOrder |  | routes/api/popularize.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/promoter/exportPopularizeStatic |  | routes/api/popularize.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /popularize/promoter/grade |  | routes/api/popularize.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /popularize/promoter/disabled |  | routes/api/popularize.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /popularize/promoter/remove |  | routes/api/popularize.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /popularize/promoter/shop |  | routes/api/popularize.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /popularize/promoter/firstidentitylist |  | routes/api/popularize.php | 38 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /popularize/promoter/member/remove |  | routes/api/popularize.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /popularize/cash_withdrawals/{cash_withdrawal_id} |  | routes/api/popularize.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /popularize/cashWithdrawals |  | routes/api/popularize.php | 43 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/cashWithdrawal/payinfo/{cash_withdrawal_id} |  | routes/api/popularize.php | 44 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/brokerage/count |  | routes/api/popularize.php | 46 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/brokerage/logs |  | routes/api/popularize.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/taskBrokerage/logs |  | routes/api/popularize.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/taskBrokerage/count |  | routes/api/popularize.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /popularize/export/taskBrokerage/count |  | routes/api/popularize.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/register |  | routes/api/promotions.php | 16 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/register |  | routes/api/promotions.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/point |  | routes/api/promotions.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/point |  | routes/api/promotions.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sms/basic |  | routes/api/promotions.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sms/templates |  | routes/api/promotions.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /sms/template/detail |  | routes/api/promotions.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PATCH | /sms/template |  | routes/api/promotions.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /sms/sign |  | routes/api/promotions.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /sms/sign |  | routes/api/promotions.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /sms/send/test |  | routes/api/promotions.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/notice/templates |  | routes/api/promotions.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wxa/notice/templates |  | routes/api/promotions.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ali/notice/templates |  | routes/api/promotions.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /ali/notice/templates |  | routes/api/promotions.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/bargains |  | routes/api/promotions.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/bargains |  | routes/api/promotions.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/bargains/{bargain_id} |  | routes/api/promotions.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /promotions/bargains/{bargain_id} |  | routes/api/promotions.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/bargains/termination/{bargain_id} |  | routes/api/promotions.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /promotions/bargains/{bargain_id} |  | routes/api/promotions.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/activity/validNum |  | routes/api/promotions.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/activity/invalid |  | routes/api/promotions.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/activity/create |  | routes/api/promotions.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/activity/lists |  | routes/api/promotions.php | 46 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/activity/give |  | routes/api/promotions.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/activity/give |  | routes/api/promotions.php | 48 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/activity/give/{id} |  | routes/api/promotions.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/groups |  | routes/api/promotions.php | 52 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/groups/{groupId} |  | routes/api/promotions.php | 53 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/groups/{groupId}/team/ |  | routes/api/promotions.php | 54 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/groups/team/{teamId} |  | routes/api/promotions.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/groups |  | routes/api/promotions.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/groups/{groupId} |  | routes/api/promotions.php | 57 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/groups/finish/{groupId} |  | routes/api/promotions.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /promotions/groups/{groupId} |  | routes/api/promotions.php | 59 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/turntableconfig |  | routes/api/promotions.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/turntableconfig |  | routes/api/promotions.php | 63 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/getturntableList |  | routes/api/promotions.php | 64 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/getturntable |  | routes/api/promotions.php | 65 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/getturntable_log/byid |  | routes/api/promotions.php | 67 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/getturntable_count/byid |  | routes/api/promotions.php | 68 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/down_lucky_draw/byid |  | routes/api/promotions.php | 69 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/down_lucky_draw/export |  | routes/api/promotions.php | 70 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/activearticle |  | routes/api/promotions.php | 73 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/activearticle/list |  | routes/api/promotions.php | 74 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/activearticle/{id} |  | routes/api/promotions.php | 75 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /promotions/activearticle |  | routes/api/promotions.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /promotions/activearticle/{id} |  | routes/api/promotions.php | 77 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/extrapoint |  | routes/api/promotions.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/extrapoint |  | routes/api/promotions.php | 82 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/extrapoint/lists |  | routes/api/promotions.php | 83 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /promotions/extrapoint/invalid |  | routes/api/promotions.php | 84 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/extrapoint/{id} |  | routes/api/promotions.php | 85 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/package |  | routes/api/promotions.php | 88 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/package/{packageId} |  | routes/api/promotions.php | 89 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/package |  | routes/api/promotions.php | 90 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/package/{packageId} |  | routes/api/promotions.php | 91 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /promotions/package/cancel/{packageId} |  | routes/api/promotions.php | 92 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/limit |  | routes/api/promotions.php | 95 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/limit_error_desc |  | routes/api/promotions.php | 96 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/limit/{limitId} |  | routes/api/promotions.php | 97 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/limit |  | routes/api/promotions.php | 98 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/limit/{limitId} |  | routes/api/promotions.php | 99 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/limit_items/upload |  | routes/api/promotions.php | 100 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/limit_items/{limitId} |  | routes/api/promotions.php | 102 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /promotions/limit_items/{limitId} |  | routes/api/promotions.php | 103 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/limit_items/{limitId} |  | routes/api/promotions.php | 104 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /promotions/limit_items_save |  | routes/api/promotions.php | 105 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /promotions/limit/cancel/{limitId} |  | routes/api/promotions.php | 107 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/liverooms |  | routes/api/promotions.php | 109 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/register/distributor |  | routes/api/promotions.php | 117 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/register/distributor |  | routes/api/promotions.php | 118 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/register/distributor/{id} |  | routes/api/promotions.php | 119 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /promotions/register/distributor/{id} |  | routes/api/promotions.php | 120 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/distributor |  | routes/api/promotions.php | 121 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/seckillactivity/create |  | routes/api/promotions.php | 128 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/seckillactivity/update |  | routes/api/promotions.php | 129 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/seckillactivity/getlist |  | routes/api/promotions.php | 130 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/seckillactivity/getinfo |  | routes/api/promotions.php | 131 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /promotions/seckillactivity/updatestatus |  | routes/api/promotions.php | 132 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/seckillactivity/getIteminfo |  | routes/api/promotions.php | 133 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/seckillactivity/wxcode |  | routes/api/promotions.php | 134 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/seckillactivity/search/items |  | routes/api/promotions.php | 137 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /marketing/create |  | routes/api/promotions.php | 140 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /marketing/delete |  | routes/api/promotions.php | 141 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /marketing/update |  | routes/api/promotions.php | 142 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /marketing/getlist |  | routes/api/promotions.php | 143 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /marketing/getinfo |  | routes/api/promotions.php | 144 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /marketing/getItemList |  | routes/api/promotions.php | 145 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/recommendlike |  | routes/api/promotions.php | 148 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /promotions/recommendlike |  | routes/api/promotions.php | 149 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/recommendlikes |  | routes/api/promotions.php | 151 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/recommendlike |  | routes/api/promotions.php | 152 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /promotions/recommendlike/{id} |  | routes/api/promotions.php | 153 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /specific/crowd/discount |  | routes/api/promotions.php | 156 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /specific/crowd/discount |  | routes/api/promotions.php | 157 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /specific/crowd/discountList |  | routes/api/promotions.php | 158 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /specific/crowd/discountInfo |  | routes/api/promotions.php | 159 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /specific/crowd/discountLogList |  | routes/api/promotions.php | 160 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /promotions/pointupvaluation/lists |  | routes/api/promotions.php | 163 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /promotions/pointupvaluation/create |  | routes/api/promotions.php | 164 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /promotions/pointupvaluation/update |  | routes/api/promotions.php | 165 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/pointupvaluation/getinfo |  | routes/api/promotions.php | 166 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /promotions/pointupvaluation/updatestatus |  | routes/api/promotions.php | 167 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /promotions/checkin/getlist |  | routes/api/promotions.php | 173 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /reservation/setting |  | routes/api/reservation.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /reservation/setting |  | routes/api/reservation.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /resource/level/{id} |  | routes/api/reservation.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /resource/levellist |  | routes/api/reservation.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /resource/setlevelstatus |  | routes/api/reservation.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shifttype |  | routes/api/reservation.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workshift |  | routes/api/reservation.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /getweekday |  | routes/api/reservation.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workshift/default |  | routes/api/reservation.php | 45 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /reservation |  | routes/api/reservation.php | 53 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /reservation/period |  | routes/api/reservation.php | 54 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfhelp/formdata |  | routes/api/selfService.php | 15 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /selfhelp/formdata |  | routes/api/selfService.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfhelp/formdata |  | routes/api/selfService.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/formdata/{id} |  | routes/api/selfService.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfhelp/formdata/discard/{id} |  | routes/api/selfService.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /selfhelp/formdata/restore/{id} |  | routes/api/selfService.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /selfhelp/formtem |  | routes/api/selfService.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /selfhelp/formtem |  | routes/api/selfService.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfhelp/formtem |  | routes/api/selfService.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/formtem/{id} |  | routes/api/selfService.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfhelp/formtem/discard/{id} |  | routes/api/selfService.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /selfhelp/formtem/restore/{id} |  | routes/api/selfService.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /selfhelp/setting/physical |  | routes/api/selfService.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfhelp/setting/physical |  | routes/api/selfService.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/physical/alluserlist |  | routes/api/selfService.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/physical/userdata |  | routes/api/selfService.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/physical/datelist |  | routes/api/selfService.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfhelp/registrationActivity/create |  | routes/api/selfService.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /selfhelp/registrationActivity/update |  | routes/api/selfService.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfhelp/registrationActivity/list |  | routes/api/selfService.php | 39 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/registrationActivity/get |  | routes/api/selfService.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfhelp/registrationActivity/del |  | routes/api/selfService.php | 41 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /selfhelp/registrationActivity/invalid |  | routes/api/selfService.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfhelp/registrationActivity/easylist |  | routes/api/selfService.php | 43 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/registrationRecord/list |  | routes/api/selfService.php | 45 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/registrationRecord/get |  | routes/api/selfService.php | 46 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /selfhelp/registrationRecord/update |  | routes/api/selfService.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /selfhelp/registrationReview |  | routes/api/selfService.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /selfhelp/registrationVerify |  | routes/api/selfService.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /selfhelp/registrationVerifyLog |  | routes/api/selfService.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /selfhelp/registrationRecord/export |  | routes/api/selfService.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | generate | outfit | routes/api/shopexai.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | generate | member/outfit | routes/api/shopexai.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | status/{task_id} | outfit | routes/api/shopexai.php | 10 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | status/{task_id} | member/outfit | routes/api/shopexai.php | 10 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | model | outfit | routes/api/shopexai.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | model | member/outfit | routes/api/shopexai.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | model/{id} | outfit | routes/api/shopexai.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | model/{id} | member/outfit | routes/api/shopexai.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | model/{id} | outfit | routes/api/shopexai.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | model/{id} | member/outfit | routes/api/shopexai.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | models | outfit | routes/api/shopexai.php | 19 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | models | member/outfit | routes/api/shopexai.php | 19 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | logs | outfit | routes/api/shopexai.php | 22 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | logs | member/outfit | routes/api/shopexai.php | 22 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /permission |  | routes/api/shopmenu.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /shopmenu |  | routes/api/shopmenu.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /shopmenu |  | routes/api/shopmenu.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shopmenu |  | routes/api/shopmenu.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /shopmenu/{shopmenuId} |  | routes/api/shopmenu.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shopmenu/down |  | routes/api/shopmenu.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /shopmenu/upload |  | routes/api/shopmenu.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pcdecoration/tdkglobalset |  | routes/api/tdkset.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pcdecoration/tdkglobalset |  | routes/api/tdkset.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /pcdecoration/tdkgivenset/{type} |  | routes/api/tdkset.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /pcdecoration/tdkgivenset/{type} |  | routes/api/tdkset.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/shopexerp/setting |  | routes/api/third.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/shopexerp/setting |  | routes/api/third.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /omsqueuelog |  | routes/api/third.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /third/wdterp/setting |  | routes/api/third.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/wdterp/setting |  | routes/api/third.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /third/jushuitan/setting |  | routes/api/third.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/jushuitan/setting |  | routes/api/third.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /third/map/setting |  | routes/api/third.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/map/setting |  | routes/api/third.php | 33 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /third/oms/setting |  | routes/api/third.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/oms/setting |  | routes/api/third.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /third/dmcrm/setting |  | routes/api/third.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/dmcrm/setting |  | routes/api/third.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /paypal/success |  | routes/api/trade.php | 15 | 200 |  | OK | <!DOCTYPE html> <html>     <head>         <meta charset="UTF-8" />         <meta http-equiv="refresh" content="0;url='http://127.0.0.1:9058/payment/failed'" />          <title>Redirecting to http://12 |
| POST | /alipay/notify |  | routes/api/trade.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /chinaums/notify |  | routes/api/trade.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade |  | routes/api/trade.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /orders |  | routes/api/trade.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/{order_id} |  | routes/api/trade.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/process/{orderId} |  | routes/api/trade.php | 28 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /fapiaolist |  | routes/api/trade.php | 31 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /fapiaoset |  | routes/api/trade.php | 32 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/{order_id}/cancelinfo |  | routes/api/trade.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/{order_id}/confirmcancel |  | routes/api/trade.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /order/{order_id}/processdrug |  | routes/api/trade.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /orders/setting/set |  | routes/api/trade.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /orders/setting/get |  | routes/api/trade.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /order/{order_id}/cancel |  | routes/api/trade.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /delivery |  | routes/api/trade.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /delivery/{orders_delivery_id} |  | routes/api/trade.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /old_delivery/{orderId} |  | routes/api/trade.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /remarks/{orderId} |  | routes/api/trade.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /delivery/details |  | routes/api/trade.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /delivery/lists |  | routes/api/trade.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /confirmReceipt |  | routes/api/trade.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /orders/exportdata |  | routes/api/trade.php | 56 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /invoice/exportdata |  | routes/api/trade.php | 57 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /rights/exportdata |  | routes/api/trade.php | 58 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /orders/exportnormaldata |  | routes/api/trade.php | 59 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trades/exportdata |  | routes/api/trade.php | 60 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /rights/logExport |  | routes/api/trade.php | 61 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /trade/kuaidi/setting |  | routes/api/trade.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/kuaidi/setting |  | routes/api/trade.php | 64 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /trade/sfbsp/setting |  | routes/api/trade.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/sfbsp/setting |  | routes/api/trade.php | 68 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/refunderrorlogs/list |  | routes/api/trade.php | 71 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /trade/refunderrorlogs/resubmit/{id} |  | routes/api/trade.php | 72 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/rate |  | routes/api/trade.php | 75 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /trade/rate |  | routes/api/trade.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/{rate_id}/rate |  | routes/api/trade.php | 77 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /trade/rate/{rate_id} |  | routes/api/trade.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /invoice/number |  | routes/api/trade.php | 80 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /invoice/invoiced |  | routes/api/trade.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /financial/salesreport |  | routes/api/trade.php | 83 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /writeoff/{order_id} |  | routes/api/trade.php | 85 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /writeoff/{order_id} |  | routes/api/trade.php | 86 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /qr_writeoff |  | routes/api/trade.php | 88 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /trade/setting |  | routes/api/trade.php | 91 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/setting |  | routes/api/trade.php | 92 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /trade/cancel/setting |  | routes/api/trade.php | 95 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/cancel/setting |  | routes/api/trade.php | 96 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /businessreceipt/{orderId} |  | routes/api/trade.php | 99 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /confirm/goods/{orderId} |  | routes/api/trade.php | 101 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/markdown |  | routes/api/trade.php | 104 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/markdown/confirm |  | routes/api/trade.php | 105 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/deliverypackag/confirm |  | routes/api/trade.php | 107 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/deliverystaff/confirm |  | routes/api/trade.php | 108 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /order/cancel/deliverystaff |  | routes/api/trade.php | 109 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /order/payorderinfo/{trade_id} |  | routes/api/trade.php | 114 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /order/refundorderinfo/{refund_bn} |  | routes/api/trade.php | 115 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /trade/payment/setting |  | routes/api/trade.php | 120 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /trade/payment/setting |  | routes/api/trade.php | 121 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/payment/open-status |  | routes/api/trade.php | 122 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/payment/list |  | routes/api/trade.php | 123 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/payment/hfpayversionstatus |  | routes/api/trade.php | 124 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /trade/payment/rsakey |  | routes/api/trade.php | 125 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /dada/finance/info |  | routes/api/trade.php | 130 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /dada/finance/create |  | routes/api/trade.php | 131 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /transcript |  | routes/api/transcript.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /transcript/{transcript_id} |  | routes/api/transcript.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PATCH | /transcript/{transcript_id} |  | routes/api/transcript.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /transcript/{transcript_id} |  | routes/api/transcript.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /usertranscript |  | routes/api/transcript.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /usertranscript |  | routes/api/transcript.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /ugc/post/create |  | routes/api/ugc.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/post/edit |  | routes/api/ugc.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/post/setBadges |  | routes/api/ugc.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/post/verify |  | routes/api/ugc.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/post/enable |  | routes/api/ugc.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ugc/post/list |  | routes/api/ugc.php | 27 | 200 | 500 | ERROR | {"data":{"message":"Call to a member function get() on null","status_code":500}} |
| GET | /ugc/post/detail |  | routes/api/ugc.php | 30 | 200 | 500 | ERROR | {"data":{"message":"Call to a member function get() on null","status_code":500}} |
| POST | /ugc/post/delete |  | routes/api/ugc.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/post/settop |  | routes/api/ugc.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/topic/create |  | routes/api/ugc.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/topic/verify |  | routes/api/ugc.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/topic/top |  | routes/api/ugc.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/topic/enable |  | routes/api/ugc.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ugc/topic/list |  | routes/api/ugc.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /ugc/topic/detail |  | routes/api/ugc.php | 53 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /ugc/topic/delete |  | routes/api/ugc.php | 55 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/topic/settop |  | routes/api/ugc.php | 57 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/tag/create |  | routes/api/ugc.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/tag/verify |  | routes/api/ugc.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/tag/enable |  | routes/api/ugc.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ugc/tag/list |  | routes/api/ugc.php | 73 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /ugc/tag/detail |  | routes/api/ugc.php | 76 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /ugc/tag/delete |  | routes/api/ugc.php | 79 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/badge/create |  | routes/api/ugc.php | 85 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ugc/badge/list |  | routes/api/ugc.php | 87 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /ugc/badge/detail |  | routes/api/ugc.php | 89 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /ugc/badge/delete |  | routes/api/ugc.php | 91 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/badge/settop |  | routes/api/ugc.php | 93 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/comment/verify |  | routes/api/ugc.php | 99 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/comment/enable |  | routes/api/ugc.php | 102 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ugc/comment/list |  | routes/api/ugc.php | 105 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /ugc/comment/detail |  | routes/api/ugc.php | 108 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /ugc/comment/delete |  | routes/api/ugc.php | 111 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/comment/settop |  | routes/api/ugc.php | 114 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /ugc/setting/point/saveSetting |  | routes/api/ugc.php | 119 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /ugc/setting/point/getSetting |  | routes/api/ugc.php | 123 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/authorizer |  | routes/api/weapp.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/gettemplateweapplist |  | routes/api/weapp.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/gettemplateweappdetail |  | routes/api/weapp.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa |  | routes/api/weapp.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/codeunlimit |  | routes/api/weapp.php | 23 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/testqrcode |  | routes/api/weapp.php | 24 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/tryrelease |  | routes/api/weapp.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/undocodeaudit |  | routes/api/weapp.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/revertcoderelease |  | routes/api/weapp.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/pageparams/setting |  | routes/api/weapp.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/pageparams/setting |  | routes/api/weapp.php | 29 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wxa/pageparams/setting |  | routes/api/weapp.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/pageparams/setting_all |  | routes/api/weapp.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/{wxaAppId} |  | routes/api/weapp.php | 34 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/templates/openlist |  | routes/api/weapp.php | 36 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/templates/list |  | routes/api/weapp.php | 37 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/templates/open |  | routes/api/weapp.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/templates/weappid |  | routes/api/weapp.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/stats/summarybydate |  | routes/api/weapp.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/stats/summarytrend |  | routes/api/weapp.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/stats/visitpage |  | routes/api/weapp.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/stats/visittrend |  | routes/api/weapp.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/stats/visitdistribution |  | routes/api/weapp.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/stats/retaininfo |  | routes/api/weapp.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/stats/userportrait |  | routes/api/weapp.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/customizepage |  | routes/api/weapp.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxa/customizepage/{id} |  | routes/api/weapp.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxa/customizepage/{id} |  | routes/api/weapp.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/customizepage/list |  | routes/api/weapp.php | 54 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/customizepage/{id} |  | routes/api/weapp.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/salesperson/customizepage |  | routes/api/weapp.php | 56 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wxa/config/{wxaAppId} |  | routes/api/weapp.php | 59 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxappTemplate/wxapp |  | routes/api/weapp.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxappTemplate/domain |  | routes/api/weapp.php | 61 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxappTemplate/domain |  | routes/api/weapp.php | 62 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/onlycode |  | routes/api/weapp.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/config/{wxaAppId} |  | routes/api/weapp.php | 65 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/submitreview |  | routes/api/weapp.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/getdomainlist |  | routes/api/weapp.php | 68 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/savedomain |  | routes/api/weapp.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/cartremind/setting |  | routes/api/weapp.php | 71 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/cartremind/setting |  | routes/api/weapp.php | 72 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/privacy/setting |  | routes/api/weapp.php | 74 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxa/privacy/setting |  | routes/api/weapp.php | 75 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxa/uploadprivacy/extfile |  | routes/api/weapp.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/pre_auth_url |  | routes/api/wechat.php | 17 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/bind |  | routes/api/wechat.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechat/directbind |  | routes/api/wechat.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/authorizerinfo |  | routes/api/wechat.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/menu |  | routes/api/wechat.php | 23 | 200 | 405 | ERROR | {"data":{"message":"405 Method Not Allowed","status_code":405}} |
| POST | /wechat/menu |  | routes/api/wechat.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wechat/menu |  | routes/api/wechat.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/menutree |  | routes/api/wechat.php | 27 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/kfs |  | routes/api/wechat.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/kfs |  | routes/api/wechat.php | 30 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| DELETE | /wechat/kfs |  | routes/api/wechat.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechat/update/kfs |  | routes/api/wechat.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechat/keyword/reply |  | routes/api/wechat.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/keyword/reply |  | routes/api/wechat.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wechat/keyword/reply |  | routes/api/wechat.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wechat/keyword/reply |  | routes/api/wechat.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechat/default/reply |  | routes/api/wechat.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/default/reply |  | routes/api/wechat.php | 40 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/openkf/reply |  | routes/api/wechat.php | 41 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/openkf/reply |  | routes/api/wechat.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/subscribe/reply |  | routes/api/wechat.php | 43 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/subscribe/reply |  | routes/api/wechat.php | 44 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechat/material |  | routes/api/wechat.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechat/news/image |  | routes/api/wechat.php | 47 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wechat/material |  | routes/api/wechat.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/material |  | routes/api/wechat.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wechat/material/stats |  | routes/api/wechat.php | 50 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/news |  | routes/api/wechat.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/news/{materialId} |  | routes/api/wechat.php | 53 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wechat/news/ |  | routes/api/wechat.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/stats/userweeksummary |  | routes/api/wechat.php | 56 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wechat/open |  | routes/api/wechat.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechat/offiaccountcodeforever |  | routes/api/wechat.php | 59 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workwechat/config |  | routes/api/wechat.php | 63 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workwechat/report |  | routes/api/wechat.php | 64 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workwechat/report/{department_id} |  | routes/api/wechat.php | 65 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /workwechat/config |  | routes/api/wechat.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /workwechat/report/syncDistributor |  | routes/api/wechat.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /workwechat/report/syncSalesperson |  | routes/api/wechat.php | 68 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /workwechat/rellist/{salespersonId} |  | routes/api/wechat.php | 69 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workwechat/rellogs/{userId} |  | routes/api/wechat.php | 70 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workwechat/messagetemplate |  | routes/api/wechat.php | 71 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /workwechat/messagetemplate/{templateId} |  | routes/api/wechat.php | 72 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /workwechat/messagetemplate/{templateId} |  | routes/api/wechat.php | 73 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /workwechat/messagetemplate/open/{templateId} |  | routes/api/wechat.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /workwechat/messagetemplate/close/{templateId} |  | routes/api/wechat.php | 75 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /workwechat/distributor/js/config |  | routes/api/wechat.php | 77 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /workwechat/domain/verify |  | routes/api/wechat.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /popularize/cert | h5app/wxapp/adapay | routes/frontapi/adapay.php | 19 | 200 | 422 | ERROR | {"data":{"message":"\u975e\u63a8\u5e7f\u5458\u4e0d\u80fd\u5206\u9500\u5458\u8ba4\u8bc1","status_code":422}} |
| POST | /popularize/create_cert | h5app/wxapp/adapay | routes/frontapi/adapay.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /popularize/update_cert | h5app/wxapp/adapay | routes/frontapi/adapay.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /bank/list | h5app/wxapp/adapay | routes/frontapi/adapay.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /bank/list | h5app/wxapp/adapay | routes/frontapi/adapay.php | 30 | 200 |  | OK | {"data":{"total_count":5260,"list":[{"id":1,"bank_name":"\u957f\u5b89\u94f6\u884c\u80a1\u4efd\u6709\u9650\u516c\u53f8","bank_code":"31379104"},{"id":2,"bank_name":"\u6d77\u53e3\u8054\u5408\u519c\u6751 |
| POST | /wxapp/aftersales | h5app | routes/frontapi/aftersales.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/aftersales/modify | h5app | routes/frontapi/aftersales.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/aftersales | h5app | routes/frontapi/aftersales.php | 23 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/aftersales/info | h5app | routes/frontapi/aftersales.php | 25 | 200 | 422 | ERROR | {"data":{"message":"\u552e\u540e\u5355\u53f7\u5fc5\u586b","status_code":422}} |
| POST | /wxapp/aftersales/sendback | h5app | routes/frontapi/aftersales.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/aftersales/close | h5app | routes/frontapi/aftersales.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/aftersales/item/price | h5app | routes/frontapi/aftersales.php | 31 | 200 | 422 | ERROR | {"data":{"message":"\u8ba2\u5355\u53f7\u5fc5\u4f20\uff0c\u5546\u54c1ID\u5fc5\u4f20\uff0c\u5546\u54c1\u6570\u91cf\u5fc5\u4f20\uff0c","status_code":422}} |
| GET | /wxapp/aftersales/reason/list | h5app | routes/frontapi/aftersales.php | 33 | 200 |  | OK | {"data":["\u7269\u6d41\u7834\u635f","\u4ea7\u54c1\u63cf\u8ff0\u4e0e\u5b9e\u7269\u4e0d\u7b26","\u8d28\u91cf\u95ee\u9898","\u76ae\u80a4\u8fc7\u654f"]} |
| GET | /wxapp/aftersales/remind/detail | h5app | routes/frontapi/aftersales.php | 35 | 200 |  | OK | {"data":{"intro":"","is_open":false}} |
| GET | /wxapp/espier/image_upload_token | h5app | routes/frontapi/auth.php | 18 | 200 | 422 | ERROR | {"data":{"message":"\u4e0d\u652f\u6301\u7684\u6587\u4ef6\u5b58\u50a8\u7c7b\u578b","status_code":422}} |
| POST | /wxapp/espier/image_upload | h5app | routes/frontapi/auth.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/espier/address | h5app | routes/frontapi/auth.php | 21 | 200 |  | OK | {"data":[{"id":"110000","value":"110000","label":"\u5317\u4eac\u5e02","parent_id":"0","path":"110000","children":[{"id":"110100","value":"110100","label":"\u5317\u4eac\u5e02","parent_id":"110000","pat |
| POST | /wxapp/espier/upload | h5app | routes/frontapi/auth.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/espier/uploadlocal | h5app | routes/frontapi/auth.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/espier/config/request_field_setting | h5app | routes/frontapi/auth.php | 24 | 200 |  | OK | {"data":{"switch_first_auth_force_validation":0}} |
| POST | /wxapp/oauthlogin | h5app | routes/frontapi/auth.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/getopenid | h5app | routes/frontapi/auth.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/new_login | h5app | routes/frontapi/auth.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/login | h5app | routes/frontapi/auth.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/token/refresh | h5app | routes/frontapi/auth.php | 41 | 200 |  | OK | {"data":{"result":true}} |
| POST | /wxapp/merchant/login | h5app | routes/frontapi/auth.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/oauth/getredirecturl | h5app | routes/frontapi/auth.php | 54 | 200 | 400 | ERROR | {"data":{"message":"\u5f53\u524d\u8d26\u53f7\u672a\u7ed1\u5b9a\u516c\u4f17\u53f7\u6216\u5c0f\u7a0b\u5e8f\uff0c\u8bf7\u5148\u6388\u6743\u7ed1\u5b9a","status_code":400}} |
| GET | /wxapp/oauth/getopenid | h5app | routes/frontapi/auth.php | 55 | 200 | 422 | ERROR | {"data":{"message":"\u7f3a\u5c11\u53c2\u6570","status_code":422}} |
| POST | /wxapp/oauth/login/authorize | h5app | routes/frontapi/auth.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/oauth/login/valid | h5app | routes/frontapi/auth.php | 57 | 200 |  | OK | {"data":{"status":5,"msg":"\u4e8c\u7ef4\u7801\u4fe1\u606f\u51fa\u9519"}} |
| POST | /wxapp/workwechatlogin | h5app | routes/frontapi/auth.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/getCardDetail/{cardId} | h5app | routes/frontapi/card.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/receiveCard | h5app | routes/frontapi/card.php | 20 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/consumCard | h5app | routes/frontapi/card.php | 22 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/removeCard | h5app | routes/frontapi/card.php | 24 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/user/exchangeCard | h5app | routes/frontapi/card.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/user/exchangeCardInfo | h5app | routes/frontapi/card.php | 29 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/getCardList | h5app | routes/frontapi/card.php | 32 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/getCardDetail | h5app | routes/frontapi/card.php | 34 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/usedCard | h5app | routes/frontapi/card.php | 36 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/user/currentGardCardPackage | h5app | routes/frontapi/card.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/user/receiveCardPackage | h5app | routes/frontapi/card.php | 41 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/user/showCardPackage | h5app | routes/frontapi/card.php | 43 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/user/confirmPackageShow | h5app | routes/frontapi/card.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/user/getBindCardList | h5app | routes/frontapi/card.php | 47 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/vipgrades/uservip | h5app | routes/frontapi/card.php | 52 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/vipgrades/buy | h5app | routes/frontapi/card.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/user/newGetCardList | h5app | routes/frontapi/card.php | 59 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/newGetCardDetail | h5app | routes/frontapi/card.php | 60 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/getUserCardList | h5app | routes/frontapi/card.php | 62 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/getCardList | h5app | routes/frontapi/card.php | 69 | 200 |  | OK | {"data":{"total_count":0,"pagers":{"total":0},"list":[]}} |
| GET | /wxapp/vipgrades/list | h5app | routes/frontapi/card.php | 71 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/membercard/grades | h5app | routes/frontapi/card.php | 72 | 200 |  | OK | {"data":{"member_card_list":[{"grade_id":1,"company_id":"1","grade_name":"\u9ed8\u8ba4\u7b49\u7ea7","default_grade":true,"background_pic_url":null,"promotion_condition":null,"privileges":{"discount":0 |
| GET | /wxapp/vipgrades/newlist | h5app | routes/frontapi/card.php | 76 | 200 |  | OK | {"data":{"list":[],"cur":{"id":"1","company_id":1,"currency":"CNY","title":"\u4e2d\u56fd\u4eba\u6c11\u5e01","symbol":"\uffe5","rate":1,"is_default":true,"use_platform":"normal"}}} |
| POST | /wxapp/comment | h5app | routes/frontapi/comments.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/comments | h5app | routes/frontapi/comments.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/chief/aggrement_and_explanation | h5app | routes/frontapi/community.php | 9 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/chief/apply_fields | h5app | routes/frontapi/community.php | 10 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/community/chief/apply | h5app | routes/frontapi/community.php | 11 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/community/chief/apply | h5app | routes/frontapi/community.php | 12 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/community/checkChief | h5app | routes/frontapi/community.php | 14 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/community/chief/cash_withdrawal | h5app | routes/frontapi/community.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/community/chief/cash_withdrawal | h5app | routes/frontapi/community.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/chief/cash_withdrawal/account | h5app | routes/frontapi/community.php | 19 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/community/chief/cash_withdrawal/account | h5app | routes/frontapi/community.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/community/chief/cash_withdrawal/count | h5app | routes/frontapi/community.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/activity/lists | h5app | routes/frontapi/community.php | 24 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/chief/activity/{activity_id} | h5app | routes/frontapi/community.php | 25 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/orders | h5app | routes/frontapi/community.php | 28 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/orders/export | h5app | routes/frontapi/community.php | 29 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/community/orders/batch_writeoff | h5app | routes/frontapi/community.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/community/orders/qr_writeoff | h5app | routes/frontapi/community.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /writeoff/{order_id} | h5app | routes/frontapi/community.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/community/chief/distributor | h5app | routes/frontapi/community.php | 35 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/chief/items | h5app | routes/frontapi/community.php | 37 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/chief/ziti | h5app | routes/frontapi/community.php | 39 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/community/chief/ziti | h5app | routes/frontapi/community.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/community/chief/ziti/{ziti_id} | h5app | routes/frontapi/community.php | 45 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/community/chief/activity | h5app | routes/frontapi/community.php | 48 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/community/chief/activity | h5app | routes/frontapi/community.php | 51 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/community/chief/activity/{activity_id} | h5app | routes/frontapi/community.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/community/chief/activity_status/{activity_id} | h5app | routes/frontapi/community.php | 57 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/community/chief/confirm_delivery/{activity_id} | h5app | routes/frontapi/community.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/community/member/activity | h5app | routes/frontapi/community.php | 66 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/member/activity/{activity_id} | h5app | routes/frontapi/community.php | 67 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/community/member/items | h5app | routes/frontapi/community.php | 69 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/shops/wxshops | h5app | routes/frontapi/companys.php | 18 | 200 | 422 | ERROR | {"data":{"message":"\u83b7\u53d6\u5fae\u4fe1\u95e8\u5e97\u5217\u8868\u51fa\u9519.","errors":{"page":["validation.required"],"pageSize":["validation.required"]},"status_code":422}} |
| GET | /wxapp/shops/wxshops/{wx_shop_id} | h5app | routes/frontapi/companys.php | 20 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"company_id\"","status_code":500}} |
| GET | /wxapp/shops/getNearestWxShops | h5app | routes/frontapi/companys.php | 21 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"lat\"","status_code":500}} |
| GET | /wxapp/shops/info | h5app | routes/frontapi/companys.php | 22 | 200 |  | OK | {"data":{"protocol":{"member_register":"\u6ce8\u518c\u534f\u8bae","privacy":"\u9690\u79c1\u653f\u7b56"}}} |
| GET | /wxapp/shops/protocol | h5app | routes/frontapi/companys.php | 23 | 200 |  | OK | {"data":{"type":"","title":"","content":"","update_date":"","take_effect_date":""}} |
| GET | /wxapp/shops/protocolUpdateTime | h5app | routes/frontapi/companys.php | 24 | 200 |  | OK | {"data":{"update_time":0}} |
| GET | /wxapp/shops/protocolsaleman | h5app | routes/frontapi/companys.php | 26 | 200 |  | OK | {"data":{"salesman_service":{"type":"","title":"","content":"","update_date":"","take_effect_date":""},"salesman_privacy":{"type":"","title":"","content":"","update_date":"","take_effect_date":""}}} |
| GET | /wxapp/article/management | h5app | routes/frontapi/companys.php | 33 | 200 |  | OK | {"data":{"total_count":0,"list":[],"province_list":[]}} |
| GET | /wxapp/article/management/{article_id} | h5app | routes/frontapi/companys.php | 35 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/article/focus/{article_id} | h5app | routes/frontapi/companys.php | 37 | 200 | 422 | ERROR | {"data":{"message":"\u6587\u7ae0\u4e0d\u5b58\u5728","status_code":422}} |
| GET | /wxapp/article/focus/num/{article_id} | h5app | routes/frontapi/companys.php | 39 | 200 |  | OK | {"data":{"count":0}} |
| GET | /wxapp/article/praise/num/{article_id} | h5app | routes/frontapi/companys.php | 41 | 200 |  | OK | {"data":{"count":0}} |
| GET | /wxapp/article/category | h5app | routes/frontapi/companys.php | 43 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/article/province | h5app | routes/frontapi/companys.php | 45 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/article/praise/{article_id} | h5app | routes/frontapi/companys.php | 51 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/article/praise/check/{article_id} | h5app | routes/frontapi/companys.php | 53 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/article/usermanagement | h5app | routes/frontapi/companys.php | 55 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/article/usermanagement/{article_id} | h5app | routes/frontapi/companys.php | 57 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/article/praises/getcountresult | h5app | routes/frontapi/companys.php | 59 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor/bind/checkout | h5app | routes/frontapi/companys.php | 62 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor/deliverystaff/checkout | h5app | routes/frontapi/companys.php | 64 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/currencyGetDefault | h5app | routes/frontapi/companys.php | 69 | 200 |  | OK | {"data":{"id":"1","company_id":"1","currency":"CNY","title":"\u4e2d\u56fd\u4eba\u6c11\u5e01","symbol":"\uffe5","rate":1,"is_default":true,"use_platform":"normal"}} |
| GET | /wxapp/company/setting | h5app | routes/frontapi/companys.php | 74 | 200 |  | OK | {"data":{"customer_switch":0,"open_divided":{"status":false,"template_id":0}}} |
| GET | /wxapp/setting/weburl | h5app | routes/frontapi/companys.php | 75 | 200 |  | OK | {"data":{"mycoach":null,"aftersales":null}} |
| GET | /wxapp/company/logistics/list | h5app | routes/frontapi/companys.php | 76 | 200 |  | OK | {"data":{"total_count":32,"list":[{"corp_id":1,"corp_code":"ZY_FY","kuaidi_code":"shipgce","full_name":"\u98de\u6d0b\u5feb\u9012","corp_name":"\u98de\u6d0b\u5feb\u9012","order_sort":99,"custom":0,"cre |
| GET | /traderate/getstatus | h5app | routes/frontapi/companys.php | 78 | 200 |  | OK | {"data":{"rate_status":false}} |
| GET | /wxapp/nostores/getstatus | h5app | routes/frontapi/companys.php | 80 | 200 |  | OK | {"data":{"nostores_status":false}} |
| GET | /wxapp/company/logistics/enableList | h5app | routes/frontapi/companys.php | 82 | 200 |  | OK | {"data":[{"corp_code":"OTHER","corp_name":"\u5176\u4ed6"}]} |
| GET | /wxapp/setting/itemPrice | h5app | routes/frontapi/companys.php | 84 | 200 |  | OK | {"data":{"cart_page":{"market_price":true},"order_page":{"market_price":true},"item_page":{"market_price":true,"member_price":false,"svip_price":false}}} |
| GET | /wxapp/company/privacy_setting_ck | h5app | routes/frontapi/companys.php | 86 | 200 |  | OK | {"data":{"pc_privacy_content":"","h5_privacy_content":""}} |
| GET | /wxapp/shops/setting | h5app | routes/frontapi/companys.php | 90 | 200 |  | OK | {"data":[]} |
| POST | /wxapp/track/viewnum | h5app | routes/frontapi/datacube.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/datacube/Deliverystaffdata | h5app | routes/frontapi/datacube.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/datacube/DeliverystaffdataDetail | h5app | routes/frontapi/datacube.php | 22 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/deposit/recharge | h5app | routes/frontapi/deposit.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/deposit/recharge_new | h5app | routes/frontapi/deposit.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/deposit/rechargerules | h5app | routes/frontapi/deposit.php | 23 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/deposit/recharge/agreement | h5app | routes/frontapi/deposit.php | 25 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/deposit/list | h5app | routes/frontapi/deposit.php | 27 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/deposit/info | h5app | routes/frontapi/deposit.php | 29 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/deposit/to/point | h5app | routes/frontapi/deposit.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/cash_withdrawal | h5app | routes/frontapi/distributor.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/cash_withdrawals | h5app | routes/frontapi/distributor.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor | h5app | routes/frontapi/distributor.php | 23 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor/count | h5app | routes/frontapi/distributor.php | 25 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor/aftersaleaddress | h5app | routes/frontapi/distributor.php | 27 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/salesman/applyCashWithdrawal | h5app | routes/frontapi/distributor.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salesman/getCashWithdrawalList | h5app | routes/frontapi/distributor.php | 32 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/selfdelivery/getDistributorList | h5app | routes/frontapi/distributor.php | 35 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/selfdelivery/list | h5app | routes/frontapi/distributor.php | 36 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor/whitelistByMember | h5app | routes/frontapi/distributor.php | 39 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/distributor/is_valid | h5app | routes/frontapi/distributor.php | 46 | 200 |  | OK | {"data":{"distributor_id":0,"is_delivery":true,"is_ziti":false}} |
| GET | /wxapp/distributor/list | h5app | routes/frontapi/distributor.php | 48 | 200 |  | OK | {"data":{"total_count":0,"list":[],"tagList":[],"defualt_address":[],"is_recommend":1}} |
| GET | /wxapp/distributor/alllist | h5app | routes/frontapi/distributor.php | 49 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/distributor/self | h5app | routes/frontapi/distributor.php | 51 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/distributor/default | h5app | routes/frontapi/distributor.php | 53 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/distributor/deliverytype | h5app | routes/frontapi/distributor.php | 55 | 200 |  | OK | {"data":[{"delivery_name":"\u5feb\u9012\u914d\u9001","delivery_type":"delivery"}]} |
| GET | /wxapp/distributor/areainfo | h5app | routes/frontapi/distributor.php | 57 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"type\"","status_code":500}} |
| GET | /wxapp/distributor/advertisements | h5app | routes/frontapi/distributor.php | 60 | 200 | 422 | ERROR | {"data":{"message":"\u53c2\u6570\u9519\u8bef.","errors":{"distributor_id":["validation.required"]},"status_code":422}} |
| GET | /wxapp/distributor/slider | h5app | routes/frontapi/distributor.php | 63 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/distributor/image/code | h5app | routes/frontapi/distributor.php | 66 | 200 |  | OK | {"data":{"imageToken":"012af0a3aafc074fbc9265aad008870a","imageData":"data:image\/png;base64,\/9j\/4AAQSkZJRgABAQEAYABgAAD\/\/gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2ODApLCBxdWFsaXR5ID0 |
| GET | /wxapp/distributor/sms/code | h5app | routes/frontapi/distributor.php | 68 | 200 | 422 | ERROR | {"data":{"message":"validation.required\uff0cvalidation.required\uff0cvalidation.required\uff0c","status_code":422}} |
| POST | /wxapp/distributor/sms/code | h5app | routes/frontapi/distributor.php | 70 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/distributor/getDistributorInfo | h5app | routes/frontapi/distributor.php | 72 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/distributor/merchant/isvaild | h5app | routes/frontapi/distributor.php | 74 | 200 |  | OK | {"data":{"status":true}} |
| GET | /wxapp/distributor/pickuplocation | h5app | routes/frontapi/distributor.php | 77 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/distributor/aftersaleslocation | h5app | routes/frontapi/distributor.php | 79 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/distributor/checkUserInWhite | h5app | routes/frontapi/distributor.php | 81 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"distributor_id\"","status_code":500}} |
| GET | /wxapp/distributor/config/inRule | h5app | routes/frontapi/distributor.php | 84 | 200 |  | OK | {"data":{"distributor_code":{"status":true,"sort":1},"shop_assistant":{"status":false,"express_time":0,"sort":2},"shop_white":{"status":false,"sort":3},"shop_assistant_pro":{"status":true,"sort":4},"r |
| POST | /wxapp/distributor/config/inRule/check | h5app | routes/frontapi/distributor.php | 86 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salesperson | h5app | routes/frontapi/distributor.php | 92 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/salesperson/complaints | h5app | routes/frontapi/distributor.php | 94 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salesperson/complaintsList | h5app | routes/frontapi/distributor.php | 96 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/salesperson/complaintsDetail/{id} | h5app | routes/frontapi/distributor.php | 98 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/usersalespersonrel | h5app | routes/frontapi/distributor.php | 100 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/usersalespersonrel | h5app | routes/frontapi/distributor.php | 102 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/salesperson/task/share | h5app | routes/frontapi/distributor.php | 104 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salesperson/nologin | h5app | routes/frontapi/distributor.php | 109 | 200 | 422 | ERROR | {"data":{"message":"\u8bf7\u8f93\u5165\u5bfc\u8d2d\u5458id","status_code":422}} |
| GET | /wxapp/salesperson/signinQrcode | h5app | routes/frontapi/distributor.php | 111 | 200 | 422 | ERROR | {"data":{"message":"\u53c2\u6570\u9519\u8bef.","errors":{"type":["validation.required"],"distributor_id":["validation.required"]},"status_code":422}} |
| POST | /wxapp/salesperson/signinValid | h5app | routes/frontapi/distributor.php | 112 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/salesperson/subtask/post | h5app | routes/frontapi/distributor.php | 114 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/salesperson/relationshipcontinuity | h5app | routes/frontapi/distributor.php | 115 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/enterprises | h5app | routes/frontapi/employeepurchase.php | 17 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/employee/email/vcode | h5app | routes/frontapi/employeepurchase.php | 19 | 200 | 422 | ERROR | {"data":{"message":"\u6536\u4ef6\u90ae\u7bb1\u683c\u5f0f\u4e0d\u6b63\u786e","status_code":422}} |
| POST | /wxapp/employee/check | h5app | routes/frontapi/employeepurchase.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/user/enterprises | h5app | routes/frontapi/employeepurchase.php | 25 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/user/enterprise/distributor | h5app | routes/frontapi/employeepurchase.php | 27 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employee/email/vcode | h5app | routes/frontapi/employeepurchase.php | 29 | 200 | 422 | ERROR | {"data":{"message":"\u6536\u4ef6\u90ae\u7bb1\u683c\u5f0f\u4e0d\u6b63\u786e","status_code":422}} |
| POST | /wxapp/employee/auth | h5app | routes/frontapi/employeepurchase.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/employee/activitydata | h5app | routes/frontapi/employeepurchase.php | 33 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employee/invitelist | h5app | routes/frontapi/employeepurchase.php | 35 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employee/invitecode | h5app | routes/frontapi/employeepurchase.php | 37 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/employee/relative/bind | h5app | routes/frontapi/employeepurchase.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/employeepurchase/is_open | h5app | routes/frontapi/employeepurchase.php | 42 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employeepurchase/activities | h5app | routes/frontapi/employeepurchase.php | 44 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employeepurchase/activity/items | h5app | routes/frontapi/employeepurchase.php | 47 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employeepurchase/activity/item/{item_id} | h5app | routes/frontapi/employeepurchase.php | 49 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employeepurchase/activity/items/category | h5app | routes/frontapi/employeepurchase.php | 51 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/employeepurchase/cart | h5app | routes/frontapi/employeepurchase.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/employeepurchase/cart | h5app | routes/frontapi/employeepurchase.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/employeepurchase/cart/checkstatus | h5app | routes/frontapi/employeepurchase.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/employeepurchase/cartcount | h5app | routes/frontapi/employeepurchase.php | 60 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/employeepurchase/cart | h5app | routes/frontapi/employeepurchase.php | 62 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/employeepurchase/cart | h5app | routes/frontapi/employeepurchase.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/employeepurchase/order/receiver | h5app | routes/frontapi/employeepurchase.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/goods/items | h5app | routes/frontapi/goods.php | 18 | 200 | 422 | ERROR | {"data":{"message":"\u83b7\u53d6\u5546\u54c1\u5217\u8868\u51fa\u9519.","errors":{"page":["validation.required"],"pageSize":["validation.required"]},"status_code":422}} |
| GET | /wxapp/goods/items/filter | h5app | routes/frontapi/goods.php | 20 | 200 | 500 | ERROR | {"data":{"message":"An exception occurred while executing 'SELECT i.price,i.market_price,i.item_category,i.distributor_id,ira.attribute_id,ira.attribute_value_id,ia.attribute_name,ia.attribute_type,ia |
| GET | /wxapp/goods/shopitems | h5app | routes/frontapi/goods.php | 22 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/goods/category | h5app | routes/frontapi/goods.php | 24 | 200 |  | OK | {"data":[{"category_id":1,"category_name":"\u5bb6\u5177","category_level":1,"parent_id":0,"image_url":"","level":0,"children":[{"category_id":2,"category_name":"\u684c\u5b50","category_level":2,"paren |
| GET | /wxapp/goods/itemintro/{item_id} | h5app | routes/frontapi/goods.php | 26 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"intro\"","status_code":500}} |
| GET | /wxapp/goods/category/{cat_id} | h5app | routes/frontapi/goods.php | 28 | 200 |  | OK | {"data":{"total_count":1,"list":[{"category_id":2,"company_id":1,"category_name":"\u684c\u5b50","category_code":null,"parent_id":1,"category_level":2,"is_main_category":1,"path":"1,2","distributor_id" |
| GET | /wxapp/goods/categorylevel | h5app | routes/frontapi/goods.php | 30 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/goods/shopcategorylevel | h5app | routes/frontapi/goods.php | 32 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/goods/memberprice/{item_id} | h5app | routes/frontapi/goods.php | 34 | 200 | 422 | ERROR | {"data":{"message":"\u5546\u54c1\u83b7\u53d6\u5931\u8d25","status_code":422}} |
| GET | /wxapp/goods/keywords | h5app | routes/frontapi/goods.php | 36 | 200 |  | OK | {"data":{"total_count":0,"list":[],"content":[]}} |
| GET | wxapp/goods/categoryinfo | h5app | routes/frontapi/goods.php | 38 | 200 | 422 | ERROR | {"data":{"message":"\u8bf7\u4f20\u9012\u5546\u54c1\u5206\u7c7b","status_code":422}} |
| GET | /wxapp/goods/promoter/category | h5app | routes/frontapi/goods.php | 41 | 200 |  | OK | {"data":[{"category_id":1,"category_name":"\u5bb6\u5177","category_level":1,"parent_id":0,"image_url":"","level":0,"children":[{"category_id":2,"category_name":"\u684c\u5b50","category_level":2,"paren |
| GET | /wxapp/goods/items/{item_id} | h5app | routes/frontapi/goods.php | 47 | 200 | 422 | ERROR | {"data":{"message":"\u5546\u54c1\u4e0d\u5b58\u5728\u6216\u8005\u5df2\u4e0b\u67b6","status_code":422}} |
| GET | /wxapp/goods/newitems | h5app | routes/frontapi/goods.php | 48 | 200 | 422 | ERROR | {"data":{"message":"\u5546\u54c1\u4e0d\u5b58\u5728\u6216\u8005\u5df2\u4e0b\u67b6","status_code":422}} |
| GET | /wxapp/goods/items_price_store/{item_id} | h5app | routes/frontapi/goods.php | 49 | 200 |  | OK | {"data":{"item_id":0}} |
| POST | /wxapp/goods/scancodeAddcart | h5app | routes/frontapi/goods.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/goods/items/{item_id}/fav | h5app | routes/frontapi/goods.php | 61 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/goods/checkshare/items | h5app | routes/frontapi/goods.php | 64 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/goods/share/items/{item_id} | h5app | routes/frontapi/goods.php | 67 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/hfpay/userapply | h5app | routes/frontapi/hfpay.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/hfpay/applysave | h5app | routes/frontapi/hfpay.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/hfpay/bankinfo | h5app | routes/frontapi/hfpay.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/hfpay/banklist | h5app | routes/frontapi/hfpay.php | 23 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/hfpay/banksave | h5app | routes/frontapi/hfpay.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/hfpay/bankdel | h5app | routes/frontapi/hfpay.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/im/meiqia | h5app | routes/frontapi/im.php | 17 | 200 |  | OK | {"data":{"channel":"single","meiqia_url":{"common":"","wxapp":"","h5":"","app":"","aliapp":"","pc":""},"is_open":false,"is_distributor_open":false}} |
| GET | /wxapp/im/meiqia/distributor/{distributor_id} | h5app | routes/frontapi/im.php | 18 | 200 |  | OK | {"data":{"channel":"single","meiqia_url":{"common":"","wxapp":"","h5":"","app":"","aliapp":"","pc":""},"is_open":false,"is_distributor_open":false}} |
| GET | /wxapp/im/echat | h5app | routes/frontapi/im.php | 21 | 200 |  | OK | {"data":{"is_open":false,"echat_url":""}} |
| GET | /wxapp/member | h5app | routes/frontapi/member.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/memberinfo | h5app | routes/frontapi/member.php | 19 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| PUT | /wxapp/member | h5app | routes/frontapi/member.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/memberinfo | h5app | routes/frontapi/member.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/member/mobile | h5app | routes/frontapi/member.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/barcode | h5app | routes/frontapi/member.php | 26 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/statistical | h5app | routes/frontapi/member.php | 28 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/addresslist | h5app | routes/frontapi/member.php | 30 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/member/address | h5app | routes/frontapi/member.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/member/address/{address_id} | h5app | routes/frontapi/member.php | 34 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/address/{address_id} | h5app | routes/frontapi/member.php | 36 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/member/address/{address_id} | h5app | routes/frontapi/member.php | 38 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/member/collect/item/{item_id} | h5app | routes/frontapi/member.php | 40 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/collect/item | h5app | routes/frontapi/member.php | 42 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/collect/item/num | h5app | routes/frontapi/member.php | 44 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/member/collect/item | h5app | routes/frontapi/member.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/browse/history/list | h5app | routes/frontapi/member.php | 48 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/member/browse/history/save | h5app | routes/frontapi/member.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/member/collect/article/{article_id} | h5app | routes/frontapi/member.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxapp/member/collect/article | h5app | routes/frontapi/member.php | 54 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/collect/article | h5app | routes/frontapi/member.php | 56 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/collect/article/num | h5app | routes/frontapi/member.php | 58 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/collect/article/info | h5app | routes/frontapi/member.php | 60 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/member/collect/distribution/{distributor_id} | h5app | routes/frontapi/member.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxapp/member/collect/distribution | h5app | routes/frontapi/member.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/collect/distribution | h5app | routes/frontapi/member.php | 66 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/collect/distribution/num | h5app | routes/frontapi/member.php | 68 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/member/collect/distribution/check | h5app | routes/frontapi/member.php | 70 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/member/subscribe/item/{item_id} | h5app | routes/frontapi/member.php | 72 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/member/bindSalesperson | h5app | routes/frontapi/member.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/member/salesperson/uniquevisito | h5app | routes/frontapi/member.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxapp/member | h5app | routes/frontapi/member.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/invoicelist | h5app | routes/frontapi/member.php | 81 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/member/invoice | h5app | routes/frontapi/member.php | 83 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/member/invoice/{invoice_id} | h5app | routes/frontapi/member.php | 85 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/invoice/{invoice_id} | h5app | routes/frontapi/member.php | 87 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/member/invoice/{invoice_id} | h5app | routes/frontapi/member.php | 89 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/member | h5app | routes/frontapi/member.php | 94 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/setting | h5app | routes/frontapi/member.php | 96 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/member/agreement | h5app | routes/frontapi/member.php | 97 | 200 |  | OK | {"data":{"type":"","title":"\u6ce8\u518c\u534f\u8bae","content":""}} |
| GET | /wxapp/member/sms/code | h5app | routes/frontapi/member.php | 99 | 200 | 500 | ERROR | {"data":{"message":"\u8bf7\u8f93\u5165\u56fe\u7247\u9a8c\u8bc1\u7801token","status_code":500}} |
| GET | /wxapp/member/image/code | h5app | routes/frontapi/member.php | 101 | 200 |  | OK | {"data":{"imageToken":"a226117cc326278a7f64fdfb2544f103","imageData":"data:image\/png;base64,\/9j\/4AAQSkZJRgABAQEAYABgAAD\/\/gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2ODApLCBxdWFsaXR5ID0 |
| POST | /wxapp/member/reset/password | h5app | routes/frontapi/member.php | 103 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/whitelist/status | h5app | routes/frontapi/member.php | 106 | 200 |  | OK | {"data":{"status":false}} |
| GET | /wxapp/member/item/is_subscribe/{item_id} | h5app | routes/frontapi/member.php | 109 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/trustlogin/params | h5app | routes/frontapi/member.php | 110 | 200 | 500 | ERROR | {"data":{"message":"Call to undefined method Overtrue\\Socialite\\SocialiteManager::driver()","status_code":500}} |
| GET | /wxapp/trustlogin/list | h5app | routes/frontapi/member.php | 111 | 200 |  | OK | {"data":[{"type":"weixin","app_id":"","secret":"","name":"\u5fae\u4fe1","status":"false"}]} |
| POST | /wxapp/member/is_new | h5app | routes/frontapi/member.php | 113 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/member/bind | h5app | routes/frontapi/member.php | 115 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/addressarea | h5app | routes/frontapi/member.php | 119 | 200 |  | OK | {"data":[{"value":"110000","label":"\u5317\u4eac\u5e02","children":[{"value":"110100","label":"\u5317\u4eac\u5e02","children":[{"value":"110101","label":"\u4e1c\u57ce\u533a"},{"value":"110102","label" |
| GET | /wxapp/member/decryptPhone | h5app | routes/frontapi/member.php | 120 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"appid\"","status_code":500}} |
| GET | /wxapp/selfform/statisticalAnalysis | h5app | routes/frontapi/member.php | 124 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/selfform/physical/datelist | h5app | routes/frontapi/member.php | 125 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/registrationActivity | h5app | routes/frontapi/member.php | 126 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/registrationRecordList | h5app | routes/frontapi/member.php | 127 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/registrationRecordInfo | h5app | routes/frontapi/member.php | 128 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/registrationSubmit | h5app | routes/frontapi/member.php | 129 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/joinActivity | h5app | routes/frontapi/member.php | 130 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/cancelRecord | h5app | routes/frontapi/member.php | 131 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/registrationActivityList | h5app | routes/frontapi/member.php | 132 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/medicationPersonnel | h5app | routes/frontapi/member.php | 137 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/medicationPersonnel | h5app | routes/frontapi/member.php | 138 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/medicationPersonnel/list | h5app | routes/frontapi/member.php | 139 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/medicationPersonnel/detail | h5app | routes/frontapi/member.php | 140 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/medicationPersonnel | h5app | routes/frontapi/member.php | 141 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/merchant/basesetting | h5app | routes/frontapi/merchant.php | 6 | 200 |  | OK | {"data":{"display_on_pc":"false","settled_type":[],"content":""}} |
| GET | /wxapp/merchant/settlementapply/step | h5app | routes/frontapi/merchant.php | 11 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/merchant/type/list | h5app | routes/frontapi/merchant.php | 12 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/merchant/settlementapply/{step} | h5app | routes/frontapi/merchant.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/merchant/settlementapply/detail | h5app | routes/frontapi/merchant.php | 14 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/merchant/settlementapply/auditstatus | h5app | routes/frontapi/merchant.php | 15 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/merchant/password/reset | h5app | routes/frontapi/merchant.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/login |  | routes/frontapi/old.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/espier/image_upload_token |  | routes/frontapi/old.php | 25 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/espier/address |  | routes/frontapi/old.php | 26 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxapp/espier/upload |  | routes/frontapi/old.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/user/receiveCard |  | routes/frontapi/old.php | 35 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/shops/wxshops |  | routes/frontapi/old.php | 44 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/shops/wxshops/{wx_shop_id} |  | routes/frontapi/old.php | 45 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/shops/getNearestWxShops |  | routes/frontapi/old.php | 46 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/shops/wxshops |  | routes/frontapi/old.php | 52 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/shops/wxshops/{wx_shop_id} |  | routes/frontapi/old.php | 53 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/shops/getNearestWxShops |  | routes/frontapi/old.php | 54 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| POST | /wxapp/track/viewnum |  | routes/frontapi/old.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /weapp/deposit/recharge |  | routes/frontapi/old.php | 71 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /weapp/deposit/rechargerules |  | routes/frontapi/old.php | 72 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /weapp/deposit/recharge/agreement |  | routes/frontapi/old.php | 73 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/goods/items |  | routes/frontapi/old.php | 81 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/goods/items/{item_id} |  | routes/frontapi/old.php | 82 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/goods/items |  | routes/frontapi/old.php | 89 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/goods/items/{item_id} |  | routes/frontapi/old.php | 90 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/member |  | routes/frontapi/old.php | 100 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wxapp/member |  | routes/frontapi/old.php | 101 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/member/setting |  | routes/frontapi/old.php | 102 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/member/agreement |  | routes/frontapi/old.php | 103 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxapp/member |  | routes/frontapi/old.php | 104 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/barcode |  | routes/frontapi/old.php | 105 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/member/decryptPhoneInfo |  | routes/frontapi/old.php | 106 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxapp/order |  | routes/frontapi/old.php | 116 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/orders |  | routes/frontapi/old.php | 117 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/groupOrders |  | routes/frontapi/old.php | 118 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/groupOrders/{teamId} |  | routes/frontapi/old.php | 119 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/orders/count |  | routes/frontapi/old.php | 120 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/rights |  | routes/frontapi/old.php | 122 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/rightsLogs |  | routes/frontapi/old.php | 123 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/rights/{rights_id} |  | routes/frontapi/old.php | 124 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/rightscode/{rights_id} |  | routes/frontapi/old.php | 125 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/groupOrders/{teamId} |  | routes/frontapi/old.php | 132 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxa/promotion/articles |  | routes/frontapi/old.php | 141 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxa/promotion/articles/info |  | routes/frontapi/old.php | 142 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/pageparams/setting |  | routes/frontapi/old.php | 143 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/share/setting |  | routes/frontapi/old.php | 144 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxa/promotion/articles |  | routes/frontapi/old.php | 151 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxa/promotion/articles/info |  | routes/frontapi/old.php | 152 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/pageparams/setting |  | routes/frontapi/old.php | 153 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/share/setting |  | routes/frontapi/old.php | 154 | 401 |  | ERROR | {"data":{"message":"Unable to company_id.","code":401001,"status_code":401}} |
| GET | /wxapp/payment/config |  | routes/frontapi/old.php | 163 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/promotion/register |  | routes/frontapi/old.php | 171 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/order/get_offline_pay_info | h5app | routes/frontapi/orders.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/supplier/set_order_pay_status | h5app | routes/frontapi/orders.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/supplier/get_supplier_info | h5app | routes/frontapi/orders.php | 20 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/order/jspayconfig | h5app | routes/frontapi/orders.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/order | h5app | routes/frontapi/orders.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/epidemic/info | h5app | routes/frontapi/orders.php | 28 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/epidemic/mixed/cat | h5app | routes/frontapi/orders.php | 29 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/epidemic/info/del/{id} | h5app | routes/frontapi/orders.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/order_new | h5app | routes/frontapi/orders.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/getFreightFee | h5app | routes/frontapi/orders.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/order/{order_id} | h5app | routes/frontapi/orders.php | 35 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/order_new/{order_id} | h5app | routes/frontapi/orders.php | 36 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/orders | h5app | routes/frontapi/orders.php | 38 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/groupOrders | h5app | routes/frontapi/orders.php | 40 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/orders/count | h5app | routes/frontapi/orders.php | 42 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/orderscount | h5app | routes/frontapi/orders.php | 44 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/trackerpull | h5app | routes/frontapi/orders.php | 46 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/rights | h5app | routes/frontapi/orders.php | 48 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/rightsLogs | h5app | routes/frontapi/orders.php | 50 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/rights/{rights_id} | h5app | routes/frontapi/orders.php | 52 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/rightscode/{rights_id} | h5app | routes/frontapi/orders.php | 54 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/ziticode | h5app | routes/frontapi/orders.php | 56 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/order/cancel | h5app | routes/frontapi/orders.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/order/confirmReceipt | h5app | routes/frontapi/orders.php | 60 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/cart | h5app | routes/frontapi/orders.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/cart | h5app | routes/frontapi/orders.php | 64 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/cartdel | h5app | routes/frontapi/orders.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxapp/cartdelbat | h5app | routes/frontapi/orders.php | 68 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/cartupdate/checkstatus | h5app | routes/frontapi/orders.php | 70 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/cartupdate/batchnum | h5app | routes/frontapi/orders.php | 72 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/cartupdate/num | h5app | routes/frontapi/orders.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/cartupdate/promotion | h5app | routes/frontapi/orders.php | 76 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/cartcount | h5app | routes/frontapi/orders.php | 77 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/orders/invoice | h5app | routes/frontapi/orders.php | 79 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/pickupcode/{order_id} | h5app | routes/frontapi/orders.php | 80 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/cart/check/plusitem | h5app | routes/frontapi/orders.php | 82 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/delivery/lists | h5app | routes/frontapi/orders.php | 84 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/delivery/trackerpull | h5app | routes/frontapi/orders.php | 86 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/order/invoice/apply | h5app | routes/frontapi/orders.php | 110 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/order/invoice/update | h5app | routes/frontapi/orders.php | 111 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/order/invoice/list | h5app | routes/frontapi/orders.php | 113 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/order/invoice/info/{id} | h5app | routes/frontapi/orders.php | 114 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/order/invoice/resend | h5app | routes/frontapi/orders.php | 115 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/order/invoice/setting | h5app | routes/frontapi/orders.php | 116 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/order/invoice/setting | h5app | routes/frontapi/orders.php | 117 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/groupOrders/{teamId} | h5app | routes/frontapi/orders.php | 126 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/cart/list | h5app | routes/frontapi/orders.php | 127 | 200 |  | OK | {"data":[]} |
| POST | /wxapp/getFreightFee | h5app | routes/frontapi/orders.php | 129 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/order_new | h5app | routes/frontapi/orders.php | 131 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/order/invoice/protocol | h5app | routes/frontapi/orders.php | 133 | 200 |  | OK | {"data":{"protocol":[]}} |
| POST | /wxapp/order_new | h5app | routes/frontapi/orders.php | 135 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/espier/subdistrict | h5app | routes/frontapi/orders.php | 139 | 200 |  | OK | {"data":[]} |
| POST | /wxapp/prescription/diagnosis | h5app | routes/frontapi/orders.php | 143 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxa/promotion/articles | h5app | routes/frontapi/pageSetting.php | 18 | 200 | 400 | ERROR | {"data":{"message":"\u5c0f\u7a0b\u5e8f\u6a21\u677f\u4e0d\u5b58\u5728","status_code":400}} |
| GET | /wxa/promotion/articles/info | h5app | routes/frontapi/pageSetting.php | 19 | 200 | 400 | ERROR | {"data":{"message":"\u5c0f\u7a0b\u5e8f\u6a21\u677f\u4e0d\u5b58\u5728","status_code":400}} |
| GET | /wxapp/pageparams/setting | h5app | routes/frontapi/pageSetting.php | 20 | 200 | 400 | ERROR | {"data":{"message":"\u5c0f\u7a0b\u5e8f\u6a21\u677f\u4e0d\u5b58\u5728","status_code":400}} |
| GET | /wxapp/share/setting | h5app | routes/frontapi/pageSetting.php | 21 | 200 |  | OK | {"data":{"title":"","desc":"","imageUrl":""}} |
| GET | /wxapp/newtemplate | h5app | routes/frontapi/pageSetting.php | 23 | 200 |  | OK | {"data":{"template_id":[]}} |
| GET | /wxapp/membercenter/setting | h5app | routes/frontapi/pageSetting.php | 25 | 200 | 400 | ERROR | {"data":{"message":"\u5c0f\u7a0b\u5e8f\u6a21\u677f\u4e0d\u5b58\u5728","status_code":400}} |
| GET | /wxapp/common/setting | h5app | routes/frontapi/pageSetting.php | 27 | 200 |  | OK | {"data":{"meiqia":{"channel":"single","meiqia_url":{"common":"","wxapp":"","h5":"","app":"","aliapp":"","pc":""},"is_open":false,"is_distributor_open":false},"echat":{"is_open":false,"echat_url":""}," |
| GET | /wxapp/cartremind/setting | h5app | routes/frontapi/pageSetting.php | 29 | 200 |  | OK | {"data":{"is_open":false,"remind_content":""}} |
| GET | /wxapp/getbyshareid | h5app | routes/frontapi/pageSetting.php | 31 | 200 | 500 | ERROR | {"data":{"message":"Call to a member function isEmpty() on string","status_code":500}} |
| GET | /wxapp/pagestemplate/baseinfo | h5app | routes/frontapi/pageSetting.php | 33 | 200 | 400 | ERROR | {"data":{"message":"\u5c0f\u7a0b\u5e8f\u6a21\u677f\u4e0d\u5b58\u5728","status_code":400}} |
| GET | /wxapp/pagestemplate/membercenter | h5app | routes/frontapi/pageSetting.php | 35 | 200 | 400 | ERROR | {"data":{"message":"\u5c0f\u7a0b\u5e8f\u6a21\u677f\u4e0d\u5b58\u5728","status_code":400}} |
| GET | /wxapp/pagestemplate/detail |  | routes/frontapi/pagestemplate.php | 17 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/pagestemplate/shopDetail |  | routes/frontapi/pagestemplate.php | 18 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/pagestemplate/setInfo |  | routes/frontapi/pagestemplate.php | 19 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/pagestemplate/gettdk |  | routes/frontapi/pagestemplate.php | 20 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/openscreenad |  | routes/frontapi/pagestemplate.php | 21 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/pctemplate/getHeaderOrFooter |  | routes/frontapi/pagestemplate.php | 23 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/pctemplate/getTemplateContent |  | routes/frontapi/pagestemplate.php | 24 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/pctemplate/loginPage/setting |  | routes/frontapi/pagestemplate.php | 25 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/memberCenterShare/getInfo |  | routes/frontapi/pagestemplate.php | 28 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/payment/config | h5app | routes/frontapi/payment.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/payment_deposit | h5app | routes/frontapi/payment.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/payment | h5app | routes/frontapi/payment.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/payment/query | h5app | routes/frontapi/payment.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/point/member | h5app | routes/frontapi/point.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/point/member/info | h5app | routes/frontapi/point.php | 19 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/point/rule | h5app | routes/frontapi/point.php | 23 | 200 |  | OK | {"data":{"name":"\u79ef\u5206","rule_desc":""}} |
| GET | /wxapp/pointsmall/goods/items | h5app | routes/frontapi/pointsmallgoods.php | 18 | 200 | 422 | ERROR | {"data":{"message":"\u83b7\u53d6\u5546\u54c1\u5217\u8868\u51fa\u9519.","errors":{"page":["validation.required"],"pageSize":["validation.required"]},"status_code":422}} |
| GET | /wxapp/pointsmall/lovely/goods/items | h5app | routes/frontapi/pointsmallgoods.php | 20 | 200 | 422 | ERROR | {"data":{"message":"\u83b7\u53d6\u5546\u54c1\u5217\u8868\u51fa\u9519.","errors":{"item_id":["validation.required"]},"status_code":422}} |
| GET | /wxapp/pointsmall/goods/items/{item_id} | h5app | routes/frontapi/pointsmallgoods.php | 22 | 200 | 422 | ERROR | {"data":{"message":"\u5546\u54c1\u4e0d\u5b58\u5728\u6216\u8005\u5df2\u4e0b\u67b6","status_code":422}} |
| GET | /wxapp/pointsmall/setting | h5app | routes/frontapi/pointsmallgoods.php | 24 | 200 |  | OK | {"data":{"pc_banner":["https:\/\/b-img-cdn.yuanyuanke.cn\/image\/21\/2021\/03\/05\/f9d2d5928c7c9ec97f4b1e2a473f44078PjR2ONSsqs5xTza01jT53e437T35ILB","https:\/\/b-img-cdn.yuanyuanke.cn\/image\/21\/2021 |
| POST | /wxapp/promotion/formid | h5app | routes/frontapi/promotions.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promotion/bargains | h5app | routes/frontapi/promotions.php | 20 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/promotion/userbargain | h5app | routes/frontapi/promotions.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promotion/bargainfriendwxappcode | h5app | routes/frontapi/promotions.php | 24 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/getMemberCard | h5app | routes/frontapi/promotions.php | 26 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/seckillactivity/geticket | h5app | routes/frontapi/promotions.php | 28 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| DELETE | /wxapp/promotion/seckillactivity/cancelTicket | h5app | routes/frontapi/promotions.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/promotion/checkin/create | h5app | routes/frontapi/promotions.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promotion/checkin/getlist | h5app | routes/frontapi/promotions.php | 31 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/turntableconfig | h5app | routes/frontapi/promotions.php | 33 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/getLuckyDrawData | h5app | routes/frontapi/promotions.php | 37 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/getLuckyDrawLog | h5app | routes/frontapi/promotions.php | 40 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/turntable | h5app | routes/frontapi/promotions.php | 44 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/loginaddtimes | h5app | routes/frontapi/promotions.php | 46 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/pluspricebuy/getItemList | h5app | routes/frontapi/promotions.php | 48 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promotion/userbargain | h5app | routes/frontapi/promotions.php | 54 | 200 | 422 | ERROR | {"data":{"message":"\u52a9\u529b\u6d3b\u52a8id\u4e0d\u80fd\u4e3a\u7a7a.","status_code":422}} |
| POST | /wxapp/promotion/bargainlog | h5app | routes/frontapi/promotions.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/promoter | h5app | routes/frontapi/promotions.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /wxapp/promoter | h5app | routes/frontapi/promotions.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promoter/index | h5app | routes/frontapi/promotions.php | 64 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/children | h5app | routes/frontapi/promotions.php | 65 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/childrenpromoter/list | h5app | routes/frontapi/promotions.php | 66 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/qrcode | h5app | routes/frontapi/promotions.php | 67 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/brokerages | h5app | routes/frontapi/promotions.php | 68 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/second/brokerages | h5app | routes/frontapi/promotions.php | 69 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/brokerage/count | h5app | routes/frontapi/promotions.php | 70 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/brokerage/point_count | h5app | routes/frontapi/promotions.php | 71 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/taskBrokerage/logs | h5app | routes/frontapi/promotions.php | 72 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/taskBrokerage/count | h5app | routes/frontapi/promotions.php | 73 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/promoter/cash_withdrawal | h5app | routes/frontapi/promotions.php | 74 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promoter/cash_withdrawal | h5app | routes/frontapi/promotions.php | 75 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/brokerage/qrcode | h5app | routes/frontapi/promotions.php | 76 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/promoter/relgoods | h5app | routes/frontapi/promotions.php | 77 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /wxapp/promoter/relgoods | h5app | routes/frontapi/promotions.php | 78 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promoter/getSalesmanCount | h5app | routes/frontapi/promotions.php | 80 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/getSalesmanStatic | h5app | routes/frontapi/promotions.php | 81 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/getSalesmanStoreitems | h5app | routes/frontapi/promotions.php | 82 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/promoter/info | h5app | routes/frontapi/promotions.php | 88 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/promoter/relgoods | h5app | routes/frontapi/promotions.php | 89 | 200 |  | OK | {"data":{"goods_id":[]}} |
| GET | /wxapp/promoter/banner | h5app | routes/frontapi/promotions.php | 90 | 200 |  | OK | {"data":{"banner_img":""}} |
| GET | /wxapp/promoter/custompage | h5app | routes/frontapi/promotions.php | 91 | 200 |  | OK | {"data":{"custompage_template_id":0}} |
| POST | /wxapp/promoter/qrcode/log | h5app | routes/frontapi/promotions.php | 93 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/promoter/qrcode.png | h5app | routes/frontapi/promotions.php | 94 | 200 | 500 | ERROR | {"data":{"message":"Attempt to read property \"app_code\" on null","status_code":500}} |
| GET | /wxapp/promoter/new_qrcode.png | h5app | routes/frontapi/promotions.php | 95 | 200 | 500 | ERROR | {"data":{"message":"Attempt to read property \"app_code\" on null","status_code":500}} |
| GET | /wxapp/promotion/register | h5app | routes/frontapi/promotions.php | 101 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/promotions/groups | h5app | routes/frontapi/promotions.php | 103 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/promotion/seckillactivity/getlist | h5app | routes/frontapi/promotions.php | 105 | 200 |  | OK | {"data":{"total_count":0,"list":[],"cur":{"id":"1","company_id":"1","currency":"CNY","title":"\u4e2d\u56fd\u4eba\u6c11\u5e01","symbol":"\uffe5","rate":1,"is_default":true,"use_platform":"normal"}}} |
| GET | /wxapp/promotion/seckillactivity/getinfo | h5app | routes/frontapi/promotions.php | 107 | 200 |  | OK | {"data":{"cur":{"id":"1","company_id":"1","currency":"CNY","title":"\u4e2d\u56fd\u4eba\u6c11\u5e01","symbol":"\uffe5","rate":1,"is_default":true,"use_platform":"normal"}}} |
| GET | /wxapp/promotions/recommendlike | h5app | routes/frontapi/promotions.php | 108 | 200 |  | OK | {"data":{"total_count":0,"list":[]}} |
| GET | /wxapp/promotion/getskumarketing | h5app | routes/frontapi/promotions.php | 110 | 200 |  | OK | {"data":{"promotion_activity":null}} |
| GET | /wxapp/promotions/package | h5app | routes/frontapi/promotions.php | 112 | 200 |  | OK | {"data":{"list":[],"total_count":0}} |
| GET | /wxapp/promotions/package/{packageId} | h5app | routes/frontapi/promotions.php | 113 | 200 | 422 | ERROR | {"data":{"message":"\u672a\u67e5\u5230\u76f8\u5173\u7ec4\u5408\u5546\u54c1","status_code":422}} |
| GET | /wxapp/promotion/fullpromotion/getitemlist | h5app | routes/frontapi/promotions.php | 115 | 200 | 422 | ERROR | {"data":{"message":"\u6d3b\u52a8\u5df2\u5931\u6548","status_code":422}} |
| GET | /wxapp/promotion/live/list | h5app | routes/frontapi/promotions.php | 118 | 200 | 422 | ERROR | {"data":{"message":"\u8bf7\u5728\u5fae\u4fe1\u5c0f\u7a0b\u5e8f\u4e2d\u4f7f\u7528\u5fae\u4fe1\u76f4\u64ad\u529f\u80fd","status_code":422}} |
| GET | /wxapp/promotion/replay/list | h5app | routes/frontapi/promotions.php | 120 | 200 | 422 | ERROR | {"data":{"message":"\u8bf7\u5728\u5fae\u4fe1\u5c0f\u7a0b\u5e8f\u4e2d\u4f7f\u7528\u5fae\u4fe1\u76f4\u64ad\u529f\u80fd","status_code":422}} |
| GET | /wxapp/alitemplatemessage | h5app | routes/frontapi/promotions.php | 125 | 200 |  | OK | {"data":{"template_id":[]}} |
| GET | /wxapp/promotiontest/turntableconfig | h5app | routes/frontapi/promotions.php | 132 | 200 | 422 | ERROR | {"data":{"message":"\u9519\u8bef\uff0c\u6d3b\u52a8id\u5fc5\u4f20","status_code":422}} |
| GET | /wxapp/promotion/turntable | h5app | routes/frontapi/promotions.php | 134 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/sign | h5app | routes/frontapi/promotions.php | 139 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/sign/weekly/list | h5app | routes/frontapi/promotions.php | 141 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/pcqrcode | h5app | routes/frontapi/qrcode.php | 17 | 200 | 422 | ERROR | {"data":{"message":"\u6ca1\u6709\u5f00\u901a\u5c0f\u7a0b\u5e8f","status_code":422}} |
| GET | /wxapp/pcloginqrcode | h5app | routes/frontapi/qrcode.php | 18 | 200 | 422 | ERROR | {"data":{"message":"\u6ca1\u6709\u5f00\u901a\u5c0f\u7a0b\u5e8f","status_code":422}} |
| POST | /wxapp/urllink | h5app | routes/frontapi/qrcode.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/urlschema | h5app | routes/frontapi/qrcode.php | 24 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /alipaymini/qrcode.png | h5app | routes/frontapi/qrcode.php | 28 | 200 | 500 | ERROR | {"data":{"message":"Non-static method AliBundle\\Factory\\MiniAppFactory::getApp() cannot be called statically","status_code":500}} |
| GET | /wechatAuth/shopwxapp/community/qrcode.png | h5app | routes/frontapi/qrcode.php | 33 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wechatAuth/wxapp/qrcode.png | h5app | routes/frontapi/qrcode.php | 37 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /wxapp/order/rate/create | h5app | routes/frontapi/rate.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/order/replyRate | h5app | routes/frontapi/rate.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/order/rate/praise/{rate_id} | h5app | routes/frontapi/rate.php | 22 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/order/rate/praise/check/{rate_id} | h5app | routes/frontapi/rate.php | 24 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/order/ratePraise/status | h5app | routes/frontapi/rate.php | 26 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/order/rate/praise/num/{rate_id} | h5app | routes/frontapi/rate.php | 32 | 200 |  | OK | {"data":{"count":0}} |
| GET | /wxapp/order/rate/list | h5app | routes/frontapi/rate.php | 34 | 200 | 400 | ERROR | {"data":{"message":"\u5546\u54c1ID\u5f02\u5e38","status_code":400}} |
| GET | /wxapp/order/rate/detail/{rate_id} | h5app | routes/frontapi/rate.php | 36 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"unionid\"","status_code":500}} |
| GET | /wxapp/order/replyRate/list | h5app | routes/frontapi/rate.php | 38 | 200 | 400 | ERROR | {"data":{"message":"\u53c2\u6570\u5f02\u5e38","status_code":400}} |
| POST | /wxapp/reservation |  | routes/frontapi/reservation.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/reservation/dateDay |  | routes/frontapi/reservation.php | 18 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/reservation/recordlist |  | routes/frontapi/reservation.php | 19 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/reservation/timelist |  | routes/frontapi/reservation.php | 20 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/reservation/getCount |  | routes/frontapi/reservation.php | 21 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/can/reservation/rights |  | routes/frontapi/reservation.php | 22 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/salesperson/salemanShopList | h5app | routes/frontapi/salesperson.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/salesperson/bindusersalesperson | h5app | routes/frontapi/salesperson.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salespersonadmin/storemanagerinfo | h5app | routes/frontapi/salesperson.php | 26 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/salespersonadmin/addsalesperson | h5app | routes/frontapi/salesperson.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/salespersonadmin/updatesalesperson | h5app | routes/frontapi/salesperson.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salespersonadmin/salespersonlist | h5app | routes/frontapi/salesperson.php | 32 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/salespersonadmin/salespersoninfo | h5app | routes/frontapi/salesperson.php | 34 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/salespersonadmin/brokagestaticlist | h5app | routes/frontapi/salesperson.php | 36 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/salesperson/distributorlist | h5app | routes/frontapi/salesperson.php | 45 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/salesperson/distributor/is_valid | h5app | routes/frontapi/salesperson.php | 47 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/salesperson/cartdataadd | h5app | routes/frontapi/salesperson.php | 49 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxapp/salesperson/scancodeAddcart | h5app | routes/frontapi/salesperson.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salesperson/cartdatalist | h5app | routes/frontapi/salesperson.php | 51 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PUT | /wxapp/salesperson/cartupdate/checkstatus | h5app | routes/frontapi/salesperson.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/salesperson/cartcount | h5app | routes/frontapi/salesperson.php | 54 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/salesperson/salesPromotion | h5app | routes/frontapi/salesperson.php | 55 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| POST | /wxapp/salesperson/bainfo | h5app | routes/frontapi/salesperson.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/goods/salesperson/items | h5app | routes/frontapi/salesperson.php | 62 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/goods/salesperson/itemsinfo | h5app | routes/frontapi/salesperson.php | 63 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /wxapp/third_party/map/key |  | routes/frontapi/thire_party.php | 19 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /wxapp/trade/detail | h5app | routes/frontapi/trade.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/trade/setting | h5app | routes/frontapi/trade.php | 22 | 200 |  | OK | {"data":{"is_recharge_status":true}} |
| GET | /wxapp/trade/payment/list | h5app | routes/frontapi/trade.php | 26 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/trade/payment/listInfo | h5app | routes/frontapi/trade.php | 27 | 200 |  | OK | {"data":{"list":[],"is_adapay":false,"is_wxpay":false,"is_paypal":false}} |
| GET | /wxapp/trade/payment/get_setting | h5app | routes/frontapi/trade.php | 28 | 200 | 422 | ERROR | {"data":{"message":"\u6682\u65f6\u4e0d\u652f\u6301 ","status_code":422}} |
| GET | /wxapp/trade/withdraw/list | h5app | routes/frontapi/trade.php | 29 | 200 |  | OK | {"data":[{"pay_type_code":"alipay","pay_type_name":"\u652f\u4ed8\u5b9d"}]} |
| GET | /wxapp/trade/payment/hfpayversionstatus | h5app | routes/frontapi/trade.php | 30 | 200 |  | OK | {"data":{"hfpay_version_status":false}} |
| GET | /wxapp/trade/payment/alipay/result | h5app | routes/frontapi/trade.php | 31 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"out_trade_no\"","status_code":500}} |
| POST | /wxapp/ugc/follower/create | h5app | routes/frontapi/ugc.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/ugc/follower/list | h5app | routes/frontapi/ugc.php | 22 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/ugc/follower/stat | h5app | routes/frontapi/ugc.php | 25 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/ugc/comment/create | h5app | routes/frontapi/ugc.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/comment/like | h5app | routes/frontapi/ugc.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/comment/delete | h5app | routes/frontapi/ugc.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/ugc/comment/list | h5app | routes/frontapi/ugc.php | 39 | 200 | 422 | ERROR | {"data":{"message":"\u7b14\u8bb0id\u4e0d\u80fd\u4e3a\u7a7a\uff01","status_code":422}} |
| GET | /wxapp/ugc/post/setting | h5app | routes/frontapi/ugc.php | 41 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/mps/pullfeed | h5app | routes/frontapi/ugc.php | 44 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /wxapp/ugc/post/create | h5app | routes/frontapi/ugc.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/post/delete | h5app | routes/frontapi/ugc.php | 53 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/post/share | h5app | routes/frontapi/ugc.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/post/like | h5app | routes/frontapi/ugc.php | 59 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/topic/create | h5app | routes/frontapi/ugc.php | 63 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wxapp/ugc/tag/create | h5app | routes/frontapi/ugc.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/ugc/message/dashboard | h5app | routes/frontapi/ugc.php | 71 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/ugc/message/list | h5app | routes/frontapi/ugc.php | 74 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /wxapp/ugc/message/setTohasRead | h5app | routes/frontapi/ugc.php | 75 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/ugc/message/detail | h5app | routes/frontapi/ugc.php | 76 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /wxapp/ugc/post/detail | h5app | routes/frontapi/ugc.php | 85 | 200 |  | OK | {"data":{"post_info":null}} |
| GET | /wxapp/ugc/post/list | h5app | routes/frontapi/ugc.php | 89 | 200 |  | OK | {"data":[]} |
| POST | /wxapp/ugc/post/favorite | h5app | routes/frontapi/ugc.php | 92 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wxapp/ugc/topic/detail | h5app | routes/frontapi/ugc.php | 98 | 200 |  | OK | {"data":{"topic_info":null}} |
| GET | /wxapp/ugc/topic/list | h5app | routes/frontapi/ugc.php | 101 | 200 |  | OK | {"data":[]} |
| GET | /wxapp/ugc/tag/detail | h5app | routes/frontapi/ugc.php | 106 | 200 |  | OK | {"data":{"tag_info":null}} |
| GET | /wxapp/ugc/tag/list | h5app | routes/frontapi/ugc.php | 109 | 200 |  | OK | {"data":[]} |
| POST | /member |  | routes/openapi/member.php | 8 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /members |  | routes/openapi/member.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /members |  | routes/openapi/member.php | 10 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| GET | /member |  | routes/openapi/member.php | 11 | 401 |  | ERROR | {"data":{"message":"Failed to authenticate because of bad credentials or an invalid authorization header.","status_code":401}} |
| PATCH | /member_detail |  | routes/openapi/member.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /member_mobile |  | routes/openapi/member.php | 13 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member_orders |  | routes/openapi/member.php | 14 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /member_operate_logs |  | routes/openapi/member.php | 15 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /member_point_logs |  | routes/openapi/member.php | 18 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| PATCH | /member_point |  | routes/openapi/member.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member_point_orders |  | routes/openapi/member.php | 20 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /member_point |  | routes/openapi/member.php | 21 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /member_card |  | routes/openapi/member.php | 24 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| PATCH | /member_card |  | routes/openapi/member.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member_card_grades |  | routes/openapi/member.php | 28 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /member_card_grade |  | routes/openapi/member.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /member_card_grade |  | routes/openapi/member.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /member_card_grade |  | routes/openapi/member.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /member_card_vip_grades |  | routes/openapi/member.php | 34 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /member_card_vip_grade |  | routes/openapi/member.php | 35 | SKIP |  | SKIPPED: write/unsafe method |  |
| PATCH | /member_card_vip_grade |  | routes/openapi/member.php | 36 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /member_card_vip_grade |  | routes/openapi/member.php | 37 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | login | super/admin | routes/super/auth.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | login | superadmin | routes/super/auth.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /account/add | super/admin | routes/super/auth.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /account/add | superadmin | routes/super/auth.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /account/updatePassword | super/admin | routes/super/auth.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /account/updatePassword | superadmin | routes/super/auth.php | 25 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /account/login | super/admin | routes/super/auth.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /account/login | superadmin | routes/super/auth.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /account/token/refresh | super/admin | routes/super/auth.php | 36 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /account/token/refresh | superadmin | routes/super/auth.php | 36 | 401 |  | ERROR | {"data":{"message":"Token not provided","status_code":401}} |
| GET | /companys/list | superadmin | routes/super/companys.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| PUT | /companys | superadmin | routes/super/companys.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /companys/logs | superadmin | routes/super/companys.php | 20 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /distribution/protocol | superadmin | routes/super/companys.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /datacube/goodsdata | superadmin | routes/super/datacube.php | 18 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /datacube/companydata | superadmin | routes/super/datacube.php | 19 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /datacube/exportloglist | superadmin | routes/super/datacube.php | 20 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /espier/image_upload_token | superadmin | routes/super/espier.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /espier/upload_localimage | superadmin | routes/super/espier.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /globalconfig/getinfo | superadmin | routes/super/globalconfig.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /globalconfig/saveset | superadmin | routes/super/globalconfig.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /logistics/list | superadmin | routes/super/logistics.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| PUT | /logistics | superadmin | routes/super/logistics.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /logistics/{id} | superadmin | routes/super/logistics.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /logistics/del | superadmin | routes/super/logistics.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /logistics | superadmin | routes/super/logistics.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /logistics/init | superadmin | routes/super/logistics.php | 23 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /notice/list | superadmin | routes/super/notice.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /notice/add | superadmin | routes/super/notice.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /notice/update | superadmin | routes/super/notice.php | 23 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /notice/delete/{notice_id} | superadmin | routes/super/notice.php | 26 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /notice/{notice_id} | superadmin | routes/super/notice.php | 29 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /operator/open | superadmin | routes/super/operators.php | 17 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /operator | superadmin | routes/super/operators.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | shopmenu | super/admin | routes/super/permission.php | 17 | 401 |  | ERROR | {"data":{"message":"\u767b\u5f55\u5df2\u5931\u6548","code":401001,"status_code":401}} |
| GET | shopmenu | superadmin | routes/super/permission.php | 17 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | shopmenu | super/admin | routes/super/permission.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | shopmenu | superadmin | routes/super/permission.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | shopmenu | super/admin | routes/super/permission.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | shopmenu | superadmin | routes/super/permission.php | 19 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | shopmenu/{shopmenuId} | super/admin | routes/super/permission.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | shopmenu/{shopmenuId} | superadmin | routes/super/permission.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | shopmenu/down | super/admin | routes/super/permission.php | 21 | 401 |  | ERROR | {"data":{"message":"\u767b\u5f55\u5df2\u5931\u6548","code":401001,"status_code":401}} |
| GET | shopmenu/down | superadmin | routes/super/permission.php | 21 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | shopmenu/upload | super/admin | routes/super/permission.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | shopmenu/upload | superadmin | routes/super/permission.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | wxapp | super/admin | routes/super/permission.php | 26 | 401 |  | ERROR | {"data":{"message":"\u767b\u5f55\u5df2\u5931\u6548","code":401001,"status_code":401}} |
| GET | wxapp | superadmin | routes/super/permission.php | 26 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | wxapp | super/admin | routes/super/permission.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | wxapp | superadmin | routes/super/permission.php | 27 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | wxapp | super/admin | routes/super/permission.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | wxapp | superadmin | routes/super/permission.php | 28 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | upgradeTemp | super/admin | routes/super/permission.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | upgradeTemp | superadmin | routes/super/permission.php | 29 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | wxapp/{id} | super/admin | routes/super/permission.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | wxapp/{id} | superadmin | routes/super/permission.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | speedupaudit | super/admin | routes/super/permission.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | speedupaudit | superadmin | routes/super/permission.php | 31 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | domain | super/admin | routes/super/permission.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | domain | superadmin | routes/super/permission.php | 32 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | puturl | super/admin | routes/super/permission.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | puturl | superadmin | routes/super/permission.php | 33 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /permission | super/admin | routes/super/permission.php | 44 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /permission | superadmin | routes/super/permission.php | 44 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| GET | /shopmenu | super/admin | routes/super/permission.php | 46 | 401 |  | ERROR | {"data":{"message":"\u767b\u5f55\u5df2\u5931\u6548","code":401001,"status_code":401}} |
| GET | /shopmenu | superadmin | routes/super/permission.php | 46 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /shopmenu | super/admin | routes/super/permission.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shopmenu | superadmin | routes/super/permission.php | 48 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shopmenu | super/admin | routes/super/permission.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | /shopmenu | superadmin | routes/super/permission.php | 50 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /shopmenu/{shopmenuId} | super/admin | routes/super/permission.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | /shopmenu/{shopmenuId} | superadmin | routes/super/permission.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /shopmenu/down | super/admin | routes/super/permission.php | 54 | 401 |  | ERROR | {"data":{"message":"\u767b\u5f55\u5df2\u5931\u6548","code":401001,"status_code":401}} |
| GET | /shopmenu/down | superadmin | routes/super/permission.php | 54 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | /shopmenu/upload | super/admin | routes/super/permission.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /shopmenu/upload | superadmin | routes/super/permission.php | 56 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | wxapp | super/admin | routes/super/permission.php | 63 | 401 |  | ERROR | {"data":{"message":"\u767b\u5f55\u5df2\u5931\u6548","code":401001,"status_code":401}} |
| GET | wxapp | superadmin | routes/super/permission.php | 63 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | wxapp | super/admin | routes/super/permission.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | wxapp | superadmin | routes/super/permission.php | 64 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | wxapp | super/admin | routes/super/permission.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | wxapp | superadmin | routes/super/permission.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | upgradeTemp | super/admin | routes/super/permission.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| PUT | upgradeTemp | superadmin | routes/super/permission.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | wxapp/{id} | super/admin | routes/super/permission.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| DELETE | wxapp/{id} | superadmin | routes/super/permission.php | 67 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | speedupaudit | super/admin | routes/super/permission.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | speedupaudit | superadmin | routes/super/permission.php | 69 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | domain | super/admin | routes/super/permission.php | 70 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | domain | superadmin | routes/super/permission.php | 70 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | wxappOplatform/gettemplatedraftlist | super/admin | routes/super/permission.php | 79 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | wxappOplatform/gettemplatedraftlist | superadmin | routes/super/permission.php | 79 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | wxappOplatform/addtotemplate | super/admin | routes/super/permission.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | wxappOplatform/addtotemplate | superadmin | routes/super/permission.php | 81 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | wxappOplatform/gettemplatelist | super/admin | routes/super/permission.php | 83 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | wxappOplatform/gettemplatelist | superadmin | routes/super/permission.php | 83 | 401 |  | ERROR | {"data":{"message":"Unable to authenticate user.","code":401001,"status_code":401}} |
| POST | wxappOplatform/deletetemplate | super/admin | routes/super/permission.php | 85 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | wxappOplatform/deletetemplate | superadmin | routes/super/permission.php | 85 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | adapay/agent/callback | systemlink | routes/systemlink/adapay.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | jushuitan/{companyId} | systemlink | routes/systemlink/jushuitan.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | test/event/{order_id} |  | routes/systemlink/ome.php | 18 | 200 | 500 | ERROR | {"data":{"message":"Undefined array key \"trade_id\"","status_code":500}} |
| GET | test/group/event |  | routes/systemlink/ome.php | 21 | 200 |  | OK |  |
| GET | test/refund/event |  | routes/systemlink/ome.php | 24 | 200 | 500 | ERROR | {"data":{"message":"Cannot use object of type OrdersBundle\\Entities\\ServiceOrders as array","status_code":500}} |
| GET | test/aftersales/event |  | routes/systemlink/ome.php | 27 | 200 | 500 | ERROR | {"data":{"message":"Call to undefined method AftersalesBundle\\Entities\\Aftersales::setItemId()","status_code":500}} |
| GET | test/aftersales/logi/event |  | routes/systemlink/ome.php | 30 | 200 | 500 | ERROR | {"data":{"message":"Cannot use object of type AftersalesBundle\\Entities\\Aftersales as array","status_code":500}} |
| GET | test/aftersales/cancel/event |  | routes/systemlink/ome.php | 33 | 200 | 500 | ERROR | {"data":{"message":"Cannot use object of type AftersalesBundle\\Entities\\Aftersales as array","status_code":500}} |
| GET | ome/createitems |  | routes/systemlink/ome.php | 35 | 200 | 422 | ERROR | {"data":{"message":"\u5546\u54c1\u540d\u79f0\u5fc5\u586b","status_code":422}} |
| POST | ome |  | routes/systemlink/ome.php | 42 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | ome/{method} |  | routes/systemlink/ome.php | 43 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | ome/updateInvoice |  | routes/systemlink/ome.php | 46 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | store.trade.fullinfo.get |  | routes/systemlink/ome.php | 49 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | store.logistics.offline.send |  | routes/systemlink/ome.php | 52 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | store.trade.refund.status.update |  | routes/systemlink/ome.php | 55 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | store.refund.refuse |  | routes/systemlink/ome.php | 58 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | store.items.quantity.list.update |  | routes/systemlink/ome.php | 61 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | ome/createitems |  | routes/systemlink/ome.php | 62 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | store.trade.aftersale.status.update |  | routes/systemlink/ome.php | 65 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | ome/goods/category |  | routes/systemlink/ome.php | 66 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | openapi/{method} |  | routes/systemlink/openapi.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/customs/platData |  | routes/thirdparty/customs.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/customs/getOrderData |  | routes/thirdparty/customs.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/customs/updateOrderData |  | routes/thirdparty/customs.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/dm/messageNotify/{companyId} |  | routes/thirdparty/dm.php | 16 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/hfpay/notify |  | routes/thirdparty/hfpay.php | 6 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/icbcpay/notify |  | routes/thirdparty/icbcpay.php | 6 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/kuaizhen/medicineAuditResult |  | routes/thirdparty/kuaizhen.php | 6 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/kuaizhen/diagnosisFinish |  | routes/thirdparty/kuaizhen.php | 9 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/kuaizhen/refusePrescribe |  | routes/thirdparty/kuaizhen.php | 12 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/kuaizhen/cancelDiagnosis |  | routes/thirdparty/kuaizhen.php | 15 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/kuaizhen/prescriptionMedicationAndAudit |  | routes/thirdparty/kuaizhen.php | 18 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /third/kuaizhen/prescriptionMedicationDelete |  | routes/thirdparty/kuaizhen.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /third/saascert/certificate |  | routes/thirdparty/saascert.php | 26 | 401 |  | ERROR | {"data":{"message":"Unable to authorizer-appid.","code":401001,"status_code":401}} |
| GET | /third/saascert/delete/certificate |  | routes/thirdparty/saascert.php | 28 | 401 |  | ERROR | {"data":{"message":"Unable to authorizer-appid.","code":401001,"status_code":401}} |
| GET | /third/saascert/apply/bindrelation |  | routes/thirdparty/saascert.php | 30 | 401 |  | ERROR | {"data":{"message":"Unable to authorizer-appid.","code":401001,"status_code":401}} |
| GET | /third/saascert/accept/bindrelation |  | routes/thirdparty/saascert.php | 32 | 401 |  | ERROR | {"data":{"message":"Unable to authorizer-appid.","code":401001,"status_code":401}} |
| GET | /third/saascert/isbind |  | routes/thirdparty/saascert.php | 34 | 401 |  | ERROR | {"data":{"message":"Unable to authorizer-appid.","code":401001,"status_code":401}} |
| GET | /third/saaserp/log/list |  | routes/thirdparty/saascert.php | 37 | 401 |  | ERROR | {"data":{"message":"Unable to authorizer-appid.","code":401001,"status_code":401}} |
| GET | saaserp/test/event/{order_id} |  | routes/thirdparty/saaserp.php | 18 | 200 |  | OK |  |
| GET | saaserp/test/group/event |  | routes/thirdparty/saaserp.php | 21 | 200 |  | OK |  |
| GET | saaserp/test/refund/event |  | routes/thirdparty/saaserp.php | 24 | 200 |  | OK |  |
| GET | saaserp/test/aftersales/event |  | routes/thirdparty/saaserp.php | 27 | 200 | 500 | ERROR | {"data":{"message":"Call to undefined method AftersalesBundle\\Entities\\Aftersales::setItemId()","status_code":500}} |
| GET | saaserp/test/aftersales/logi/event |  | routes/thirdparty/saaserp.php | 30 | 200 | 500 | ERROR | {"data":{"message":"Unrecognized field: detail_id","status_code":500}} |
| GET | saaserp/test/aftersales/cancel/event |  | routes/thirdparty/saaserp.php | 33 | 200 |  | OK |  |
| POST | saaserp |  | routes/thirdparty/saaserp.php | 39 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /saaserp/log/list |  | routes/thirdparty/saaserp.php | 41 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /{verify_name}.txt |  | routes/web.php | 17 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /wechatAuth/events |  | routes/web.php | 20 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechatAuth/callback/{authorizerAppId} |  | routes/web.php | 21 | SKIP |  | SKIPPED: write/unsafe method |  |
| POST | /wechatAuth/wxpay/notify |  | routes/web.php | 22 | SKIP |  | SKIPPED: write/unsafe method |  |
| GET | /wechatAuth/wxapp/qrcode.png |  | routes/web.php | 24 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /payment/paypal/success |  | routes/web.php | 28 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| GET | /payment/paypal/cancel |  | routes/web.php | 29 | 200 | 404 | ERROR | {"data":{"message":"404 Not Found","status_code":404}} |
| POST | /payment/paypal/webhook |  | routes/web.php | 30 | SKIP |  | SKIPPED: write/unsafe method |  |