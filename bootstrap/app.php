<?php

use App\Http\Middleware\AdminPanelMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminPanelMiddleware::class,
        ]);
        $middleware->validateCsrfTokens(except: [
            '/posts', // <-- exclude this route
            '/posts/*'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
