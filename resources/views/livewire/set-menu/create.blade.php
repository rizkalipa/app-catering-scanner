<div class="">
    @if (session()->has('error'))
        <div class="alert alert-danger mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="submitForm" autocomplete="off">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="min-h-[calc(100dvh-145px)] bg-white border-b border-b-gray-200 dark:bg-neutral-900 dark:bg-neutral-900 dark:border-neutral-700 rounded-xl">
                        @if ($notification)
                            <x-preline.alert-notification :type="$notification->type">
                                {{ $notification->message }}
                            </x-preline.alert-notification>
                        @endif

                        <div class="p-2 sm:p-7 dark:bg-neutral-900">
                            <div class="mb-8">
                                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                    Set Menu
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Tambah data set menu baru.
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
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}"
                                                 alt="Preview"
                                                 class="max-h-32 h-full object-cover">
                                        @else
                                            <img class="inline-block size-16 rounded-full ring-2 ring-white dark:ring-neutral-900" src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">
                                        @endif

                                        <div class="flex gap-x-2">
                                            <div>
                                                <button id="btn-upload" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                                                    Upload Gambar
                                                </button>
                                                <input type="file" wire:model="image" id="image" name="image" class="hidden" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Nama
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <div class="sm:col-span-9">
                                        <x-preline.text-input wire:model="name" name="name" placeholder="Nama Menu" />
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Pilihan Menu
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <x-preline.select-multiple-input
                                        wire:model="selectedMenu"
                                        :options="$menuOptions"
                                        name="selectedMenu"
                                        placeholder="Pilihan Menu"
                                    />
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="useDate" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Tgl. Digunakan
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <x-preline.date-input
                                        wire:model="date"
                                        name="date"
                                        placeholder="Tgl. Digunakan"
                                    />
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
                                <a href="{{ route('setMenu.index') }}" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    Kembali
                                </a>
                                @if(!$isCreated)
                                    <button
                                        wire:loading.attr="disabled"
                                        wire:target="submitForm"
                                        wire:loading.remove.flex
                                        id="btn-submit"
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
                                @endif
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

@script
    <script>
        document.getElementById('btn-upload').addEventListener('click', function () {
            document.getElementById('image').click()
        })

        document.addEventListener('post-submit', function () {
            setTimeout(() => {
                if (typeof HSToggle !== 'undefined') {
                    HSToggle.autoInit();
                }
                if (typeof HSSelect !== 'undefined') {
                    HSSelect.autoInit();
                }
            }, 100);
        })
    </script>
@endscript
