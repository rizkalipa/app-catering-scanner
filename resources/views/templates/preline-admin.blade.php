<!DOCTYPE html>
<html lang="en" class="relative min-h-full">
<head>
    <!-- Title -->
    <title>Catering Management App</title>

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.css">
    <style type="text/css">
        .apexcharts-tooltip.apexcharts-theme-light
        {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }
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
                            <button id="hs-dnad" type="button" class="p-0.5 inline-flex shrink-0 items-center gap-x-3 text-start rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-200 dark:text-neutral-500" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img class="shrink-0 size-7 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80" alt="Avatar">
                            </button>

                            <!-- Account Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-xl shadow-xl dark:bg-neutral-900 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dnad">
                                <div class="py-2 px-3.5">
                                    <span class="font-medium text-gray-800 dark:text-neutral-300">
                                      James Collison
                                    </span>
                                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                                        jamescollison@site.com
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
                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                                        <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m16 17 5-5-5-5" />
                                            <path d="M21 12H9" />
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        </svg>
                                        Log out
                                    </a>
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
    <div id="hs-pro-sidebar" class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] [--opened:lg] [--auto-close:lg] [--prevent-on-load-init]
            hs-overlay-open:translate-x-0 lg:hs-overlay-layout-open:translate-x-0 -translate-x-full hidden
            transition-all duration-300
            transform w-60 fixed inset-y-0 z-60 start-0 bg-gray-100 lg:block
            lg:-translate-x-full lg:end-auto lg:bottom-0
            dark:bg-neutral-900 hidden"
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
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500" href="#">
                                Dashboard
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>

                <div class="pt-3 mt-3 flex flex-col border-t border-gray-200 first:border-t-0 first:pt-0 first:mt-0 dark:border-neutral-700">
                    <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-800 dark:text-neutral-500">
                        Pages
                    </span>

                    <!-- List -->
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500" href="#">
                                Posts
                            </a>
                        </li>
                        <li>
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-800 focus:outline-hidden focus:bg-gray-200 focus:text-gray-800 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 dark:focus:bg-neutral-800 dark:focus:text-neutral-500 dark:text-neutral-500" href="#">
                                Members
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>

                <!-- Footer -->
                <footer class="mt-auto p-3 flex flex-col">
                    <!-- List -->
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
                    <!-- End List -->
                </footer>
                <!-- End Footer -->
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
        <!-- Header -->
        <div class="py-3 px-4 flex flex-wrap justify-between items-center gap-2 bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
            <div>
                <h1 class="font-medium text-lg text-gray-800 dark:text-neutral-200">
                    Dashboard
                </h1>
            </div>
        </div>
        <!-- End Header -->

        @yield('content')
    </div>
    <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- JS Implementing Plugins -->

<!-- JS PLUGINS -->
<!-- Required plugins -->
<script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>

<!-- Apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/lodash/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/preline/dist/helper-apexcharts.js"></script>

<!-- JS INITIALIZATIONS -->
<script>
    window.addEventListener('load', () => {
        (function () {
            buildChart('#hs-pro-anvpch', (mode) => ({
                chart: {
                    height: 300,
                    type: 'bar',
                    stacked: true,
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    },
                },
                series: [
                    {
                        name: 'Paid members',
                        data: [16600, 20000, 15800, 14200, 17200, 22800, 21800, 29400, 22600, 22900]
                    },
                    {
                        name: 'Free members',
                        data: [-10900, -15800, -23700, -13500, -6750, -17900, -18700, -17300, -17100, -24300]
                    }
                ],
                fill: {
                    type: ['pattern', 'solid'],
                    pattern: {
                        style: ['slantedLines', 'none'],
                        width: 6,
                        height: 6,
                        strokeWidth: 2
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '70%',
                    }
                },
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    type: 'category',
                    categories: [
                        '1 Jun 2025',
                        '2 Jun 2025',
                        '3 Jun 2025',
                        '4 Jun 2025',
                        '5 Jun 2025',
                        '6 Jun 2025',
                        '7 Jun 2025',
                        '8 Jun 2025',
                        '9 Jun 2025',
                        '10 Jun 2025',
                    ],
                    labels: {
                        rotate: -45,
                        style: {
                            colors: '#9ca3af',
                            fontSize: '13px',
                            fontFamily: 'Inter, ui-sans-serif',
                            fontWeight: 400
                        }
                    },
                    axisTicks: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        align: 'right',
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                            colors: '#9ca3af',
                            fontSize: '12px',
                            fontFamily: 'Inter, ui-sans-serif',
                            fontWeight: 400
                        },
                        formatter: (value) => `${Math.abs(value) >= 1000 ? `${Math.abs(value / 1000)}k` : Math.abs(value)}`
                    }
                },
                tooltip: {
                    x: {
                        format: 'MMMM yyyy'
                    },
                    y: {
                        formatter: (value) => {
                            const abs = Math.abs(value);
                            return `$${abs >= 1000 ? `${abs / 1000}k` : abs}`;
                        }
                    },
                    custom: function (props) {
                        return buildTooltipCompareTwo(props, {
                            title: 'Members',
                            mode,
                            hasCategory: false,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-36',
                            isValueDivided: false,
                            valuePrefix: '',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                },
                colors: ['#a78bfa', '#4338ca'],
                grid: {
                    strokeDashArray: 2,
                    borderColor: mode === 'dark' ? '#404040' : '#e5e7eb'
                },
                responsive: [{
                    breakpoint: 568,
                    options: {
                        chart: {
                            height: 280
                        },
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                            }
                        },
                        yaxis: {
                            labels: {
                                style: {
                                    colors: '#9ca3af',
                                    fontSize: '11px',
                                    fontFamily: 'Inter, ui-sans-serif',
                                    fontWeight: 400
                                },
                                formatter: (value) => `${Math.abs(value) >= 1000 ? `${Math.abs(value / 1000)}k` : Math.abs(value)}`
                            }
                        },
                        tooltip: {
                            custom: function (props) {
                                const { w, dataPointIndex } = props;
                                const { categories } = w.config.xaxis;

                                return buildTooltipCompareTwo(props, {
                                    title: `Members <br> <span class="text-xs text-gray-500">${categories[dataPointIndex]}</span>`,
                                    mode,
                                    hasCategory: false,
                                    hasTextLabel: true,
                                    wrapperExtClasses: 'min-w-36',
                                    isValueDivided: false,
                                    valuePrefix: '',
                                    labelDivider: ':',
                                    labelExtClasses: 'ms-2'
                                });
                            }
                        },
                    }
                }]
            }));
        })();
    });
