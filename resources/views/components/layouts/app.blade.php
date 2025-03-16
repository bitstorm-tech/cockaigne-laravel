<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" data-theme="business">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <title>Welcome</title>

        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>

    <body class="max-h-screen antialiased">
        <x-nav.nav-bar />
        <main class="pb-10 md:px-52">
            {{ $slot }}
        </main>
        <x-footer />
    </body>
</html>
