@props(['headers' => []])

<table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
    <thead class="bg-gray-50 dark:bg-neutral-800">
    <tr>
        @foreach($headers as $item)
            <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                        {{ $item }}
                    </span>
                </div>
            </th>
        @endforeach
    </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
        {{ $slot }}
    </tbody>
</table>
