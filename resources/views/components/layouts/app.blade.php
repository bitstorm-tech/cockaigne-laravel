<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" data-theme="dim">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Welcome</title>

        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>

    <body>
        {{ $slot }}
    </body>
</html>
