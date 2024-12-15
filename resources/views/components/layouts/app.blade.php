<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Cockaigne City</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <main class="pb-10 mx-auto max-w-[55rem]">
    {{ $slot }}
  </main>
</body>

</html>
