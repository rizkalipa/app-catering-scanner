<div class="h-full">
    <div class="flex-1 flex flex-col lg:flex-row h-full">
        <div class="flex-1 min-w-0 flex flex-col border-e border-gray-200 dark:border-neutral-700 h-full">
            <div class="p-4 border-b border-gray-200 dark:border-neutral-700">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-neutral-300">Informasi Menu</h3>
                    <svg class="w-5 h-5 text-gray-400 dark:text-neutral-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.828-2.828z"/>
                    </svg>
                </div>

                <div class="bg-gray-100 dark:bg-neutral-700 flex justify-between items-stretch rounded-lg">
                    <div class="flex-2 px-3 py-2">
                        <div class="flex items-center justify-between p-2">
                            <span class="text-sm text-gray-600 dark:text-neutral-300">ID Menu:</span>
                            <span class="font-bold text-base text-gray-800 dark:text-neutral-200">05</span>
                        </div>
                        <div class="flex items-center justify-between p-2">
                            <span class="text-sm text-gray-600 dark:text-neutral-300">Menu:</span>
                            <span class="font-bold text-base text-gray-800 dark:text-neutral-200">Ayam Bakar</span>
                        </div>
                        <div class="flex items-center justify-between p-2">
                            <span class="text-sm text-gray-600 dark:text-neutral-300">Jumlah:</span>
                            <span class="font-bold text-base text-gray-800 dark:text-neutral-200">29872 pax</span>
                        </div>
                        <div class="flex items-center justify-between p-2">
                            <span class="text-sm text-gray-600 dark:text-neutral-300">Tgl. Pengiriman:</span>
                            <span class="font-bold text-base text-gray-800 dark:text-neutral-200">Senin, 27 Juli 2025</span>
                        </div>
                    </div>

                    <div class="bg-blue-100 dark:bg-gray-700 p-4 rounded-lg flex justify-center items-center flex-grow-1">
                        <svg viewBox="0 0 100 100" class="w-24 h-24 drop-shadow-lg">
                            <!-- Top face -->
                            <polygon points="20,30 50,10 80,30 50,50"
                                     class="fill-blue-400 stroke-blue-600 stroke-1"/>

                            <!-- Left face -->
                            <polygon points="20,30 50,50 50,80 20,60"
                                     class="fill-blue-600 stroke-blue-800 stroke-1"/>

                            <!-- Right face -->
                            <polygon points="50,50 80,30 80,60 50,80"
                                     class="fill-blue-500 stroke-blue-700 stroke-1"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="p-4 flex flex-col bg-white dark:bg-neutral-800">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-neutral-300">Scan Barcode</h3>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 text-sm text-gray-500 dark:text-neutral-300 mt-1">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L10 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                09 Agustus 2025
                            </span>
                            <div>
                                @if($isScanActive)
                                    <span class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        Online
                                    </span>
                                @else
                                    <span class="flex items-center gap-1">
                                        <div class="w-2 h-2 bg-neutral-500 rounded-full"></div>
                                        Offline
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="flex items-center gap-2 text-gray-500 dark:text-neutral-300 text-sm">
                            Nomor Scan Admin
                        </div>
                        <span class="text-green-600 font-semibold flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Scan 1
                        </span>
                    </div>
                </div>

                <div class="mt-5 mb-1 relative w-full">
                    <div class="absolute top-0 left-0 m-3 flex items-center">
                        <label for="hs-large-switch-with-icons" class="relative inline-block w-15 h-8 cursor-pointer">
                            <input wire:change="toggleScanner" type="checkbox" id="hs-large-switch-with-icons" class="peer sr-only">
                            <span class="absolute inset-0 bg-gray-200 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-green-600 dark:bg-neutral-700 dark:peer-checked:bg-green-500 peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                            <span class="absolute top-1/2 start-0.5 -translate-y-1/2 size-7 bg-white rounded-full shadow-xs transition-transform duration-200 ease-in-out peer-checked:translate-x-full dark:bg-neutral-400 dark:peer-checked:bg-white"></span>
                            <!-- Left Icon (Off) -->
                            <span class="absolute top-1/2 start-1.5 -translate-y-1/2 flex justify-center items-center size-5 text-gray-500 peer-checked:text-white transition-colors duration-200 dark:text-neutral-500">
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                              </svg>
                            </span>
                            <!-- Right Icon (On) -->
                            <span class="absolute top-1/2 end-1.5 -translate-y-1/2 flex justify-center items-center size-5 text-gray-500 peer-checked:text-green-600 transition-colors duration-200 dark:text-neutral-500">
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                            </span>
                        </label>
                    </div>

                    @if(!$isScanActive)
                        <div class="h-64 flex items-center border border-gray-200 text-gray-800 text-[13px] rounded-lg py-1 hover:bg-gray-50 hover:border-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-50 focus:border-gray-100 focus:text-gray-700 dark:text-neutral-200 dark:border-neutral-700 dark:hover:bg-gray-500/20 dark:hover:border-gray-500/20 dark:hover:text-gray-400 dark:focus:bg-gray-500/20 dark:focus:border-gray-500/20 dark:focus:text-gray-400">
                            <div class="py-2 w-full flex flex-col items-center justify-center gap-x-1.5">
                                <span class="inline-flex justify-center items-center rounded-full bg-gray-100 dark:bg-white/10 size-36">
                                    <svg class="shrink-0 size-24 text-neutral-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><path d="M8 7v10"/><path d="M12 7v10"/><path d="M17 7v10"/></svg>
                                </span>
                            </div>
                        </div>
                    @else
                        <div class="h-64 flex items-center border border-green-500 text-green-800 text-[13px] rounded-lg py-1 hover:bg-green-50 hover:border-green-100 hover:text-green-700 focus:outline-none focus:bg-green-50 focus:border-green-100 focus:text-green-700 dark:text-neutral-200 dark:border-green-700 dark:hover:bg-green-500/20 dark:hover:border-green-500/20 dark:hover:text-green-400 dark:focus:bg-green-500/20 dark:focus:border-green-500/20 dark:focus:text-green-400">
                            <div class="py-2 w-full flex flex-col items-center justify-center gap-x-1.5">
                                <span class="animate-ping absolute inline-flex size-36 rounded-full bg-green-400 opacity-75"></span>
                                <span class="inline-flex justify-center items-center rounded-full bg-green size-36">
                                    <svg class="shrink-0 size-24 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><path d="M8 7v10"/><path d="M12 7v10"/><path d="M17 7v10"/></svg>
                                </span>
                            </div>
                        </div>
                    @endif
                </div>

                <div>
                    <input id="qrcode-input" type="text" class="bg-gray-100 w-full p-2" value="">
                </div>

                <div class="mt-5 mb-1">
                    <div class="space-y-5">
                        @if($barcode)
                            <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
                                <div class="flex items-start w-full">
                                    <div class="shrink-0">
                                        <!-- Icon -->
                                        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </span>
                                        <!-- End Icon -->
                                    </div>

                                    <div class="ms-3 w-full relative">
                                        <div class="absolute top-0 right-0">
                                            <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            234 / 3000 pax
                                            </span>
                                        </div>
                                        <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-white">
                                            Barcode berhasil diinput.
                                        </h3>

                                        <div class="mt-3 text-gray-800 text-sm dark:text-neutral-400 flex flex-col gap-2">
                                            <p class="flex gap-3">
                                                <span class="w-[90px]">No. Barcode</span>
                                                <span class="w-[20px]">:</span>
                                                <span class="dark:text-neutral-200 font-semibold">4567XXX</span>
                                            </p>
                                            <p class="flex gap-3">
                                                <span class="w-[90px]">Sekolah</span>
                                                <span class="w-[20px]">:</span>
                                                <span class="dark:text-neutral-200 font-semibold">SMKN 5</span>
                                            </p>

                                            <div class="space-y-1">
                                                <p>Proses</p>
                                                <!-- Progress -->
                                                <div>
                                                    <div class="inline-block mb-2 ms-[calc(25%-20px)] py-0.5 px-1.5 bg-blue-50 border border-blue-200 text-xs font-medium text-blue-600 rounded-lg dark:bg-blue-800/30 dark:border-blue-800 dark:text-blue-500">25%</div>
                                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <!-- End Progress -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--
                            <div class="bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30" role="alert" tabindex="-1" aria-labelledby="hs-bordered-red-style-label">
                                <div class="flex">
                                    <div class="shrink-0">
                                        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="ms-3">
                                        <h3 id="hs-bordered-red-style-label" class="text-gray-800 font-semibold dark:text-white">
                                            Error!
                                        </h3>
                                        <p class="text-sm text-gray-700 dark:text-neutral-400">
                                            Your purchase has been declined.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            -->
                        @else
                            <div class="bg-gray-50 border-t-2 border-gray-500 rounded-lg p-4 dark:bg-black/10" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
                                <div class="flex">
                                    <div class="shrink-0">
                                        <!-- Icon -->
                                        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-gray-100 bg-gray-200 text-gray-800 dark:border-neutral-800 dark:bg-gray-800 dark:text-neutral-400">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                            </svg>
                                        </span>
                                        <!-- End Icon -->
                                    </div>

                                    <div class="ms-3">
                                        <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-neutral-400">
                                            Tidak ada data.
                                        </h3>
                                        <p class="text-sm text-gray-700 dark:text-neutral-500">
                                            Aktifkan scanner dan scan barcode.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Loading Indicator -->
            <div id="page-loading" class="hidden h-16 flex flex-col justify-center items-center text-center">
                    <span class="inline-flex gap-x-1">
                        <span class="size-1.5 bg-gray-400 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-600"></span>
                        <span class="size-1.5 bg-gray-400 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-600"></span>
                        <span class="size-1.5 bg-gray-400 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-600"></span>
                    </span>
            </div>
            <!-- End Loading Indicator -->
        </div>
        <!-- End Col -->

        <div class="flex-shrink-0">
            <div class="lg:w-80">
                <div class="relative z-1 bg-white dark:bg-neutral-800">
                    <div class="p-4">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg min-h-[150px] text-white p-4">
                            <div class="mb-2">
                                <h3 class="text-lg font-normal">Total Scan</h3>
                            </div>
                            <div class="text-4xl font-bold mb-2 flex items-baseline">
                                <h1>111</h1>
                                <div class="flex items-center gap-2 text-teal-100 ml-2">
                                    <span class="text-sm">pax</span>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-xs text-teal-100 mt-2">Last updated: 18.01.33</div>
                        </div>

                        <div class="mt-5 border-t border-gray-200 dark:border-neutral-700">
                            <div class="py-3 flex items-center justify-between relative">
                                <h2 class="font-medium text-sm text-gray-800 dark:text-neutral-200">Activity Log</h2>

                                <!-- Button -->
                                <div class="absolute top-1/2 end-0 -translate-y-1/2">
                                    <button type="button" class="group size-7 lg:size-auto lg:py-1.5 lg:px-2 flex items-center justify-center border border-gray-200 text-gray-600 text-xs rounded-full py-1 hover:bg-indigo-50 hover:border-indigo-100 hover:text-indigo-700 focus:outline-none focus:bg-indigo-50 focus:border-indigo-100 focus:text-indigo-700 dark:text-neutral-200 dark:border-neutral-700 dark:hover:bg-indigo-500/20 dark:hover:border-indigo-500/20 dark:hover:text-indigo-400 dark:focus:bg-indigo-500/20 dark:focus:border-indigo-500/20 dark:focus:text-indigo-400">
                                            <span class="lg:block hidden max-w-0 overflow-hidden whitespace-nowrap opacity-0 transition-all duration-300 group-hover:me-1 group-hover:max-w-25 group-hover:opacity-100 group-focus:me-1 group-focus:max-w-25 group-focus:opacity-100">
                                            View all
                                            </span>
                                        <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M15 3h6v6" />
                                            <path d="m21 3-7 7" />
                                            <path d="m3 21 7-7" />
                                            <path d="M9 21H3v-6" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- End Button -->
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-neutral-700 rounded-lg">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-800 dark:text-neutral-300">Scan Completed</div>
                                        <div class="text-sm text-gray-600 dark:text-neutral-400">Portion B scanned for Line 2</div>
                                        <div class="text-xs text-gray-500 dark:text-neutral-500">17.56</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-neutral-700 rounded-lg">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-800 dark:text-neutral-300">Queue Updated</div>
                                        <div class="text-sm text-gray-600 dark:text-neutral-400">Line 1 count increased to 49</div>
                                        <div class="text-xs text-gray-500 dark:text-neutral-500">17.51</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-neutral-700 rounded-lg">
                                    <div class="w-2 h-2 bg-gray-500 rounded-full mt-2"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-800 dark:text-neutral-300">System Check</div>
                                        <div class="text-sm text-gray-600 dark:text-neutral-400">All systems operational</div>
                                        <div class="text-xs text-gray-500 dark:text-neutral-500">17.46</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Group -->
            </div>
        </div>
        <!-- End Col -->
    </div>
</div>

@script
<script>
    setInterval(() => {
        document.getElementById('qrcode-input').focus()
    }, 500);

    document.getElementById('qrcode-input').addEventListener('change', function () {
        alert('Test')
    })
</script>
@endscript
