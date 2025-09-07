@props(['columns' => [], 'class' => ''])

<tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
    @foreach($columns as $item)
        <td class="size-px whitespace-nowrap align-top px-6 py-7">
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                {!! $item !!}
            </span>
        </td>
    @endforeach
</tr>
