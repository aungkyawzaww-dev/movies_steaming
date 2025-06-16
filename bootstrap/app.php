<?php

use App\Http\Middleware\RedirectIfAdminAuth;
use App\Http\Middleware\RedirectIfAuth;
use App\Http\Middleware\RedirectIfNotAdminAuth;
use App\Http\Middleware\RedirectIfNotAuth;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "RedirectIfAdminAuth" => RedirectIfAdminAuth::class,
            "RedirectIfNotAdminAuth" => RedirectIfNotAdminAuth::class,
            "RedirectIfAuth" => RedirectIfAuth::class,
            "RedirectIfNotAuth" => RedirectIfNotAuth::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
