<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <!-- Styles -->
        @livewireStyles
    </head>
    <style>
        body {
            .koho-regular {
                font-family: "KoHo", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
        }

    </style>
    <body class="font-sans antialiased text-[#545454] koho-regular">

        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <div class="h-screen flex flex-col justify-between koho-regular">
                <div>



                    <main class="bg-[#AADAE6] bg-opacity-[70%] koho-regular">
                        {{ $slot }}
                    </main>
                </div>

                <div>
                    @include('components.footer')
                </div>
            </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
