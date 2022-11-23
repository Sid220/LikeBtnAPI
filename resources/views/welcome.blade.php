{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>LikeBtnAPI</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}--}}
{{--        </style>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __("Dashboard")}}</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __("Log in")}}</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ __("Register")}}</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">--}}
{{--                    <x-jet-application-logo class="block h-12 w-auto" />--}}
{{--                </div>--}}

{{--                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2">--}}
{{--                        <div class="p-6">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">--}}
{{--                    <div class="text-center text-sm text-gray-500 sm:text-left">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">--}}
{{--                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                            </svg>--}}

{{--                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">--}}
{{--                                Shop--}}
{{--                            </a>--}}

{{--                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">--}}
{{--                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>--}}
{{--                            </svg>--}}

{{--                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">--}}
{{--                                Sponsor--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">--}}
{{--                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LikeBtnAPI</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link
        href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css"
        rel="stylesheet"
    />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <style>
        @import url("https://rsms.me/inter/inter.css");
        :root {
            --gap: 1rem;
        }
        .marquee {
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: var(--gap);
            -webkit-mask-image: linear-gradient( var(--mask-direction, to right), hsl(0 0% 0% / 0), hsl(0 0% 0% / 1) 20%, hsl(0 0% 0% / 1) 80%, hsl(0 0% 0% / 0) );
            mask-image: linear-gradient( var(--mask-direction, to right), hsl(0 0% 0% / 0), hsl(0 0% 0% / 1) 20%, hsl(0 0% 0% / 1) 80%, hsl(0 0% 0% / 0) );
        }

        .marquee__content {
            flex-shrink: 0;
            display: flex;
            justify-content: space-around;
            min-width: 100%;
            gap: var(--gap);
            animation: scroll 10s linear infinite;
        }
        @keyframes scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(calc(-100% - var(--gap)));
            }
        }
        html {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
            "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
            "Noto Color Emoji";
        }

        .gradient {
            background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
        }

        button,
        .gradient2 {
            background-color: #f39f86;
            background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
        }

        /* Browser mockup code
   * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
   * Live example: https://updown.io
   */

        .browser-mockup {
            border-top: 2em solid rgba(230, 230, 230, 0.7);
            position: relative;
            height: 60vh;
        }

        .browser-mockup:before {
            display: block;
            position: absolute;
            content: "";
            top: -1.25em;
            left: 1em;
            width: 0.5em;
            height: 0.5em;
            border-radius: 50%;
            background-color: #f44;
            box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
        }

        .browser-mockup > * {
            display: block;
        }

        html {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
            "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
            "Noto Color Emoji";
        }

        .gradient {
            background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
        }

        button,
        .gradient2 {
            background-color: #f39f86;
            background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
        }

        /* Browser mockup code
   * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
   * Live example: https://updown.io
   */

        .browser-mockup {
            border-top: 2em solid rgba(230, 230, 230, 0.7);
            position: relative;
            height: 60vh;
        }

        .browser-mockup:before {
            display: block;
            position: absolute;
            content: "";
            top: -1.25em;
            left: 1em;
            width: 0.5em;
            height: 0.5em;
            border-radius: 50%;
            background-color: #f44;
            box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
        }

        .browser-mockup > * {
            display: block;
        }

        /* Custom code for the demo */
    </style>
</head>

<body class="gradient leading-relaxed tracking-wide flex flex-col">
<div class="h-full" style="background-image: url('/cdn/img/header.png');background-repeat: no-repeat;background-size: cover; min-height: 100vh;">
    <!--Nav-->
    <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
{{--                Rain<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">blur</span>--}}
                @include('vendor.jetstream.components.application-logo')
            </a>

            <div class="flex w-1/2 justify-end content-center">
                <a href="{{ LaravelLocalization::localizeUrl('/register') }}" class="p-4"><button class="animate-pulse py-2 px-8 bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button">
                   {{ __("Sign Up")}}
                    </button></a>
{{--                                    <a class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="https://twitter.com/intent/tweet?url=#">--}}
{{--                                        <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">--}}
{{--                                            <path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                    <a class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="https://www.facebook.com/sharer/sharer.php?u=#">--}}
{{--                                        <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">--}}
{{--                                            <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
                                </div>
                            </div>
                        </div>

                        <!--Main-->
                        <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                            <!--Left Col-->
                            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
                                <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                                    {{__("A Like Button for")}}
                                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                                {{ __("Any Occasion")}}
                              </span>
                                </h1>
                                <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left text-indigo-400">
                                    {{__("An API ready to handle any situation, with pre-build JS libraries and loads of customization.")}}
                                </p>

                                <div class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
                    {{--                <div class="mb-4">--}}
{{--                    <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">--}}
{{--                        Signup for our newsletter--}}
{{--                    </label>--}}
{{--                    <input class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out" id="emailaddress" type="text" placeholder="you@somewhere.com">--}}
{{--                </div>--}}

{{--                <div class="flex items-center justify-between pt-4">--}}
{{--                    <button class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button">--}}
{{--                        Sign Up--}}
{{--                    </button>--}}
{{--                </div>--}}
                <div class="marquee">
                    <ul class="marquee__content">
                        <li>
                            <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
                                <svg style="display: inline" fill="currentColor" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 25.3-19.5 46-44.3 47.9c7.7 8.5 12.3 19.8 12.3 32.1c0 23.4-16.8 42.9-38.9 47.1c4.4 7.2 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path></svg> 1,756
                            </button>
                        </li>
                        <li><div style='padding: 10px 15px;
background: #0080ff;
font-size: 18px;
font-family: "Open Sans", sans-serif;
border-radius: 5px;
color: #e8efff;
outline: none;
border: none;
cursor: pointer;
box-shadow: none;
' class="my-6"><span class="likebtnapi-icon clicked"><svg style="display: inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path>
</svg></span> <span>1.5K</span></div></li>
                        <li><div class="my-6" style='padding: 10px 15px;
background: #fff;
font-size: 18px;
font-family: "Open Sans", sans-serif;
border-radius: 5px;
color: black;
outline: none;
border: 1px solid black;
cursor: pointer;
box-shadow: none;'><span class="likebtnapi-icon"><svg style="display: inline" fill="currentColor" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 191.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V223.1C128 206.3 113.7 191.1 96 191.1zM512 227c0-36.89-30.05-66.92-66.97-66.92h-99.86C354.7 135.1 360 113.5 360 100.8c0-33.8-26.2-68.78-70.06-68.78c-46.61 0-59.36 32.44-69.61 58.5c-31.66 80.5-60.33 66.39-60.33 93.47c0 12.84 10.36 23.99 24.02 23.99c5.256 0 10.55-1.721 14.97-5.26c76.76-61.37 57.97-122.7 90.95-122.7c16.08 0 22.06 12.75 22.06 20.79c0 7.404-7.594 39.55-25.55 71.59c-2.046 3.646-3.066 7.686-3.066 11.72c0 13.92 11.43 23.1 24 23.1h137.6C455.5 208.1 464 216.6 464 227c0 9.809-7.766 18.03-17.67 18.71c-12.66 .8593-22.36 11.4-22.36 23.94c0 15.47 11.39 15.95 11.39 28.91c0 25.37-35.03 12.34-35.03 42.15c0 11.22 6.392 13.03 6.392 22.25c0 22.66-29.77 13.76-29.77 40.64c0 4.515 1.11 5.961 1.11 9.456c0 10.45-8.516 18.95-18.97 18.95h-52.53c-25.62 0-51.02-8.466-71.5-23.81l-36.66-27.51c-4.315-3.245-9.37-4.811-14.38-4.811c-13.85 0-24.03 11.38-24.03 24.04c0 7.287 3.312 14.42 9.596 19.13l36.67 27.52C235 468.1 270.6 480 306.6 480h52.53c35.33 0 64.36-27.49 66.8-62.2c17.77-12.23 28.83-32.51 28.83-54.83c0-3.046-.2187-6.107-.6406-9.122c17.84-12.15 29.28-32.58 29.28-55.28c0-5.311-.6406-10.54-1.875-15.64C499.9 270.1 512 250.2 512 227z"></path></svg></span> <span>Like</span></div>
                        </li>
                        <li>
                            <div style="font-size: 11px;
height: 20px;
padding: 0 6px;
background-color: #1877f2;
box-shadow: none;
font-family: Helvetica, Arial, sans-serif;
color: white;
border-radius: 5px;
border: 0;" class="my-6"><img style="display: inline;" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/FEppCFCt76d.png"> <span>2,423,245</span></div>
                        </li>
                        <li>
                            <div class="my-6" style="display: inline-block;
background: #fefefe;
border: 1px solid #95accb;
border-radius: 5px;
padding: 5px;
font-family: sans-serif;
box-shadow: 0 0 17px rgb(170,189,214) inset;
color: #394e87;
cursor: pointer;
min-width: 51px;
user-select: none;"><span class="likebtnapi-icon"><svg style="display: inline;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
</svg></span> <span>Like</span></div>
                        </li>
                        <li><div class="my-6" style="background: #4865b5;
box-shadow: none;
border: 1px solid #3d55a4;
color: white;
font-weight: 1000;
border-radius: 5px;
padding: 5px;
font-family: sans-serif;"><span class="likebtnapi-icon"><svg style="display: inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
</svg></span> <span>Star</span></div></li>
                        <li><button class="my-6 mx-auto bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button">
                                1.5M
                            </button></li>
                    </ul>
                    <!-- Mirrors the content above -->
                    <ul class="marquee__content">
                        <li>
                            <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
                                <svg style="display: inline" fill="currentColor" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 25.3-19.5 46-44.3 47.9c7.7 8.5 12.3 19.8 12.3 32.1c0 23.4-16.8 42.9-38.9 47.1c4.4 7.2 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path></svg> 1,756
                            </button>
                        </li>
                        <li><div style='padding: 10px 15px;
background: #0080ff;
font-size: 18px;
font-family: "Open Sans", sans-serif;
border-radius: 5px;
color: #e8efff;
outline: none;
border: none;
cursor: pointer;
box-shadow: none;
' class="my-6"><span class="likebtnapi-icon clicked"><svg style="display: inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path>
</svg></span> <span>1.5K</span></div></li>
                        <li><div class="my-6" style='padding: 10px 15px;
background: #fff;
font-size: 18px;
font-family: "Open Sans", sans-serif;
border-radius: 5px;
color: black;
outline: none;
border: 1px solid black;
cursor: pointer;
box-shadow: none;'><span class="likebtnapi-icon"><svg style="display: inline" fill="currentColor" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 191.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V223.1C128 206.3 113.7 191.1 96 191.1zM512 227c0-36.89-30.05-66.92-66.97-66.92h-99.86C354.7 135.1 360 113.5 360 100.8c0-33.8-26.2-68.78-70.06-68.78c-46.61 0-59.36 32.44-69.61 58.5c-31.66 80.5-60.33 66.39-60.33 93.47c0 12.84 10.36 23.99 24.02 23.99c5.256 0 10.55-1.721 14.97-5.26c76.76-61.37 57.97-122.7 90.95-122.7c16.08 0 22.06 12.75 22.06 20.79c0 7.404-7.594 39.55-25.55 71.59c-2.046 3.646-3.066 7.686-3.066 11.72c0 13.92 11.43 23.1 24 23.1h137.6C455.5 208.1 464 216.6 464 227c0 9.809-7.766 18.03-17.67 18.71c-12.66 .8593-22.36 11.4-22.36 23.94c0 15.47 11.39 15.95 11.39 28.91c0 25.37-35.03 12.34-35.03 42.15c0 11.22 6.392 13.03 6.392 22.25c0 22.66-29.77 13.76-29.77 40.64c0 4.515 1.11 5.961 1.11 9.456c0 10.45-8.516 18.95-18.97 18.95h-52.53c-25.62 0-51.02-8.466-71.5-23.81l-36.66-27.51c-4.315-3.245-9.37-4.811-14.38-4.811c-13.85 0-24.03 11.38-24.03 24.04c0 7.287 3.312 14.42 9.596 19.13l36.67 27.52C235 468.1 270.6 480 306.6 480h52.53c35.33 0 64.36-27.49 66.8-62.2c17.77-12.23 28.83-32.51 28.83-54.83c0-3.046-.2187-6.107-.6406-9.122c17.84-12.15 29.28-32.58 29.28-55.28c0-5.311-.6406-10.54-1.875-15.64C499.9 270.1 512 250.2 512 227z"></path></svg></span> <span>Like</span></div>
                        </li>
                        <li>
                            <div style="font-size: 11px;
height: 20px;
padding: 0 6px;
background-color: #1877f2;
box-shadow: none;
font-family: Helvetica, Arial, sans-serif;
color: white;
border-radius: 5px;
border: 0;" class="my-6"><img style="display: inline;" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/FEppCFCt76d.png"> <span>2,423,245</span></div>
                        </li>
                        <li>
                            <div class="my-6" style="display: inline-block;
background: #fefefe;
border: 1px solid #95accb;
border-radius: 5px;
padding: 5px;
font-family: sans-serif;
box-shadow: 0 0 17px rgb(170,189,214) inset;
color: #394e87;
cursor: pointer;
min-width: 51px;
user-select: none;"><span class="likebtnapi-icon"><svg style="display: inline;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
</svg></span> <span>Like</span></div>
                        </li>
                        <li><div class="my-6" style="background: #4865b5;
box-shadow: none;
border: 1px solid #3d55a4;
color: white;
font-weight: 1000;
border-radius: 5px;
padding: 5px;
font-family: sans-serif;"><span class="likebtnapi-icon"><svg style="display: inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
</svg></span> <span>Star</span></div></li>
                        <li><button class="my-6 mx-auto bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button">
                                1.5M
                            </button></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
            <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="/cdn/img/macbook.svg">
        </div>

{{--        <div class="mx-auto md:pt-16">--}}
{{--            <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">--}}
{{--                Download our app:--}}
{{--            </p>--}}
{{--            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">--}}
{{--                <img src="App Store.svg" class="h-12 pr-12 transform hover:scale-125 duration-300 ease-in-out">--}}
{{--                <img src="Play Store.svg" class="h-12 transform hover:scale-125 duration-300 ease-in-out">--}}
{{--            </div>--}}
{{--        </div>--}}
{{----}}
{{--        <!--Footer-->--}}
{{--        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">--}}
{{--            <a class="text-gray-500 no-underline hover:no-underline" href="#">© App 2020</a>--}}
{{--            - Template by--}}
{{--            <a class="text-gray-500 no-underline hover:no-underline" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a>--}}
{{--        </div>--}}
    </div>
</div>
{{--<!--Nav-->--}}
{{--<nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">--}}
{{--    <div--}}
{{--        class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6"--}}
{{--    >--}}
{{--        <div class="pl-4 flex items-center">--}}
{{--            <a--}}
{{--                class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"--}}
{{--                href="#"--}}
{{--            >--}}
{{--                <svg--}}
{{--                    class="h-6 w-6 inline-block fill-current text-yellow-700"--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    viewBox="0 0 20 20"--}}
{{--                >--}}
{{--                    <path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z" />--}}
{{--                </svg>--}}
{{--                Bolt App--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="block lg:hidden pr-4">--}}
{{--            <button--}}
{{--                id="nav-toggle"--}}
{{--                class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none"--}}
{{--            >--}}
{{--                <svg--}}
{{--                    class="fill-current h-3 w-3"--}}
{{--                    viewBox="0 0 20 20"--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                >--}}
{{--                    <title>Menu</title>--}}
{{--                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <div--}}
{{--            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"--}}
{{--            id="nav-content"--}}
{{--        >--}}
{{--            <ul class="list-reset lg:flex justify-end flex-1 items-center">--}}
{{--                <li class="mr-3">--}}
{{--                    <a--}}
{{--                        class="inline-block py-2 px-4 text-black font-bold no-underline"--}}
{{--                        href="#"--}}
{{--                    >Active</a--}}
{{--                    >--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a--}}
{{--                        class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"--}}
{{--                        href="#"--}}
{{--                    >link</a--}}
{{--                    >--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a--}}
{{--                        class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"--}}
{{--                        href="#"--}}
{{--                    >link</a--}}
{{--                    >--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <button--}}
{{--                id="navAction"--}}
{{--                class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75"--}}
{{--            >--}}
{{--                Action--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<div class="container mx-auto h-screen">--}}
{{--    <div class="text-center px-3 lg:px-0">--}}
{{--        <h1--}}
{{--            class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight"--}}
{{--        >--}}
{{--            Main Hero Message to sell yourself!--}}
{{--        </h1>--}}
{{--        <p--}}
{{--            class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8"--}}
{{--        >--}}
{{--            Sub-hero message, not too long and not too short. Make it just right!--}}
{{--        </p>--}}

{{--        <button--}}
{{--            class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48"--}}
{{--        >--}}
{{--            Sign Up--}}
{{--        </button>--}}
{{--        <a--}}
{{--            href="#"--}}
{{--            class="inline-block mx-auto lg:mx-0 hover:underline bg-transparent text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8"--}}
{{--        >View Additional Action</a--}}
{{--        >--}}
{{--    </div>--}}

{{--    <div class="flex items-center w-full mx-auto content-end">--}}
{{--        <div--}}
{{--            class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl"--}}
{{--        ></div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<section class="bg-white border-b py-12 ">--}}
{{--    <div--}}
{{--        class="container mx-auto flex flex-wrap items-center justify-between"--}}
{{--    >--}}
{{--        <h2--}}
{{--            class="w-full text-xl font-black leading-tight text-center text-gray-800 lg:mt-8"--}}
{{--        >--}}

{{--        </h2>--}}
{{--        <div class="w-full mb-4">--}}
{{--            <div--}}
{{--                class="h-1 mx-auto bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 w-1/6 my-0 py-0 rounded-t"--}}
{{--            ></div>--}}
{{--        </div>--}}

{{--        <div--}}
{{--            class="flex flex-1 flex-wrap max-w-4xl mx-auto items-center justify-between text-xl text-gray-500 font-bold opacity-75"--}}
{{--        >--}}
{{--          <span class="w-1/2 p-4 md:w-auto flex items-center"--}}
{{--          ><svg--}}
{{--                  class="h-10 w-10 mr-4 fill-current text-gray-500 opacity-75"--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  viewBox="0 0 20 20"--}}
{{--              >--}}
{{--              <path--}}
{{--                  d="M7 0H6L0 3v6l4-1v12h12V8l4 1V3l-6-3h-1a3 3 0 0 1-6 0z"--}}
{{--              /></svg>--}}
{{--            >TeeShirtz</span--}}
{{--          >--}}

{{--            <span class="w-1/2 p-4 md:w-auto flex items-center"--}}
{{--            ><svg--}}
{{--                    class="h-10 w-10 mr-4 fill-current text-gray-500 opacity-75"--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    viewBox="0 0 20 20"--}}
{{--                >--}}
{{--              <path--}}
{{--                  d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"--}}
{{--              /></svg>--}}
{{--            >Mic.Check</span--}}
{{--            >--}}

{{--            <span class="w-1/2 p-4 md:w-auto flex items-center"--}}
{{--            ><svg--}}
{{--                    class="h-10 w-10 mr-4 fill-current text-gray-500 opacity-75"--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    viewBox="0 0 20 20"--}}
{{--                >--}}
{{--              <path--}}
{{--                  d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"--}}
{{--              /></svg>--}}
{{--            >BadgeLife.io</span--}}
{{--            >--}}

{{--            <span class="w-1/2 p-4 md:w-auto flex items-center"--}}
{{--            ><svg--}}
{{--                    class="h-10 w-10 mr-4 fill-current text-gray-500 opacity-75"--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    viewBox="0 0 20 20"--}}
{{--                >--}}
{{--              <path--}}
{{--                  d="M15.3 14.89l2.77 2.77a1 1 0 0 1 0 1.41 1 1 0 0 1-1.41 0l-2.59-2.58A5.99 5.99 0 0 1 11 18V9.04a1 1 0 0 0-2 0V18a5.98 5.98 0 0 1-3.07-1.51l-2.59 2.58a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41l2.77-2.77A5.95 5.95 0 0 1 4.07 13H1a1 1 0 1 1 0-2h3V8.41L.93 5.34a1 1 0 0 1 0-1.41 1 1 0 0 1 1.41 0l2.1 2.1h11.12l2.1-2.1a1 1 0 0 1 1.41 0 1 1 0 0 1 0 1.41L16 8.41V11h3a1 1 0 1 1 0 2h-3.07c-.1.67-.32 1.31-.63 1.89zM15 5H5a5 5 0 1 1 10 0z"--}}
{{--              /></svg>--}}
{{--            >Bugz 4 Life</span--}}
{{--            >--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="bg-gray-100 border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <h2
            class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
            {{ __("Features")}}
        </h2>
        <div class="w-full mb-4">
            <div
                class="h-1 mx-auto bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 w-1/6 my-0 py-0 rounded-t"
            ></div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    {{ __("Automatic")}}
                </h3>
                <p class="text-gray-600 mb-8">
                    {{ __("Just pop in your website URL, and copy the code to the pages you want your like button on,")}} <i>et viola</i>. {{ __("A JavaScript library is already available") }}.
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <svg class="w-full sm:h-64 mx-auto" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="855.15669" height="581.90681" viewBox="0 0 855.15669 581.90681" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M696.92661,503.79661a5.5,5.5,0,0,1,5.5,5.49994v53.20618h105.5a5.5,5.5,0,0,1,0,11h-105.5v184h-11V509.29655A5.5,5.5,0,0,1,696.92661,503.79661Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M403.33253,756.2532l-19.83221.54759a13.81232,13.81232,0,0,1-8.48582-2.3789c-2.15367-1.602-3.14159-3.76763-2.70847-5.94251l3.90258-19.61285c.73546-3.7,5.26958-6.49709,10.77994-6.6493l10.95246-.30244c5.51034-.15215,10.19188,2.39045,11.1305,6.04428l4.979,19.36761c.55248,2.14765-.31449,4.36454-2.37642,6.08293A13.81231,13.81231,0,0,1,403.33253,756.2532Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><path d="M523.96291,755.69264l-19.83215.54763a13.81231,13.81231,0,0,1-8.48582-2.37891c-2.15362-1.602-3.14159-3.76763-2.70848-5.94251l3.90259-19.61285c.73546-3.7,5.2696-6.49714,10.77993-6.6493l10.95246-.30244c5.5104-.15213,10.19188,2.39045,11.1305,6.04428l4.979,19.36762c.55246,2.14769-.31448,4.36453-2.37641,6.08292A13.81217,13.81217,0,0,1,523.96291,755.69264Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><path d="M334.46727,589.18826a4.33143,4.33143,0,0,1,1.595-8.30761L561.53,574.65488a4.33,4.33,0,0,1,4.4488,4.208l0,.00038a4.33573,4.33573,0,0,1-4.20924,4.44844l-.00045-.00019-225.46776,6.22569A4.30673,4.30673,0,0,1,334.46727,589.18826Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><rect x="356.21949" y="515.39594" width="64.47382" height="217.68039" transform="translate(-194.26833 -166.59855) rotate(-1.58175)" fill="#e6e6e6"/><polygon points="242.126 333.079 229.737 366.828 229.748 520.587 244.844 524.916 242.126 333.079" fill="#ccc"/><path d="M385.11593,457.6809c-12.05743.34244-21.25689,21.20913-21.03567,29.35186l.407,14.74161,43.65913-1.20557-.407-14.74161C407.51085,477.68465,397.17388,457.35745,385.11593,457.6809Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><path d="M354.06345,606.43974a8.50984,8.50984,0,0,1-8.73142-8.26213l-.66249-23.99087a8.5,8.5,0,1,1,16.99353-.46923l.66248,23.99087A8.50982,8.50982,0,0,1,354.06345,606.43974Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><polyline points="193.233 339.284 192.928 323.429 197.086 323.326 197.391 339.13 201.16 569.476 197.001 569.591" fill="#3f3d56"/><path d="M425.06668,553.91991l-74.73856,2.0638c-7.13852-8.70518-7.78692-45.7926,7.11089-52.85111l5.8423-9.92024,45.04258-2.19882,5.26415,10.44507C420.99871,507.7645,424.81991,544.62037,425.06668,553.91991Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M396.9363,536.13244l-18.90007.52192c-3.64713.10071-6.74793-4.631-6.91128-10.54634s2.67166-10.811,6.3188-10.91168l18.90006-.52192c3.64714-.10071,6.74794,4.631,6.91129,10.54634S400.58344,536.03173,396.9363,536.13244Z" transform="translate(-177.18543 -177.55905)" fill="#673067"/><polygon points="183.151 465.568 144.192 493.088 137.386 555.138 182.834 539.953 183.151 465.568" fill="#e6e6e6"/><rect x="480.62986" y="512.731" width="64.47382" height="217.68039" transform="translate(-194.14737 -163.16544) rotate(-1.58175)" fill="#e6e6e6"/><polygon points="301.996 333.806 315.257 367.222 319.236 520.93 304.257 525.649 301.996 333.806" fill="#ccc"/><ellipse cx="397.13212" cy="262.58361" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><path d="M508.26852,455.05074c-12.05744.34245-21.25689,21.20914-21.03567,29.35186l.407,14.74161,43.65914-1.20557L530.892,483.197C530.66338,475.05448,520.32648,454.72726,508.26852,455.05074Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><polyline points="343.567 344.247 343.262 328.392 347.42 328.288 347.725 344.093 351.494 574.439 347.335 574.554" fill="#3f3d56"/><path d="M548.21927,551.28975l-74.7385,2.0638c-1.30314-7.87683.3826-44.63292,7.11089-52.85111l5.8423-9.92024,45.04259-2.19882,5.26414,10.44507C550.0394,499.91218,554.69093,536.03162,548.21927,551.28975Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M520.18032,536.813l-18.90007.52192c-3.64714.10071-6.76843-5.37372-6.957-12.20169s2.626-12.46635,6.273-12.56708l18.90007-.52192c3.64714-.10071,6.76843,5.37372,6.957,12.20169S523.8274,536.71222,520.18032,536.813Z" transform="translate(-177.18543 -177.55905)" fill="#673067"/><polygon points="368.086 449.662 405.749 478.93 409.715 541.227 365.009 523.983 368.086 449.662" fill="#e6e6e6"/><path d="M534.75357,338.67976c-40.4127,0-86.85713-44.8462-127.94893-23.53858-124.415,64.51367-107.28857-43.43994-143.032-83.58887l1.17348-2.35367c27.05948,103.21821,51.543,267.6924,142.3988,83.20476,22.75922-46.21386,97.45512,25.21994,141.42331,23.11264l.0763,2.8291Q541.8795,338.68114,534.75357,338.67976Z" transform="translate(-177.18543 -177.55905)" fill="#f2f2f2"/><path d="M631.75057,345.0259c-32.21551,24.39973-96.31582,16.69148-116.20791,58.48687-60.228,126.54525-111.754,30.14828-164.48777,19.72362l-.48561-2.58476c52.79008,4.37844,109.41447-2.4151,163.75111-19.64751,49.10434-15.57131,92.91452-38.73551,126.692-66.96179l1.76894,2.20919Q637.43193,340.72462,631.75057,345.0259Z" transform="translate(-177.18543 -177.55905)" fill="#f2f2f2"/><ellipse cx="104.13212" cy="150.58361" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><ellipse cx="366.13212" cy="58.58361" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><path d="M358.656,385.18822c-3.862,2.57318-7.81469-3.55124-3.87848-6.0102C358.63937,376.605,362.59207,382.72945,358.656,385.18822Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M501.656,184.18823c-3.862,2.57319-7.81469-3.55124-3.87848-6.01018C501.63937,175.605,505.59207,181.72944,501.656,184.18823Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><polygon points="408.749 125.801 406.292 125.262 406.83 122.804 405.192 122.445 404.653 124.903 402.196 124.365 401.837 126.003 404.294 126.542 403.756 128.999 405.394 129.358 405.933 126.9 408.39 127.439 408.749 125.801" fill="#e6e6e6"/><circle cx="183.53494" cy="32.73714" r="10.70233" fill="#ff6584"/><path d="M439.00118,196.74951c-12.05744.34245-21.2569,21.20915-21.03568,29.35188l.407,14.74161,43.65913-1.20556-.40711-14.74162C461.396,216.75324,451.05913,196.42606,439.00118,196.74951Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><path d="M464.99807,754.96821l-19.83215.54763a13.81233,13.81233,0,0,1-8.48582-2.37891c-2.15368-1.602-3.14165-3.76765-2.70848-5.94251l3.90259-19.61285c.73551-3.7,5.2696-6.49714,10.78-6.64927l10.95246-.30244c5.51039-.15213,10.19188,2.39044,11.1305,6.04427l4.9789,19.36752c.55246,2.14769-.31448,4.36453-2.37641,6.08292A13.81216,13.81216,0,0,1,464.99807,754.96821Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><rect x="415.4532" y="291.40111" width="64.47382" height="440.01582" transform="translate(-191.13137 -165.0065) rotate(-1.58175)" fill="#e6e6e6"/><polyline points="270.868 325.949 270.563 310.094 274.721 309.991 275.026 325.795 278.795 556.141 274.636 556.256" fill="#3f3d56"/><path d="M486.53068,330.85065,399.20479,333.262c-1.52254-9.20342.447-52.15,8.30847-61.75224l2.15433-11.462,60.29654-1.66505,3.15478,11.17106C481.77751,276.9218,486.2423,319.98486,486.53068,330.85065Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M471.87015,259.73526l-62.22262,1.7182c-2.29663.06335-4.1931-1.14245-4.23579-2.69339a1.95169,1.95169,0,0,1,.09665-.65848l9.66494-29.77518c.41385-1.275,2.06138-2.21137,3.98418-2.26446l41.26444-1.13939c1.9228-.05308,3.61946.79092,4.10307,2.04115l11.29335,29.19646c.57762,1.4933-.75639,3.04723-2.97964,3.47082A6.08056,6.08056,0,0,1,471.87015,259.73526Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M415.78556,501.48553a7.62611,7.62611,0,0,1-1.58088-.915,5.604,5.604,0,0,1-2.37913-4.32149l-2.26085-81.87758c-.0931-3.38939,3.22545-6.24061,7.39767-6.356l55.70319-1.53841c4.17306-.11605,7.64291,2.54888,7.73709,5.93821l2.26073,81.878a5.60268,5.60268,0,0,1-2.13683,4.44594,8.50617,8.50617,0,0,1-5.2613,1.90983l-55.70234,1.53767A8.91985,8.91985,0,0,1,415.78556,501.48553Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><path d="M451.438,254.46588l-18.90007.52192c-3.64714.1007-6.7311-4.01989-6.87367-9.18422s2.70926-9.44884,6.3564-9.54955l18.90007-.52192c3.64714-.10071,6.7311,4.01989,6.87367,9.18422S455.08518,254.36517,451.438,254.46588Z" transform="translate(-177.18543 -177.55905)" fill="#673067"/><path d="M898.19394,740.08733h-22V580.21c18.40229-1.31952,32.23267-6.95472,32.23267-13.70722,0-7.732-18.13245-14-40.5-14s-40.5,6.268-40.5,14c0,6.81751,14.09991,12.49408,32.76733,13.74207V740.08733h-22a8,8,0,0,0,0,16h60a8,8,0,0,0,0-16Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><polygon points="676.847 481.363 669.62 489.238 635.806 465.112 646.471 453.489 676.847 481.363" fill="#a0616a"/><path d="M835.5538,679.70713a13.32168,13.32168,0,0,0,4.33559,9.30746l.31814.296,9.47771-10.32853,13.82067-15.06363-10.20277-9.36667-1.84225,2.01241-.19237.20719-9.1817,4.343-1.94585.92483-.33295.15534-.73246,7.86477v.0074A13.28266,13.28266,0,0,0,835.5538,679.70713Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><polygon points="714.287 559.924 704.06 563.031 687.21 525.063 702.304 520.478 714.287 559.924" fill="#a0616a"/><path d="M863.98679,756.2017l.12581.42173,32.97573-10.01775-4.02487-13.251-2.60429.79166-.27375.08142-12.25956-1.12461-.36253-.02958-4.639,6.3998a13.41268,13.41268,0,0,0-8.93758,16.72833Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path id="ad16ec3e-8c70-4d69-a6df-f9bf45b483f6-308" data-name="Path 17" d="M807.14234,538.68707s-65.294,63.042-24.01623,82.55557h12.75817a84.503,84.503,0,0,1,12.61132-25.10752c1.20538-1.57743,5.72106-1.257,6.97511-2.79432,7.657-9.38674,15.95823-17.44824,21.69136-17.12816l-1.37151,43.558L833.571,635.30785c-1.16546,8.03186,31.7271,78.16146,31.7271,78.16146L885.9723,705.344s-21.53993-57.76213-21.79225-66.08937L881.44161,547.693Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M801.69759,541.79634a3.89,3.89,0,0,0,1.27259,1.15419,8.98975,8.98975,0,0,0,2.6709.99144c14.7011,3.33675,62.72574,10.25451,75.19244,6.9547,1.53153-.39951,2.53033-.96181,2.85587-1.70168,1.04323-2.33795.91-12.21517.296-24.14179-.111-2.2344-2.57476-4.65373-2.72269-6.99173-.10359-1.75347,2.10859-3.40335,1.99023-5.18645-.81387-12.05979-1.86447-24.34893-2.56735-32.11751-.4439-4.99408-.74727-8.11629-.74727-8.11629l7.58361-47.81746-.35512-.58452-.39951-.19973-24.45256-12.10422-1.33175-3.40336a5.26651,5.26651,0,0,0-4.87568-3.3368l-16.10687-.06656a5.249,5.249,0,0,0-4.2838,2.17516l-4.36522,6.04473-28.85472,18.49661.111.34031,13.53951,41.20306.06657,3.211v.0074l.5031,25.82125-1.39831,3.49959,1.57591,5.74136s-.72509,6.71053-4.60938,11.69726c-3.52177,4.528-8.00534,9.2483-10.03257,13.0808v.0074C801.12792,538.57055,800.75058,540.4054,801.69759,541.79634Z" transform="translate(-177.18543 -177.55905)" fill="#673067"/><path id="ef5568b9-6037-4ec0-9cfc-fa22633e4b80-309" data-name="Path 18" d="M779.991,617.49777l3.49,4.40992s32.09783,22.4561,33.2,24.55472l5.0727,4.80008,12.274-13.1203-6.383-8.00038a50.1066,50.1066,0,0,0-19.22112-14.71558h0l-9.78231-8.67888Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M895.61028,556.69023l-5.84513-56.57768L888.22236,476.827l16.36037-2.95828s-.64826,16.64985,1.495,26.04387c2.115,9.2699.28058,55.53545.14989,56.77256a7.95977,7.95977,0,1,1-10.61731.00505Z" transform="translate(-177.18543 -177.55905)" fill="#a0616a"/><path d="M876.128,471.0061l4.55755,9.75141,1.59073,3.396,4.2838,22.43266,2.13822,2.27139,1.84225,7.33208.86563-.17756,15.61117-3.2332,4.55014-.93965A8.64955,8.64955,0,0,0,909.999,501.015c-.31073-.28115-.56966-.5549-.5623-.81383.259-15.60377-.69547-44.096-9.31487-55.8228-2.73751-3.72154-4.38-7.42827-6.76978-10.0178-.00741-.00736-.00741-.01476-.01477-.01476l-5.81537-9.52206-.35512-.58452-.39951-.19973Z" transform="translate(-177.18543 -177.55905)" fill="#673067"/><circle id="af7fa85c-211d-4c02-a612-cf38cfa53f1c" data-name="Ellipse 5" cx="672.12801" cy="202.13103" r="21.43064" fill="#a0616a"/><path d="M874.76076,375.07894c.62766-3.6014,1.11688-8.27006-.6812-12.4204-1.51934-3.49282-5.32013-6.76762-9.54488-6.32591a4.39885,4.39885,0,0,0-1.37264-4.39892,11.55527,11.55527,0,0,0-4.6882-2.20425c-3.971-1.16718-8.08439-2.37721-12.33157-2.39969-4.7667-.0259-8.9903,1.60706-11.58015,4.48623l-.0634.09312-.77645,1.85365a1.86806,1.86806,0,0,1-1.14868,1.05728,1.83578,1.83578,0,0,1-1.55348-.1902,1.69462,1.69462,0,0,0-2.58087,1.36572l-.04131.791-1.112-.44327a1.68958,1.68958,0,0,0-2.29858,1.85051l.148.941a1.811,1.811,0,0,0-1.37993.31109,1.65526,1.65526,0,0,0-.58927,1.86,15.3983,15.3983,0,0,0,4.28388,6.39952,12.80237,12.80237,0,0,0,2.90823,1.97737q.32943.16611.68487.3146a76.25188,76.25188,0,0,0,26.96328,6.10778,15.65361,15.65361,0,0,0-1.67438,5.37209,5.87473,5.87473,0,0,0,2.514,5.54144,7.39947,7.39947,0,0,0,1.204.55162,7.94136,7.94136,0,0,1,1.15454.53448,3.59829,3.59829,0,0,1-.14825,6.24292s1.59493,1.94715,1.85017,1.91406a4.98167,4.98167,0,0,0,2.625-1.55306C870.17275,390.2022,873.27793,383.60175,874.76076,375.07894Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M968.58324,706.35184l.93143-20.94324a67.6402,67.6402,0,0,1,31.54965-7.98643c-15.15276,12.3885-13.25912,36.26927-23.53233,52.92887a40.68576,40.68576,0,0,1-29.83528,18.80144l-12.68037,7.76378a68.17644,68.17644,0,0,1,14.36987-55.24593A65.85415,65.85415,0,0,1,961.489,690.42482C964.526,698.4327,968.58324,706.35184,968.58324,706.35184Z" transform="translate(-177.18543 -177.55905)" fill="#f2f2f2"/><path d="M1032.34212,757.91264a1.5486,1.5486,0,0,1-1.55329,1.55322H178.73865a1.55322,1.55322,0,0,1,0-3.10644h852.05018A1.54866,1.54866,0,0,1,1032.34212,757.91264Z" transform="translate(-177.18543 -177.55905)" fill="#ccc"/><path d="M543.68349,601.12509a8.50985,8.50985,0,0,1-8.73142-8.26214l-.66249-23.99087a8.5,8.5,0,0,1,16.99351-.4692l.66249,23.99087A8.50985,8.50985,0,0,1,543.68349,601.12509Z" transform="translate(-177.18543 -177.55905)" fill="#3f3d56"/><path d="M918.53992,688.80705q-19.36817,0-42.45654-1.46386c-79.61377-5.05567-182.7378-22.63282-290.376-49.49219-107.6377-26.85938-206.93018-59.79395-279.58545-92.73438-35.39258-16.04687-62.55615-31.23633-80.73535-45.14746-19.24707-14.727-27.666-27.564-25.02393-38.15283,5.148-20.62891,50.731-25.14209,88.064-25.29541l.01269,3c-51.26806.21045-81.51367,8.38672-85.16552,23.022-4.65186,18.64014,33.28662,47.74073,104.08691,79.84131,72.49561,32.86813,171.60547,65.73923,279.07321,92.55661,107.46729,26.81641,210.40137,44.36328,289.83985,49.4082,77.57861,4.92774,124.74316-2.9375,129.39453-21.57812,3.86181-15.47656-21.59815-38.27539-71.68946-64.19824l1.37891-2.66407c36.397,18.83594,78.64551,45.85157,73.22168,67.58887-2.64252,10.58887-16.10541,17.96485-40.01508,21.92285C954.93494,687.67619,938.19422,688.80705,918.53992,688.80705Z" transform="translate(-177.18543 -177.55905)" fill="#ccc"/><path d="M233.244,669.1541c-10.24609,0-16.90722-2.5459-19.85547-7.60742-5.814-9.98047,3.92334-27.49317,28.94092-52.05079l2.10156,2.14063c-23.23877,22.8125-33.34277,40.001-28.45068,48.40039,3.0957,5.3125,12.30859,7.2168,26.64844,5.50391,14.23535-1.69922,33.10058-6.76465,56.07177-15.05469,47.291-17.06738,106.62256-45.85645,167.065-81.06445,60.44043-35.207,114.75048-72.61621,152.92675-105.335,7.33252-6.28565,13.98731-12.33252,19.7793-17.9712a196.95978,196.95978,0,0,0,20.97559-23.37744c8.563-11.627,11.45312-20.58105,8.35791-25.89453-5.16992-8.87451-26.8877-8.04-61.15625,2.353l-.87012-2.8711c36.76611-11.14892,58.50732-11.48339,64.61865-.99169,3.79737,6.51855.92578,16.3374-8.53418,29.18359a199.92306,199.92306,0,0,1-21.29883,23.74756c-5.83691,5.6831-12.53906,11.77246-19.91992,18.09961-38.30957,32.83349-92.77685,70.354-153.36914,105.64892-60.59375,35.29688-120.1001,64.168-167.55615,81.29492-23.18506,8.36719-42.27344,13.48536-56.73486,15.21094A82.69758,82.69758,0,0,1,233.244,669.1541Z" transform="translate(-177.18543 -177.55905)" fill="#ccc"/><path d="M780.78711,545.98171c-7.41429-.1477-47.23975-1.29075-53.77054-1.00966-.36944-1.29329-12.74985,14.57255-13.05093,14.6709a1.80832,1.80832,0,0,0,.60481,2.90758c.72777.44213,64.93165-.7456,65.70956-.59063a1.78591,1.78591,0,0,0,1.59378-1.03833l.42913-.96116c.04459-1.64432.58292-10.048.09966-11.48483A1.77814,1.77814,0,0,0,780.78711,545.98171Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M782.30283,559.95889c-.37681.90549-.85882,2.04315-2.02291,2.00138l-65.03159.7298a1.79391,1.79391,0,0,1-1.56528-2.63308Z" transform="translate(-177.18543 -177.55905)" opacity="0.17" style="isolation:isolate"/><path d="M727.32042,544.77735c-.7-1.21052-18.08617-87.23831-19.53728-87.95769l-11.87031-14.52105-1.06095-.79779c-1.47534-.81046-5.01435-.26248-4.69563,1.99086h0c2.7887,13.37007,20.7256,89.51848,21.11867,101.39039l2.15914,15.12429a1.86251,1.86251,0,0,0,2.29966,1.52982,3.58266,3.58266,0,0,0,2.87739-2.07911C718.773,558.92333,728.13321,545.08723,727.32042,544.77735Z" transform="translate(-177.18543 -177.55905)" fill="#e6e6e6"/><path d="M695.91,442.29922l22.70339,117.16093c-.75925,1.92172-4.312,3.268-5.13948.74717-.01446-.00347-23.29114-116.64351-23.31482-116.71323C689.911,440.687,694.54951,440.59792,695.91,442.29922Z" transform="translate(-177.18543 -177.55905)" opacity="0.17" style="isolation:isolate"/><polygon points="519.409 269.531 530.939 285.603 543.881 347.068 537.865 352.316 519.409 269.531" fill="#673067"/><path d="M773.34421,554.26935l3.19.13a12.53882,12.53882,0,0,1,.46-2.76c.48-2.28.91-4.99-1.08-4.98-1.35-.13-1.81,1.58-2.05,3.44A26.31787,26.31787,0,0,1,773.34421,554.26935Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M755.04423,549.97937l2.15.07995,1.04.04c-.02-1.14.51-3.49-.78-4.07a1.60015,1.60015,0,0,0-.65-.13c-1.21-.07-1.57.85-1.68006,1.91-.06994.64-.04,1.32-.06,1.85C755.06418,549.76935,755.05424,549.87933,755.04423,549.97937Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M748.67423,549.71936l2.16.09,1.03.04c-.02-1.31.67-4.17-1.43005-4.21-1.94-.11-1.69,2.36-1.74,3.76C748.69419,549.50934,748.68418,549.61932,748.67423,549.71936Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M742.30424,549.46936l2.15.08,1.04.04c-.02-1.3.67-4.16-1.43-4.2-1.94-.12-1.69,2.35-1.74,3.76C742.32419,549.25934,742.31418,549.36932,742.30424,549.46936Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M735.93418,549.20935l2.16.09,1.03.04c-.02-1.31.67-4.16-1.43-4.21-1.94-.11-1.69,2.36005-1.74,3.76C735.9542,548.99933,735.94419,549.10937,735.93418,549.20935Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M729.56418,548.95935l2.15.08,1.04.04c-.02-1.2.56-3.71-.98-4.14h-.01a1.46394,1.46394,0,0,0-.44-.06,1.5056,1.5056,0,0,0-.54.05h-.01c-1.34.35-1.15,2.45-1.19,3.71C729.5842,548.74933,729.57419,548.85937,729.56418,548.95935Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M766.91422,548.27936l3.19.13c0-.12,0-.25.01-.4a13.33041,13.33041,0,0,0,.04-2.29c-.11-.84-.47-1.5-1.48-1.52-1.03-.06-1.44.6-1.6,1.45a3.11646,3.11646,0,0,0-.08.44v.01C766.91422,546.87933,766.96421,547.71936,766.91422,548.27936Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M760.54423,548.01935l3.19.13a23.28044,23.28044,0,0,0,.06-2.58c-.09-.88-.44-1.6-1.49-1.62-1.06006-.07-1.47.65-1.63,1.54C760.52421,546.34936,760.60422,547.37933,760.54423,548.01935Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M754.17423,547.76935l.95.04,2.24.09c-.01-.48.08-1.18.09-1.87a4.23315,4.23315,0,0,0-.02-.62c-.08-.93-.41-1.7-1.5-1.72-1.11-.06-1.5.71-1.63995,1.65C754.15421,546.17932,754.23423,547.14935,754.17423,547.76935Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M766.97422,554.01935l3.19.12c-.01-1.3.67-4.16-1.43-4.2C766.63419,549.80932,767.09421,552.70935,766.97422,554.01935Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M760.60422,553.75934l3.19.13c-.01-1.31.67-4.17-1.43-4.21C760.2642,549.55932,760.72422,552.45935,760.60422,553.75934Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M754.23423,553.50934l3.19.12c-.01-.93.34-2.65-.23-3.57a1.31959,1.31959,0,0,0-1.2-.63,1.40554,1.40554,0,0,0-.93.23C754.04423,550.32934,754.3342,552.44934,754.23423,553.50934Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M747.86423,553.24933l3.19.13c-.01-.93.32995-2.63995-.22-3.57a1.32343,1.32343,0,0,0-1.21-.63995,1.38934,1.38934,0,0,0-.93.23C747.67423,550.08935,747.96421,552.19934,747.86423,553.24933Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M741.49418,552.99933l3.19.12c-.01-.93.34-2.65-.23-3.56994a1.31934,1.31934,0,0,0-1.2-.63,1.40519,1.40519,0,0,0-.93.23C741.30424,549.81933,741.59421,551.93933,741.49418,552.99933Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M735.12418,552.73938l3.19.12994c-.00994-.93.33-2.63995-.22-3.56994a1.31238,1.31238,0,0,0-1.21-.64,1.38925,1.38925,0,0,0-.93.23C734.93418,549.57934,735.22422,551.68933,735.12418,552.73938Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M728.75419,552.48938l3.19.12c-.01-.93005.33-2.64-.23-3.57a1.30821,1.30821,0,0,0-1.2-.63,1.405,1.405,0,0,0-.93.23C728.56418,549.31933,728.85422,551.42932,728.75419,552.48938Z" transform="translate(-177.18543 -177.55905)" fill="#2f2e41"/><path d="M764.7803,543.24528l24.31306-51.42056L798.286,470.375l-14.44775-8.22653s-4.92111,15.91917-10.06408,24.06724c-5.07509,8.04038-18.71837,52.28659-19.00618,53.49683a7.95977,7.95977,0,1,0,10.01233,3.53276Z" transform="translate(-177.18543 -177.55905)" fill="#a0616a"/><path d="M764.63224,495.6377l18.38757,11.09293,4.17-6.30274,2.77738-1.43257,11.49437-19.73725,10.16248-10.35367,13.42726-42.9193-17.47011,2.621-.02283.00749c-3.11234,1.65072-5.89632,4.60186-9.71281,7.20274-12.02605,8.19551-22.39546,34.75188-27.3355,49.55869-.08107.243-.4139.41243-.80035.57792a8.653,8.653,0,0,0-5.0775,9.68473Z" transform="translate(-177.18543 -177.55905)" fill="#673067"/></svg>
            </div>
        </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <svg class="w-5/6 sm:h-64 mx-auto" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="676.65833" height="577.34774" viewBox="0 0 676.65833 577.34774" xmlns:xlink="http://www.w3.org/1999/xlink"><path id="a24dc8e0-63f3-4c57-9da7-8d00cfa1aebe-579" data-name="Path 438" d="M576.714,689.7237a24.21461,24.21461,0,0,0,23.38269-4.11876c8.18977-6.87442,10.758-18.196,12.8467-28.68192l6.17973-31.01657-12.9377,8.90837c-9.30465,6.40641-18.81826,13.01866-25.26011,22.29785s-9.25223,21.94708-4.07792,31.988" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path id="bc8b2ee0-9ec2-4139-a7e3-e0b1b1382397-580" data-name="Path 439" d="M578.7117,729.43427c-1.62839-11.86369-3.30382-23.88079-2.15884-35.87168,1.01467-10.64932,4.26373-21.0488,10.87831-29.57938a49.20606,49.20606,0,0,1,12.62466-11.44038c1.26215-.79648,2.42409,1.20354,1.16733,1.997A46.77942,46.77942,0,0,0,582.7187,676.8654c-4.02857,10.24607-4.67545,21.41582-3.98154,32.3003.41944,6.58218,1.31074,13.12121,2.20588,19.65251a1.19817,1.19817,0,0,1-.808,1.42251,1.16348,1.16348,0,0,1-1.42253-.808Z" transform="translate(-261.67083 -161.32613)" fill="#f2f2f2"/><path id="a6bcb68f-fec1-4497-88cc-56de52c10faf-581" data-name="Path 442" d="M590.43273,710.39781a17.82511,17.82511,0,0,0,15.53141,8.01862c7.8644-.37318,14.41806-5.85972,20.31713-11.07027l17.452-15.4088-11.54987-.5528c-8.30619-.39784-16.82672-.771-24.73813,1.79338s-15.20758,8.72638-16.654,16.9154" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path id="a1650e23-bf32-4c95-848c-aacb59e17a01-582" data-name="Path 443" d="M574.10872,736.254c7.83972-13.87142,16.93234-29.28794,33.1808-34.21551a37.02589,37.02589,0,0,1,13.95545-1.44105c1.48189.128,1.11179,2.41174-.367,2.28454a34.39826,34.39826,0,0,0-22.27164,5.89214c-6.27994,4.27454-11.16975,10.21756-15.30781,16.51907-2.53511,3.86051-4.80576,7.88445-7.07642,11.903C575.49654,738.48066,573.37471,737.55312,574.10872,736.254Z" transform="translate(-261.67083 -161.32613)" fill="#f2f2f2"/><path d="M834.3331,568.1169H261.67083V161.32613H834.3331Z" transform="translate(-261.67083 -161.32613)" fill="#fff"/><path d="M308.319,328.40241a5.57978,5.57978,0,0,0,0,11.15956H501.70843a5.57979,5.57979,0,0,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#673067"/><path d="M308.319,361.88106a5.57979,5.57979,0,1,0-.02353,11.15956H501.85128a5.57978,5.57978,0,1,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#673067"/><path d="M308.319,394.88106a5.57979,5.57979,0,1,0-.02353,11.15956h43.55577a5.57978,5.57978,0,1,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#673067"/><path d="M834.3331,568.1169H261.67083V161.32613H834.3331Zm-563.24864-9.41363h553.835V170.73976h-553.835Z" transform="translate(-261.67083 -161.32613)" fill="#e5e5e5"/><path d="M654.14325,478.73228a10.03692,10.03692,0,0,0-.04234,20.07379h95.83757a10.0369,10.0369,0,1,0,0-20.07379Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M654.14325,357.18463a10.03692,10.03692,0,0,0-.04234,20.07379h95.83757a10.0369,10.0369,0,1,0,0-20.07379Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M308.319,483.38106a5.57979,5.57979,0,1,0-.02353,11.15956H501.85128a5.57978,5.57978,0,1,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M308.319,516.38106a5.57979,5.57979,0,1,0-.02353,11.15956h43.55577a5.57978,5.57978,0,1,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M308.319,449.90241a5.57978,5.57978,0,0,0,0,11.15956H501.70843a5.57979,5.57979,0,0,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M308.319,206.90241a5.57978,5.57978,0,0,0,0,11.15956H501.70843a5.57979,5.57979,0,0,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M308.319,240.38106a5.57979,5.57979,0,1,0-.02353,11.15956H501.85128a5.57978,5.57978,0,1,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M308.319,273.38106a5.57979,5.57979,0,1,0-.02353,11.15956h43.55577a5.57978,5.57978,0,1,0,0-11.15956Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><path d="M654.14325,235.73228a10.03692,10.03692,0,0,0-.04234,20.07379h95.83757a10.0369,10.0369,0,1,0,0-20.07379Z" transform="translate(-261.67083 -161.32613)" fill="#e4e4e4"/><circle cx="412.66227" cy="84.34774" r="18" fill="#cacaca"/><path d="M705.79333,371.574a9.97765,9.97765,0,0,0,10.27632,11.3346l9.55853,20.70035,13.99627-2.74057L725.71538,371.825a10.03173,10.03173,0,0,0-19.92205-.25107Z" transform="translate(-261.67083 -161.32613)" fill="#ffb6b6"/><polygon points="540.954 288.584 501.954 269.293 474.434 222.586 455.198 231.891 480.162 285.848 543.226 322.253 540.954 288.584" fill="#3f3d56"/><polygon points="452.907 564.696 440.647 564.695 434.814 529.347 452.909 529.348 452.907 564.696" fill="#ffb6b6"/><path d="M717.70442,737.9058l-39.53077-.00147v-.5a15.38731,15.38731,0,0,1,15.38648-15.38623h.001l24.144.001Z" transform="translate(-261.67083 -161.32613)" fill="#2f2e41"/><polygon points="575.282 542.21 566.728 550.992 537.336 530.508 549.961 517.546 575.282 542.21" fill="#ffb6b6"/><path d="M847.64779,709.58775l-27.582,28.318-.35819-.34886a15.38729,15.38729,0,0,1-.28711-21.75769l.00068-.0007,16.84623-17.29565Z" transform="translate(-261.67083 -161.32613)" fill="#2f2e41"/><path d="M729.73468,515.65207h-8.47936l0,0a236.91236,236.91236,0,0,0-49.42272,83.37115L661.70318,628.682l36.10213,75.59,22.52779.40187-25.748-80.25184,25.94027-34.4,1.30776,69.15187,83.49213,43.76321,16.71006-24.6851-67.94-37.15,11.57-58.81995s23.2789-19.41188,9.72338-49.76Z" transform="translate(-261.67083 -161.32613)" fill="#2f2e41"/><path d="M841.3331,438.67387,806.09749,423.2416,767.31532,440.427s-10.98222,6.2469-3.98222,22.2469l-42.07778,52.9782s.07778.0218,52.9599,16.86993l47.71093-42.01618a58.74345,58.74345,0,0,0,19.407-51.83192Z" transform="translate(-261.67083 -161.32613)" fill="#3f3d56"/><circle cx="573.74888" cy="236.89892" r="24.56103" fill="#ffb6b6"/><path d="M867.22776,365.63151c-5.63671-4.58572-14.37921-5.587-20.19831-1.23521-10.14917-5.3269-23.86487-2.54823-31.14037,6.30878-2.61816,3.18714-4.47305,7.49893-3.17756,11.41475,1.29549,3.91576,6.8819,6.21772,9.7939,3.29669l-.05192,1.20334a19.49485,19.49485,0,0,1-12.1204,33.19831q12.07284,4.877,24.14539,9.754c3.38659,1.36806,6.88109,2.7578,10.53325,2.73911s7.54514-1.79319,8.96241-5.15925q1.52858,4.6851,3.05687,9.37027a154.226,154.226,0,0,0,14.71518-30.33694c2.43658-6.84569,4.40646-14.00465,4.14333-21.26636C875.62641,377.65739,872.86446,370.21723,867.22776,365.63151Z" transform="translate(-261.67083 -161.32613)" fill="#2f2e41"/><circle cx="412.66227" cy="327.34774" r="18" fill="#cacaca"/><circle cx="468.66227" cy="205.89538" r="18" fill="#673067"/><path d="M730.79333,361.574a9.97765,9.97765,0,0,0,10.27632,11.3346l9.55853,20.70035,13.99627-2.74057L750.71538,361.825a10.03173,10.03173,0,0,0-19.92205-.25107Z" transform="translate(-261.67083 -161.32613)" fill="#ffb6b6"/><polygon points="565.954 278.584 526.954 259.293 499.434 212.586 480.198 221.891 505.162 275.848 568.226 312.253 565.954 278.584" fill="#3f3d56"/><path d="M937.32917,738.67387h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-261.67083 -161.32613)" fill="#cacaca"/></svg>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        {{ __("Fully Customizable") }}
                    </h3>
                    <p class="text-gray-600 mb-8">
                        {{ __("Customize your like button however you please using our in-build playground or your own code.")}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="bg-white border-b py-8">--}}
{{--    <div class="container mx-auto flex flex-wrap pt-4 pb-12">--}}
{{--        <h2--}}
{{--            class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"--}}
{{--        >--}}
{{--            Title--}}
{{--        </h2>--}}
{{--        <div class="w-full mb-4">--}}
{{--            <div--}}
{{--                class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"--}}
{{--            ></div>--}}
{{--        </div>--}}

{{--        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">--}}
{{--            <div--}}
{{--                class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"--}}
{{--            >--}}
{{--                <a href="#" class="flex flex-wrap no-underline hover:no-underline">--}}
{{--                    <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">--}}
{{--                        GETTING STARTED--}}
{{--                    </p>--}}
{{--                    <div class="w-full font-bold text-xl text-gray-800 px-6">--}}
{{--                        Lorem ipsum dolor sit amet.--}}
{{--                    </div>--}}
{{--                    <p class="text-gray-600 text-base px-6 mb-5">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam--}}
{{--                        at ipsum eu nunc commodo posuere et sit amet ligula.--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"--}}
{{--            >--}}
{{--                <div class="flex items-center justify-start">--}}
{{--                    <button--}}
{{--                        class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg"--}}
{{--                    >--}}
{{--                        Action--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">--}}
{{--            <div--}}
{{--                class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"--}}
{{--            >--}}
{{--                <a href="#" class="flex flex-wrap no-underline hover:no-underline">--}}
{{--                    <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">--}}
{{--                        GETTING STARTED--}}
{{--                    </p>--}}
{{--                    <div class="w-full font-bold text-xl text-gray-800 px-6">--}}
{{--                        Lorem ipsum dolor sit amet.--}}
{{--                    </div>--}}
{{--                    <p class="text-gray-600 text-base px-6 mb-5">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam--}}
{{--                        at ipsum eu nunc commodo posuere et sit amet ligula.--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"--}}
{{--            >--}}
{{--                <div class="flex items-center justify-center">--}}
{{--                    <button--}}
{{--                        class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg"--}}
{{--                    >--}}
{{--                        Action--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">--}}
{{--            <div--}}
{{--                class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"--}}
{{--            >--}}
{{--                <a href="#" class="flex flex-wrap no-underline hover:no-underline">--}}
{{--                    <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">--}}
{{--                        GETTING STARTED--}}
{{--                    </p>--}}
{{--                    <div class="w-full font-bold text-xl text-gray-800 px-6">--}}
{{--                        Lorem ipsum dolor sit amet.--}}
{{--                    </div>--}}
{{--                    <p class=" text-gray-600 text-base px-6 mb-5">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam--}}
{{--                        at ipsum eu nunc commodo posuere et sit amet ligula.--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"--}}
{{--            >--}}
{{--                <div class="flex items-center justify-end">--}}
{{--                    <button--}}
{{--                        class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg"--}}
{{--                    >--}}
{{--                        Action--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h2
            class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
            {{ __("Pricing") }}
        </h2>
        <div class="w-full mb-4">
            <div
                class="h-1 mx-auto bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 w-1/6 my-0 py-0 rounded-t"
            ></div>
        </div>

        <div
            class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4"
        >

            <div style="background-image: url('/cdn/img/header.png');"
                class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white text-white mt-4 sm:-mt-6 gradient shadow hover:shadow-lg z-10"
            >
                <div class="flex-1 rounded-t rounded-b-none overflow-hidden">
                    <div class="w-full p-8 text-3xl font-bold text-center opacity-75">{{__("FREE")}}</div>
                    <ul class="w-full text-center text-base font-bold opacity-75">
                        <li class="py-4">{{ __("5,000 API Calls*") }}</li>
                        <li class="py-4">{{ __("Built-in playground") }}</li>
                        <li class="py-4">{{ __("3 websites") }}</li>
                        <li class="py-4">{{ __("Unlimited pages")}}</li>
                        <li class="py-4">likebtnapi.js</li>
                        <li class="py-4">likebtnapi.css</li>
                        <li class="py-4">{{ __("Basic themes") }}</li>
                        <li class="py-4">{{ __("Full customizability")}}</li>
                    </ul>
                </div>
                <div
                    class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden p-6"
                >
                    <div class="opacity-75 w-full pt-6 text-4xl font-bold text-center">
                        $0
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="{{ LaravelLocalization::localizeUrl('/register') }}" class="p-4"><button class="py-4 px-8 bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button">
                                {{ __("Sign Up")}}
                            </button></a>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4 bg-slate-500"
            >
                <div
                    class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow"
                >
                    <div class="p-8 text-3xl font-bold text-center border-b-4">
                        Pro
                    </div>
                    <ul class="w-full text-center text-sm">
                        <li class="border-b py-4">{{ __("100,000 API Calls") }}</li>
                        <li class="border-b py-4">{{ __("Built-in playground") }}</li>
                        <li class="border-b py-4">{{ __("10 websites") }}</li>
                        <li class="border-b py-4">{{ __("Unlimited pages")}}</li>
                        <li class="border-b py-4">likebtnapi.js</li>
                        <li class="border-b py-4">likebtnapi.css</li>
                        <li class="border-b py-4">{{ __("Advanced themes") }}</li>
                        <li class="border-b py-4">{{ __("Full customizability")}}</li>
                    </ul>
                </div>
                <div
                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
                >
                    <div
                        class="w-full pt-6 text-3xl text-gray-600 font-bold text-center"
                    >
                        $0
                    </div>
                    <div class="flex items-center justify-center">
                        <button aria-disabled="true" style="filter: grayscale(100%); cursor: default" class="my-6 py-4 px-8 bg-gradient-to-r from-purple-800 to-green-500 text-white font-bold py-2 px-4 rounded focus:ring" type="button">
                                {{ __("COMING SOON")}}
                            </button>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4"
            >
                <div
                    class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow"
                >
                    <div class="p-8 text-3xl font-bold text-center border-b-4">
                        {{__("Enterprise")}}
                    </div>
                    <ul class="w-full text-center text-sm">
                        <li class="border-b py-4">{{ __("10,000,000 API Calls") }}</li>
                        <li class="border-b py-4">{{ __("Built-in playground") }}</li>
                        <li class="border-b py-4">{{ __("Unlimited websites") }}</li>
                        <li class="border-b py-4">{{ __("Unlimited pages")}}</li>
                        <li class="border-b py-4">likebtnapi.js</li>
                        <li class="border-b py-4">likebtnapi.css</li>
                        <li class="border-b py-4">{{ __("Advanced themes") }}</li>
                        <li class="border-b py-4">{{ __("Full customizability")}}</li>
                    </ul>
                </div>
                <div
                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
                >
                    <div
                        class="w-full pt-6 text-3xl text-gray-600 font-bold text-center"
                    >
                        $0
                    </div>
                    <div class="flex items-center justify-center">
                        <button aria-disabled="true" style="filter: grayscale(100%); cursor: default" class="my-6 py-4 px-8 bg-gradient-to-r from-purple-800 to-green-500 text-white font-bold py-2 px-4 rounded focus:ring" type="button">
                            {{ __("COMING SOON")}}
                        </button>
                    </div>
                </div>
            </div>
        </div><br>
        {{ __("*Subject to change at any time. Excess may be allowed while paid plans are being created.") }}
    </div>
</section>

<!--Footer-->
<footer class="bg-black" style="background-image: url('/cdn/img/header.png'); background-position-y: center; background-repeat: no-repeat; background-size: cover; " >
    <section class="w-full mx-auto text-center pt-6 pb-12">
        <h2
            class="w-full my-6 text-5xl font-black leading-tight text-center text-white"
        >
            <img src="/cdn/img/logo.png"
                 class="m-auto"
                 style="height: 48px"/>
        </h2>
        <div class="w-full mb-4">
            <div
                class="h-1 mx-auto bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 w-1/6 opacity-25 my-0 py-0 rounded-t"
            ></div>
        </div>

        <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left" style="text-align: center;">
            {{__("A Like Button for")}}
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                                {{ __("Any Occasion")}}
                              </span>
        </h1>

        <a href="{{ LaravelLocalization::localizeUrl('/register') }}" class="p-4"><button class="animate-pulse mx-auto my-4 py-4 px-8 bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button">
                {{ __("Sign Up")}}
            </button></a>
    </section>
    <div class="container mx-auto mt-8 px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-auto mr-6 mb-6">
                <a
                    class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="#"
                >
                    @include('vendor.jetstream.components.application-logo')
                </a><br>
                <a href="#" style="display: inline-block;" class="mr-3">
                    <img style="height: 36px; border-radius: 4px;" src="/cdn/img/certified.png">
                </a>
                <div id="likebtnapi-main" style="position: relative; top: -6px;"></div>
                <script src="/cdn/e858c0c2-0380-4a05-bf92-0cbab76696cf/likebtnapi.js?iconSet=fontawesome&likeSvg=&likeSvgFill=&likeText=Like&customCSS=%23likebtnapi-main+%7B++++padding%3A+10px+15px%3B++++background%3A+%230080ff%3B++++font-size%3A+18px%3B++++font-family%3A+%22Open+Sans%22%2C+sans-serif%3B++++border-radius%3A+5px%3B++++color%3A+%23e8efff%3B++++outline%3A+none%3B++++border%3A+none%3B++++cursor%3A+pointer%3B++++box-shadow%3A+none%3B++++%7D"></script>
                <style>#likebtnapi-main {    padding: 10px 15px;    background: rgb(240, 46, 170);    font-size: 18px;    font-family: "Open Sans", sans-serif;    border-radius: 5px;    color: #e8efff;    outline: none;    border: none;    cursor: pointer;    box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
                        transition: all 0.25s;    } #likebtnapi-main > .likebtnapi-icon {  display: inherit; }
                    #likebtnapi-main:hover {
                        box-shadow: rgba(240, 46, 170, 0.4) 3px 3px, rgba(240, 46, 170, 0.3) 7px 7px, rgba(240, 46, 170, 0.2) 13px 13px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 13px 13px;
                    }</style>
{{--                <div class="mx-auto flex flex-wrap items-center justify-between text-center container">--}}
{{--                    <h2 class="w-full text-xl font-black leading-tight text-center text-gray-800 lg:mt-8">--}}

{{--                    </h2>--}}
{{--                </div>--}}
            </div>

            <div class="flex-1">
                <p class="uppercase font-extrabold text-white opacity-75 md:mb-6">{{ __("Links") }}</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a
                            href="{{ LaravelLocalization::localizeUrl('/register') }}"
                            class="font-light no-underline hover:underline text-white opacity-75 hover:opacity-100"
                        >{{ __("Sign Up") }}</a
                        >
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a
                            href="/docs"
                            class="font-light no-underline hover:underline text-white opacity-75 hover:opacity-100"
                        >{{ __("Docs") }}</a
                        >
                    </li>
                </ul>
            </div>
{{--            <div class="flex-1">--}}
{{--                <p class="uppercase font-extrabold text-gray-500 md:mb-6">Legal</p>--}}
{{--                <ul class="list-reset mb-6">--}}
{{--                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">--}}
{{--                        <a--}}
{{--                            href="#"--}}
{{--                            class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"--}}
{{--                        >Terms</a--}}
{{--                        >--}}
{{--                    </li>--}}
{{--                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">--}}
{{--                        <a--}}
{{--                            href="#"--}}
{{--                            class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"--}}
{{--                        >Privacy</a--}}
{{--                        >--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="flex-1">
                <p class="uppercase font-extrabold text-white opacity-75 md:mb-6">{{ __("Social")}}</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a
                            href="https://github.com/Sid220/LikeBtnAPI/tree/master/public"
                            class="font-light no-underline hover:underline text-white opacity-75 hover:text-orange-500"
                        >GitHub</a
                        >
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase font-extrabold text-white opacity-75 md:mb-6">
                    {{ __("Company") }}
                </p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a
                            href="#"
                            class="font-light no-underline hover:underline text-white opacity-75 hover:text-orange-500"
                        >{{ __("About Us") }}</a
                        >
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a
                            href="#"
                            class="font-light no-underline hover:underline text-white opacity-75 hover:text-orange-500"
                        >{{ __("Contact") }}</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{--<script>--}}
{{--    /*Toggle dropdown list*/--}}
{{--    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/--}}

{{--    var navMenuDiv = document.getElementById("nav-content");--}}
{{--    var navMenu = document.getElementById("nav-toggle");--}}

{{--    document.onclick = check;--}}
{{--    function check(e) {--}}
{{--        var target = (e && e.target) || (event && event.srcElement);--}}

{{--        //Nav Menu--}}
{{--        if (!checkParent(target, navMenuDiv)) {--}}
{{--            // click NOT on the menu--}}
{{--            if (checkParent(target, navMenu)) {--}}
{{--                // click on the link--}}
{{--                if (navMenuDiv.classList.contains("hidden")) {--}}
{{--                    navMenuDiv.classList.remove("hidden");--}}
{{--                } else {--}}
{{--                    navMenuDiv.classList.add("hidden");--}}
{{--                }--}}
{{--            } else {--}}
{{--                // click both outside link and outside menu, hide menu--}}
{{--                navMenuDiv.classList.add("hidden");--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
{{--    function checkParent(t, elm) {--}}
{{--        while (t.parentNode) {--}}
{{--            if (t == elm) {--}}
{{--                return true;--}}
{{--            }--}}
{{--            t = t.parentNode;--}}
{{--        }--}}
{{--        return false;--}}
{{--    }--}}
{{--</script>--}}
</body>
</html>
