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
                    <div class="bg-white overflow-hidden border-b border-b-gray-200 dark:bg-neutral-900 dark:bg-neutral-900 dark:border-neutral-700 rounded-xl">
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
                                    Sekolah
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Tambah data sekolah baru.
                                </p>
                            </div>

                            <!-- Grid -->
                            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                                <div class="sm:col-span-3">
                                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Foto
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <div class="flex items-center gap-5">
                                        <img class="inline-block size-16 rounded-full ring-2 ring-white dark:ring-neutral-900" src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">
                                        <div class="flex gap-x-2">
                                            <div>
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                                                    Upload Gambar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Nama Sekolah
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <div class="sm:col-span-9">
                                        <x-preline.text-input wire:model="name" name="name" placeholder="Nama Sekolah" />
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Email
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <x-preline.text-input  wire:model="email" name="email" placeholder="Email" type="email" />
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <div class="inline-block">
                                        <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            No. Telpon
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Opsional)</span>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <div class="sm:flex">
                                        <x-preline.text-input-group
                                            wire:model="phone"
                                            name="academy-phone"
                                            type="number"
                                            placeholder="No. Telpon"
                                        />
                                        <select class="py-1.5 sm:py-2 px-3 pe-9 block w-full sm:w-auto border border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option selected>Mobile</option>
                                            <option>Home</option>
                                            <option>Work</option>
                                            <option>Fax</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="total-pax" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Jumlah Pax
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <x-preline.text-input wire:model="totalPax" name="total-pax" placeholder="Jumlah Pax" type="number" />
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Keterangan
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <x-preline.text-area wire:model="notes" name="keterangan" placeholder="Keterangan" />
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->
                        </div>
                        <!-- End Card -->
                    </div>

                    <!-- Footer -->
                    <div class="bg-gray-50 dark:bg-transparent px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center">
                        <div>
                            <div class="inline-flex gap-x-2">
                                <a href="{{ route('academy.index') }}" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
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
                                    Simpan Data
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
