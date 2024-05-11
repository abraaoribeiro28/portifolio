<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('theme/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('theme/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon.png') }}" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">
    <x-layout.sidebar />

    <main class="relative h-full max-h-screen min-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl">
        <x-layout.navbar>
            @isset($title)
                {{ $title }}
            @endisset
        </x-layout.navbar>

        <div class="content-panel p-9">
            {{ $slot }}
        </div>

        <x-layout.footer />
    </main>

    <x-layout.side-configurator-theme />

    <script src="{{ asset('theme/assets/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('theme/assets/js/soft-ui-dashboard-pro-tailwind.js') }}" defer></script>
</body>
</html>
