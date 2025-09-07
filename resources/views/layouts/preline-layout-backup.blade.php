<!DOCTYPE html>
<html lang="en" class="relative min-h-full">
<head>
    <!-- Title -->
    <title>{{ $title ?? 'Catering App' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Theme Check and Update -->
    <script>
        const html = document.querySelector('html');
        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    </script>

    <style type="text/css">

    </style>
    <style>
        @keyframes typing
        {
            0%
            {
                opacity: 1;
                scale: 1;
            }

            50%
            {
                opacity: 0.75;
                scale: 0.75;
            }

            100%
            {
                opacity: 1;
                scale: 1;
            }
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-hidden bg-gray-100 dark:bg-neutral-900">

<!-- ========== HEADER ========== -->
<header class="fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 lg:z-61 w-full bg-zinc-100 text-sm py-2.5 dark:bg-neutral-900">
    <nav class="px-4 sm:px-5.5 flex basis-full items-center w-full mx-auto">
        <div class="w-full flex items-center gap-x-1.5">
            <ul class="flex items-center gap-1.5">
                <li class="inline-flex items-center relative text-gray-200 pe-1.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-200 dark:after:bg-neutral-700">
                    <!-- Sidebar Toggle -->
                    <button type="button" class="p-1.5 size-7.5 inline-flex items-center gap-x-1 text-xs rounded-md border border-transparent text-gray-500 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-sidebar" data-hs-overlay="#hs-pro-sidebar">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M15 3v18" />
                            <path d="m10 15-3-3 3-3" />
                        </svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->
                </li>
            </ul>

            <ul class="flex flex-row items-center gap-x-3 ms-auto">
                <li class="inline-flex items-center gap-1.5 relative text-gray-500 pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-200 dark:after:bg-neutral-700">
                    <div class="h-8">
                        <!-- Account Dropdown -->
                        <div class="hs-dropdown inline-flex [--strategy:absolute] [--auto-close:inside] [--placement:bottom-right] relative text-start">
                            <button
                                id="hs-dnad"
                                type="button"
                                class="cursor-pointer p-0.5 inline-flex shrink-0 items-center gap-x-3 text-start rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-200 dark:text-neutral-500"
                                aria-haspopup="menu"
                                aria-expanded="false"
                                aria-label="Dropdown"
                            >
                                <div class="bg-radial-[at_50%_75%] from-sky-200 via-blue-400 to-indigo-900 to-90% shrink-0 size-7 rounded-full"></div>
                            </button>

                            <!-- Account Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-xl shadow-xl dark:bg-neutral-900 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dnad">
                                <div class="py-2 px-3.5">
                                    <span class="font-medium text-gray-800 dark:text-neutral-300">
                                      {{ Auth::user()->name }}
                                    </span>
                                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                                <div class="px-4 py-2 border-t border-gray-200 dark:border-neutral-800">
                                    <!-- Switch/Toggle -->
                                    <div class="flex flex-wrap justify-between items-center gap-2">
                                        <span class="flex-1 cursor-pointer text-sm text-gray-600 dark:text-neutral-400">Theme</span>
                                        <div class="p-0.5 inline-flex cursor-pointer bg-gray-100 rounded-full dark:bg-neutral-800">
                                            <button type="button" class="size-7 flex justify-center items-center bg-white shadow-sm text-gray-800 rounded-full dark:text-neutral-200 hs-auto-mode-active:bg-transparent hs-auto-mode-active:shadow-none hs-dark-mode-active:bg-transparent hs-dark-mode-active:shadow-none" data-hs-theme-click-value="default">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="4" />
                                                    <path d="M12 3v1" />
                                                    <path d="M12 20v1" />
                                                    <path d="M3 12h1" />
                                                    <path d="M20 12h1" />
                                                    <path d="m18.364 5.636-.707.707" />
                                                    <path d="m6.343 17.657-.707.707" />
                                                    <path d="m5.636 5.636.707.707" />
                                                    <path d="m17.657 17.657.707.707" />
                                                </svg>
                                                <span class="sr-only">Default (Light)</span>
                                            </button>
                                            <button type="button" class="size-7 flex justify-center items-center text-gray-800 rounded-full dark:text-neutral-200 hs-dark-mode-active:bg-white hs-dark-mode-active:shadow-sm hs-dark-mode-active:text-neutral-800" data-hs-theme-click-value="dark">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                                                </svg>
                                                <span class="sr-only">Dark</span>
                                            </button>
                                            <button type="button" class="size-7 flex justify-center items-center text-gray-800 rounded-full dark:text-neutral-200 hs-auto-light-mode-active:bg-white hs-auto-dark-mode-active:bg-red-800 hs-auto-mode-active:shadow-sm" data-hs-theme-click-value="auto">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect width="20" height="14" x="2" y="3" rx="2" />
                                                    <line x1="8" x2="16" y1="21" y2="21" />
                                                    <line x1="12" x2="12" y1="17" y2="21" />
                                                </svg>
                                                <span class="sr-only">Auto (System)</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Switch/Toggle -->
                                </div>

                                <div class="p-1 border-t border-gray-200 dark:border-neutral-800">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                           href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); this.closest('form').submit();"
                                        >
                                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m16 17 5-5-5-5" />
                                                <path d="M21 12H9" />
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                            </svg>
                                            Log out
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <!-- End Account Dropdown -->
                        </div>
                        <!-- End Account Dropdown -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main class="lg:hs-overlay-layout-open:ps-60 transition-all duration-300 lg:fixed lg:inset-0 pt-13 px-3 pb-3">
    <!-- Sidebar -->
    <div id="hs-pro-sidebar"
         class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] [--opened:lg] [--auto-close:lg] [--prevent-on-load-init]
            hs-overlay-open:translate-x-0 lg:hs-overlay-layout-open:translate-x-0 -translate-x-full
            transition-all duration-300
            transform w-60 fixed inset-y-0 z-60 start-0 bg-gray-100 lg:block
            lg:-translate-x-full lg:end-auto lg:bottom-0
            dark:bg-neutral-900 hidden
            "
         role="dialog"
         tabindex="-1"
         aria-label="Sidebar"
    >
        <div class="lg:pt-13 relative flex flex-col h-full max-h-full">
            <!-- Body -->
            <nav class="p-3 size-full flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-200 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="lg:hidden mb-2 flex items-center justify-between">
                    <!-- Sidebar Toggle -->
                    <button type="button" class="p-1.5 size-7.5 inline-flex items-center gap-x-1 text-xs rounded-md text-gray-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden dark:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-sidebar" data-hs-overlay="#hs-pro-sidebar">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->
                </div>

                <button type="button" class="p-1.5 ps-2.5 w-full inline-flex items-center gap-x-2 text-sm rounded-lg bg-white border border-gray-200 text-gray-600 shadow-xs hover:border-gray-300 focus:outline-hidden focus:border-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:border-neutral-600 dark:focus:border-neutral-600">
                    Quick actions
                    <span class="ms-auto flex items-center gap-x-1 py-px px-1.5 border border-gray-200 rounded-md dark:border-neutral-700">
                        <svg class="shrink-0 size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                        </svg>
                        <span class="text-[11px] uppercase">k</span>
                    </span>
                </button>

                <div class="pt-3 mt-3 flex flex-col border-t border-gray-200 first:border-t-0 first:pt-0 first:mt-0 dark:border-neutral-700">
                    <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-800 dark:text-neutral-500">
                        Home
                    </span>

                    <!-- List -->
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a href="/" class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500">
                                Dashboard
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>

                <div class="pt-3 mt-3 flex flex-col border-t border-gray-200 first:border-t-0 first:pt-0 first:mt-0 dark:border-neutral-700">
                    <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-800 dark:text-neutral-500">
                        Data
                    </span>

                    <!-- List -->
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a href="/sekolah" class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500">
                                Sekolah
                            </a>
                        </li>
                        <li>
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500" href="#">
                                Barcode
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>

                <footer class="mt-auto p-3 flex flex-col">
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500" href="#">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                </svg>
                                Help &amp; support
                            </a>
                        </li>
                    </ul>
                </footer>
            </nav>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
        <!-- Header -->
        <div class="py-3 px-4 flex flex-wrap justify-between items-center gap-2 bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
            <div>
                <h1 class="font-medium text-lg text-gray-800 dark:text-neutral-200">
                    {{ $title ?? 'App' }}
                </h1>
            </div>
        </div>
        <!-- End Header -->

        <div class="flex-1 flex flex-col overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            {{ $slot }}
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->



<script data-navigate-track>
    document.addEventListener('livewire:navigate', initPreline);

    function initPreline() {
        window.HSStaticMethods.autoInit();

        document.addEventListener('livewire:navigated', function() {
            setTimeout(() => {
                window.HSStaticMethods.autoInit();
        });
        if (window.Livewire) {
            window.Livewire.hook('message.processed', () => {
                window.HSStaticMethods.autoInit();
            });
        }
}
</script>

</body>
</html>
