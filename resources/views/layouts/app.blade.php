<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/web-logo.png') }}">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        .dt-layout-row:has(.dt-search),
        .dt-layout-row:has(.dt-length),
        .dt-layout-row:has(.dt-paging) {
            display: none !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased relative" >
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="bg-brand-gray min-h-[100vh] dark:bg-neutral-900 dark:text-white">
            <div class="relative">
                <livewire:layout.navigation-app />
            </div>

            <div class="w-full lg:ps-64">
                <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <main class="relative">
                        {{ $slot }}
                    </main>
                </div>
            </div>

        </div>
    </div>
    @stack('scripts')
    <script data-navigate-once>
        document.addEventListener("livewire:navigated", () => {
            window.HSStaticMethods.autoInit();
        });
    </script>
</body>

</html>
