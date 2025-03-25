<?php

use App\Http\Middleware\SetLanguageMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

define('LANGUAGE_COOKIE_NAME', 'cockaigne_language');

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->encryptCookies(except: [LANGUAGE_COOKIE_NAME]);
        $middleware->append(SetLanguageMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {})
    ->create();
