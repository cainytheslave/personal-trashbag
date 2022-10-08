<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Windows 97</title>

    <meta property="og:title" content="Windows 97 - Never existed thus superior">
    <meta property="og:site_name" content="Johns personal trashpage">
    <meta property="og:url" content="https://win97.de">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ Vite::asset('resources/images/logo.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">

    {{ $slot }}

</body>

</html>
