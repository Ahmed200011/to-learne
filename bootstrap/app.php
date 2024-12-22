<?php

use App\Http\Middleware\IsYoung;
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
        $middleware->alias(['is_young'=>IsYoung::class]); //alias for specific route
        // $middleware->append(IsYoung::class);//global
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
