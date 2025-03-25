<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetLanguageMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        $language = $user['language'] ?? Cookie::get(LANGUAGE_COOKIE_NAME) ?? 'de';

        App::setLocale($language);

        return $next($request);
    }
}
