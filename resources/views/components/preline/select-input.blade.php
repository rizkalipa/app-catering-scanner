@props(['name', 'options' => [], 'value' => '', 'placeholder' => ''])

<select
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    {{ $attributes->merge(['class' => 'py-1.5 sm:py-2 px-3 pe-11 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600']) }}
    placeholder="{{ $placeholder }}"
>
    <option value=""></option>
    @foreach($options as $option)
        <option value="{{ $option['value'] }}" {{ $option['value'] == $value ? 'selected' : '' }}>{{ $option['label'] }}</option>
    @endforeach
</select>

@error($name)
<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
@enderror
