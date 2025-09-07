@props(['name', 'rows' => 6, 'type' => 'text', 'value' => '', 'placeholder' => ''])

<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    class="py-1.5 sm:py-2 px-3 block w-full border border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
    rows="{{ $rows }}"
    placeholder="{{ $placeholder }}">{{ $value }}</textarea>

@error($name)
<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
@enderror
