<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\User\Lang\SetLang;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->prefix('user')
                ->name('user.')
                ->group(base_path('routes/User/user.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['SetLang'=>SetLang::Class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
