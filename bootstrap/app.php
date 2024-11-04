<?php

use App\Adminapi\Middleware\AuthMiddleware;
use App\Adminapi\Middleware\InitMiddleware;
use App\Adminapi\Middleware\LoginMiddleware;
use App\Common\Service\JsonService;
use App\Exception\HttpResponseException;
use App\Middleware\LikeAdminAllowMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function () {
            Route::prefix('api')
                ->group(app_path('Api/Route/index.php'));
            Route::prefix('adminapi')
                ->middleware([
                    InitMiddleware::class, // 初始化
                    LoginMiddleware::class, // 登录验证
                    AuthMiddleware::class, // 权限认证
                ])
                ->group(app_path('Adminapi/Route/index.php'));
            Route::prefix('/')
                ->group(base_path('routes/web.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        // 全局跨域中间件
        $middleware->append(LikeAdminAllowMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (HttpResponseException $e) {
            return response()->json($e->getResData(), $e->getCode());
        });
        $exceptions->render(function (ValidationException $e) {
            return JsonService::throw($e->validator->errors()->first());
        });
    })->create();
