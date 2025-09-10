@props(['type' => 'info', 'actionUrl' => '', 'actionLabel' => ''])

@if($type === 'success')
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
                        {{ $slot }}
                    </p>
                    <p class="text-sm mt-3 md:mt-0 md:ms-6">
                        <a class="text-teal-800 hover:text-teal-500 focus:outline-hidden focus:text-teal-500 font-medium whitespace-nowrap dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="{{ $actionUrl }}">
                            {{ $actionLabel }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@elseif ($type === 'danger')
    <div class="p-2">
        <div class="bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500" role="alert" tabindex="-1" aria-labelledby="hs-link-on-right-label">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="m15 9-6 6"></path>
                        <path d="m9 9 6 6"></path>
                    </svg>
                </div>
                <div class="flex-1 md:flex md:justify-between ms-2">
                    <p id="hs-link-on-right-label" class="text-sm">
                        {{ $slot }}
                    </p>
                    <p class="text-sm mt-3 md:mt-0 md:ms-6">
                        <a class="text-red-800 hover:text-red-500 focus:outline-hidden focus:text-red-500 font-medium whitespace-nowrap dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="{{ $actionUrl }}">
                            {{ $actionLabel }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="p-2">
        <div class="bg-gray-50 border border-gray-200 text-sm text-gray-800 rounded-lg p-4 dark:bg-white/10 dark:border-white/10 dark:text-neutral-500" role="alert" tabindex="-1" aria-labelledby="hs-link-on-right-label">
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
                        {{ $slot }}
                    </p>
                    <p class="text-sm mt-3 md:mt-0 md:ms-6">
                        <a class="text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 font-medium whitespace-nowrap dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="{{ $actionUrl }}">
                            {{ $actionLabel }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
