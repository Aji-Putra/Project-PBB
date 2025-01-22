<?php

use App\Http\Middleware\JuriKostumMiddleware;
use App\Http\Middleware\JuriPbbMiddleware;
use App\Http\Middleware\JuriVaforMiddleware;
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
            'pbb' => JuriPbbMiddleware::class,
            'kostum' => JuriKostumMiddleware::class,
            'vafor' => JuriVaforMiddleware::class
        ]); 
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