</script>
<script>
    window.addEventListener('load', () => {
        // Apex Area Chart
        (function () {
            buildChart('#hs-pro-atatpvch', (mode) => ({
                chart: {
                    height: 90,
                    type: 'area',
                    toolbar: {
                        show: false
                    },
                    sparkline: {
                        enabled: true
                    },
                    zoom: {
                        enabled: false
                    }
                },
                series: [
                    {
                        name: 'Total views',
                        data: [780, 770, 760, 790, 775, 765, 755, 870, 880, 890, 875, 870, 860, 975, 990, 965, 960, 970, 975, 1085, 1070, 1060, 1080, 1075, 1065, 1070, 1060, 1080, 1075, 1065, 1071],
                        valuePostfix: ''
                    },
                    {
                        name: 'Total posts',
                        data: [25, 26, 27, 22, 25, 26, 37, 36, 35, 33, 35, 36, 37, 35, 44, 46, 47, 46, 45, 44, 46, 47, 45, 45, 46, 46, 47, 45, 45, 46, 48],
                        valuePostfix: ''
                    }
                ],
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight',
                    width: 2
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        type: 'vertical',
                        shadeIntensity: 1,
                        opacityFrom: 0.2,
                        opacityTo: 0.8
                    }
                },
                xaxis: {
                    type: 'category',
                    categories: [
                        '1 Jun 2025',
                        '2 Jun 2025',
                        '3 Jun 2025',
                        '4 Jun 2025',
                        '5 Jun 2025',
                        '6 Jun 2025',
                        '7 Jun 2025',
                        '8 Jun 2025',
                        '9 Jun 2025',
                        '10 Jun 2025',
                        '11 Jun 2025',
                        '12 Jun 2025',
                        '13 Jun 2025',
                        '14 Jun 2025',
                        '15 Jun 2025',
                        '16 Jun 2025',
                        '17 Jun 2025',
                        '18 Jun 2025',
                        '19 Jun 2025',
                        '20 Jun 2025',
                        '21 Jun 2025',
                        '22 Jun 2025',
                        '23 Jun 2025',
                        '24 Jun 2025',
                        '25 Jun 2025',
                        '26 Jun 2025',
                        '27 Jun 2025',
                        '28 Jun 2025',
                        '29 Jun 2025',
                        '30 Jun 2025',
                        '31 Jun 2025',
                    ],
                    crosshairs: {
                        show: false
                    }
                },
                tooltip: {
                    x: {
                        format: 'MMMM yyyy'
                    },
                    y: {
                        formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
                    },
                    custom: function (props) {
                        return buildTooltipCompareTwoAlt(props, {
                            title: 'Members',
                            mode,
                            hasCategory: false,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-36',
                            isValueDivided: false,
                            valuePrefix: '',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                },
                responsive: [{
                    breakpoint: 568,
                    options: {
                        labels: {
                            style: {
                                colors: '#9ca3af',
                                fontSize: '11px',
                                fontFamily: 'Inter, ui-sans-serif',
                                fontWeight: 400
                            },
                            offsetX: -2,
                            formatter: (title) => title.slice(0, 3)
                        },
                        yaxis: {
                            labels: {
                                align: 'left',
                                minWidth: 0,
                                maxWidth: 140,
                                style: {
                                    colors: '#9ca3af',
                                    fontSize: '11px',
                                    fontFamily: 'Inter, ui-sans-serif',
                                    fontWeight: 400
                                },
                                formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                            }
                        },
                    },
                }]
            }), {
                colors: ['#4338ca', '#d8b4fe'],
                fill: {
                    gradient: {
                        stops: [0, 90, 100]
                    }
                },
                grid: {
                    strokeDashArray: 2,
                    borderColor: '#e5e7eb'
                }
            }, {
                colors: ['#6366f1', '#7e22ce'],
                fill: {
                    gradient: {
                        stops: [100, 90, 0]
                    }
                },
                grid: {
                    strokeDashArray: 2,
                    borderColor: '#404040'
                }
            });
        })();
    });
</script>

<!-- JS THIRD PARTY PLUGINS -->
<!-- Google Analytics. Global site tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B73TDMXKF5"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-B73TDMXKF5');
</script>
</body>
</html>
