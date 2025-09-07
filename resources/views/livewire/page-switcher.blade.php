<!-- Content -->
<div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
    <!-- Header -->
    <div class="py-3 px-4 flex flex-wrap justify-between items-center gap-2 bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
        <div>
            <h1 class="font-medium text-lg text-gray-800 dark:text-neutral-200">
                {{ $title ?? '' }}
            </h1>
        </div>
    </div>
    <!-- End Header -->

    <div class="flex-1 flex flex-col overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        @switch($currentPage)
            @case('dashboard')
                <div wire:key="1">
                    <livewire:dashboard title="Dashboard" />
                </div>
                @break

            @case('academy')
                <div wire:key="2">
                    <livewire:academy.index />
                </div>
                @break

            @case('academy.create')
                <div wire:key="3">
                    <livewire:academy.create />
                </div>
                @break

            @default
                <p>Page not found.</p>
        @endswitch
    </div>
</div>
<!-- End Content -->
