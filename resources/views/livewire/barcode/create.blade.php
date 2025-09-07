<div class="">
    @if (session()->has('error'))
        <div class="alert alert-danger mb-4">
            {{ session('error') }}
        </div>
    @endif


    <form wire:submit.prevent="submitForm">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="min-h-[calc(100dvh-145px)] bg-white overflow-y-auto border-b border-b-gray-200 dark:bg-neutral-900 dark:bg-neutral-900 dark:border-neutral-700 rounded-xl">
                        @if ($successMessage)
                            <div class="p-2">
                                <div class="bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert" tabindex="-1" aria-labelledby="hs-link-on-right-label">
                                    <div class="flex">
                                        <div class="shrink-0">
                                            <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1 md:flex md:justify-between ms-2">
                                            <p id="hs-link-on-right-label" class="text-sm">
                                                {{ $successMessage }}
                                            </p>
                                            <p class="text-sm mt-3 md:mt-0 md:ms-6">
                                                <a class="text-teal-800 hover:text-teal-500 focus:outline-hidden focus:text-teal-500 font-medium whitespace-nowrap dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="#">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="p-2 sm:p-7 dark:bg-neutral-900">
                            <div class="mb-8">
                                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                    Barcode
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Generate data barcode baru.
                                </p>
                            </div>

                            <!-- Grid -->
                            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 mb-5">
                                <div class="sm:col-span-3">
                                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Sekolah
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <div class="sm:col-span-9">
                                        <x-preline.select-input wire:model="academyId" :options="$academies" name="academyId" />
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="total-barcode" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Jumlah Barcode
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <x-preline.text-input wire:model="totalBarcode" name="totalBarcode" placeholder="Jumlah Barcode" type="number" />

                                    <button
                                        type="button"
                                        wire:click="previewBarcode"
                                        wire:loading.attr="disabled"
                                        class="py-2 px-8 cursor-pointer mt-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    >
                                        <svg class="shrink-0 size-4 group-hover:scale-115 group-focus:scale-115 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/>
                                        </svg>
                                        Preview
                                    </button>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->

                            <div class="relative h-32">
                                @if($dataPreviewBarcode)
                                    <x-preline.table wire:transition.in.opacity.duration.500ms :headers="$headers">
                                        @foreach($rows as $item)
                                            <x-preline.table-row :columns="$item" />
                                        @endforeach
                                    </x-preline.table>
                                @endif

                                <div wire:loading.flex class="absolute inset-0 bg-white/10 dark:bg-neutral-900 opacity-60 flex items-center justify-center">
                                    <div class="h-8 flex flex-col justify-center items-center text-center">
                                            <span class="inline-flex gap-x-1">
                                                <span class="size-3 bg-gray-400 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-600"></span>
                                                <span class="size-3 bg-gray-400 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-600"></span>
                                                <span class="size-3 bg-gray-400 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-600"></span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>

                    <!-- Footer -->
                    <div class="bg-gray-50 dark:bg-transparent px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center">
                        <div>
                            <div class="inline-flex gap-x-2">
                                <a href="{{ route('barcode.index') }}" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    Kembali
                                </a>
                                <button
                                    wire:loading.attr="disabled"
                                    wire:target="submitForm"
                                    wire:loading.remove.flex
                                    type="submit"
                                    class="py-2 px-3 text-sm flex gap-2 items-center font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 size-4"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/><path d="m21.854 2.147-10.94 10.939"/></svg>
                                    Generate
                                </button>

                                <button
                                    wire:loading.flex
                                    wire:target="submitForm"
                                    class="py-2 px-3 text-sm flex gap-2 items-center font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    disabled
                                >
                                    <svg class="animate-spin shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Menyimpan...
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
        <!-- End Card -->
    </form>
</div>
