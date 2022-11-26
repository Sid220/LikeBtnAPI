<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="LikeBtnAPI, a like button widget for any occasion." />
        <meta name="keywords" content="like button widget API LikeBtnAPI" />
        <meta name="author" content="The Fake Slim Shady" />
        <link rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en') }}" />
        <link rel="alternate" hreflang="es" href="{{ LaravelLocalization::getLocalizedURL('es') }}" />
        <link rel="alternate" hreflang="fr" href="{{ LaravelLocalization::getLocalizedURL('fr') }}" />
        <link rel="alternate" hreflang="it" href="{{ LaravelLocalization::getLocalizedURL('it') }}" />
        <link rel="alternate" hreflang="ja" href="{{ LaravelLocalization::getLocalizedURL('ja') }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
