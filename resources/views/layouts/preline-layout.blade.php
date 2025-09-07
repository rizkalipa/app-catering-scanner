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
    @livewireStyles
</head>

<body class="overflow-hidden bg-gray-100 dark:bg-neutral-900">

<!-- ========== MAIN CONTENT ========== -->
<main class="md:ps-55 md:hs-overlay-minified:ps-13 transition-all duration-300 pb-2 h-screen flex flex-col bg-gray-100 dark:bg-neutral-900">
    <!-- Sidebar -->
    <div id="hs-pro-sidebar"
         class="hs-overlay [--auto-close:md]
        hs-overlay-open:translate-x-0
        -translate-x-full transition-all duration-300 transform
        w-55 hs-overlay-minified:w-13 overflow-hidden
        hidden
        fixed inset-y-0 z-60 start-0
        bg-gray-100 border-e border-gray-200 dark:border-neutral-700
        md:block md:translate-x-0 md:end-auto md:bottom-0
        dark:bg-neutral-900"
         role="dialog"
         tabindex="-1"
         aria-label="Sidebar"
    >
        <div class="relative flex flex-col h-full max-h-full">
            <!-- Header -->
            <header class="py-2.5 px-4 flex justify-between items-center gap-x-2 border-b border-b-gray-200 dark:border-b-neutral-700">
                <div class="-ms-2 flex items-center gap-x-1">
                    <div class="md:hs-overlay-minified:hidden">
                        <a class="shrink-0 inline-flex justify-center items-center size-9 rounded-lg text-xl inline-block font-semibold hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="@@href" aria-label="Preline">
                            <svg class="shrink-0 size-5 text-cyan-700 dark:text-cyan-400" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0835 3.23358C9.88316 3.23358 3.23548 9.8771 3.23548 18.0723V35.5832H0.583496V18.0723C0.583496 8.41337 8.41851 0.583252 18.0835 0.583252C27.7485 0.583252 35.5835 8.41337 35.5835 18.0723C35.5835 27.7312 27.7485 35.5614 18.0835 35.5614H16.7357V32.911H18.0835C26.2838 32.911 32.9315 26.2675 32.9315 18.0723C32.9315 9.8771 26.2838 3.23358 18.0835 3.23358Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0833 8.62162C12.8852 8.62162 8.62666 12.9245 8.62666 18.2879V35.5833H5.97468V18.2879C5.97468 11.5105 11.3713 5.97129 18.0833 5.97129C24.7954 5.97129 30.192 11.5105 30.192 18.2879C30.192 25.0653 24.7954 30.6045 18.0833 30.6045H16.7355V27.9542H18.0833C23.2815 27.9542 27.54 23.6513 27.54 18.2879C27.54 12.9245 23.2815 8.62162 18.0833 8.62162Z" fill="currentColor"/>
                                <path d="M24.8225 18.1012C24.8225 21.8208 21.8053 24.8361 18.0833 24.8361C14.3614 24.8361 11.3442 21.8208 11.3442 18.1012C11.3442 14.3815 14.3614 11.3662 18.0833 11.3662C21.8053 11.3662 24.8225 14.3815 24.8225 18.1012Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Sidebar Toggle -->
                    <button type="button" class="hidden md:hs-overlay-minified:flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-500 rounded-lg hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="dialog" aria-expanded="true" aria-controls="hs-pro-sidebar" aria-label="Minify navigation" data-hs-overlay-minifier="#hs-pro-sidebar">
                        <svg class="hidden hs-overlay-minified:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M15 3v18"></path><path d="m8 9 3 3-3 3"></path></svg>
                        <svg class="hs-overlay-minified:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M15 3v18"></path><path d="m10 15-3-3 3-3"></path></svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->

                    <div class="hidden sm:block md:hs-overlay-minified:hidden">

                    </div>
                </div>

                <!-- Sidebar Toggle -->
                <button type="button" class="hidden md:hs-overlay-minified:hidden md:flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-500 rounded-lg hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="dialog" aria-expanded="true" aria-controls="hs-pro-sidebar" aria-label="Minify navigation" data-hs-overlay-minifier="#hs-pro-sidebar">
                    <svg class="hidden hs-overlay-minified:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M15 3v18"></path><path d="m8 9 3 3-3 3"></path></svg>
                    <svg class="hs-overlay-minified:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M15 3v18"></path><path d="m10 15-3-3 3-3"></path></svg>
                    <span class="sr-only">Sidebar Toggle</span>
                </button>
                <!-- End Sidebar Toggle -->

                <!-- Sidebar Toggle -->
                <button type="button" class="flex md:hidden justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200" data-hs-overlay="#hs-pro-sidebar" aria-expanded="true">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    <span class="sr-only">Close</span>
                </button>
                <!-- End Sidebar Toggle -->
            </header>
            <!-- End Header -->

            <div class="mb-5 mt-3 px-2 flex flex-col gap-y-5">
                <!-- List -->
                <ul class="flex flex-col gap-y-3">
                    <li class="">
{{--                        <a--}}
{{--                            class="group relative w-full inline-flex items-center gap-1 py-1.5 px-2.5 relative text-sm text-gray-500 rounded-lg before:absolute before:inset-y-0 before:-start-2 before:rounded-e-full before:w-1 before:h-full hover:bg-gray-100/70 focus:outline-hidden focus:bg-gray-100/70 dark:hover:bg-neutral-700/50 dark:focus:bg-neutral-700/50 dark:text-neutral-500 "--}}
{{--                           href="{{ route('dashboard') }}"--}}
{{--                        >--}}
{{--                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">--}}
{{--                                <svg class="shrink-0 size-4 group-hover:scale-115 group-focus:scale-115 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>--}}
{{--                            </span>--}}
{{--                            <span class="ml-5 truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Dashboard</span>--}}
{{--                        </a>--}}

                        <a
                            href="{{ route('dashboard') }}"
                            class="group relative w-full inline-flex items-center gap-4 py-1.5 px-2.5 relative text-sm text-gray-500 rounded-lg before:absolute before:inset-y-0 before:-start-2 before:rounded-e-full before:w-1 before:h-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-100/70 dark:hover:bg-neutral-700/50 dark:focus:bg-neutral-700/50 dark:text-neutral-500"
                            wire:current="border border-gray-200 dark:border-neutral-700 shadow-xs bg-white dark:bg-neutral-800 dark:text-white hover:bg-gray-50"
                        >
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg class="shrink-0 size-4 group-hover:scale-115 group-focus:scale-115 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a
                            href="{{ route('academy.index') }}"
                            class="group relative w-full inline-flex items-center gap-4 py-1.5 px-2.5 relative text-sm text-gray-500 rounded-lg before:absolute before:inset-y-0 before:-start-2 before:rounded-e-full before:w-1 before:h-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-100/70 dark:hover:bg-neutral-700/50 dark:focus:bg-neutral-700/50 dark:text-neutral-500 "
                            wire:current="border border-gray-200 dark:border-neutral-700 shadow-xs bg-white dark:bg-neutral-800 dark:text-white hover:bg-gray-50"
                        >
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg class="shrink-0 size-4 group-hover:scale-115 group-focus:scale-115 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-icon lucide-folder"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Data Sekolah</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('barcode.index') }}"
                            class="group relative w-full inline-flex items-center gap-4 py-1.5 px-2.5 relative text-sm text-gray-500 rounded-lg before:absolute before:inset-y-0 before:-start-2 before:rounded-e-full before:w-1 before:h-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-100/70 dark:hover:bg-neutral-700/50 dark:focus:bg-neutral-700/50 dark:text-neutral-500 "
                            wire:current="border border-gray-200 dark:border-neutral-700 shadow-xs bg-white dark:bg-neutral-800 dark:text-white hover:bg-gray-50"
                        >
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg class="shrink-0 size-4 group-hover:scale-115 group-focus:scale-115 transition-transform duration-300"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="5" height="5" x="3" y="3" rx="1"/><rect width="5" height="5" x="16" y="3" rx="1"/><rect width="5" height="5" x="3" y="16" rx="1"/><path d="M21 16h-3a2 2 0 0 0-2 2v3"/><path d="M21 21v.01"/><path d="M12 7v3a2 2 0 0 1-2 2H7"/><path d="M3 12h.01"/><path d="M12 3h.01"/><path d="M12 16v.01"/><path d="M16 12h1"/><path d="M21 12v.01"/><path d="M12 21v-1"/></svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Barcode</span>
                        </a>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- ========== HEADER ========== -->
    <header class="md:ms-55 xl:hs-overlay-layout-open:me-96 md:hs-overlay-minified:ms-13 transition-all duration-300 fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 md:z-61 py-2.5">
        <nav class="sm:px-6 lg:px-8 px-4 flex basis-full justify-end items-center w-full mx-auto">
            <!-- Button Group -->
            <div class="flex items-center sm:gap-x-1.5">
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
                            <div class="bg-radial-[at_50%_25%] from-sky-200 via-blue-400 to-indigo-900 to-90% shrink-0 size-7 rounded-full"></div>
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
                                    <span class="flex-1 cursor-pointer text-sm text-gray-600 dark:text-neutral-500">Theme</span>
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
                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
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
            </div>
            <!-- End Button Group -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <div class="h-full flex flex-col justify-between sm:justify-center w-full mt-[3.3rem] mx-auto px-4 sm:px-6 lg:px-4">
        <!-- Body -->
        <div class="h-[calc(100dvh-65px)] overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="flex-1 flex flex-col overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                {{ $slot }}
            </div>
        </div>
    <!-- End Body -->
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
            })
        });

        if (window.Livewire) {
            window.Livewire.hook('message.processed', () => {
                window.HSStaticMethods.autoInit();
            });
        }
    }
</script>

@livewireScripts
</body>
</html>
