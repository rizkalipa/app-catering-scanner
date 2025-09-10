@props(['name', 'type' => 'text', 'value' => '', 'placeholder' => ''])

<input
    name="{{ $name }}"
    class="hs-datepicker py-3 px-4 block w-full border border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 dark:focus:border-blue-500 dark:focus:ring-neutral-500"
    type="text"
    placeholder="{{ $placeholder }}"
    readonly=""
    value="{{ old($name, $value) }}"
    data-hs-datepicker='{
        "type": "default",
        "dateMax": "2050-12-31",
        "mode": "custom-select",
        "templates": {
            "arrowPrev": "<button data-vc-arrow=\"prev\"><svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m15 18-6-6 6-6\"></path></svg></button>",
            "arrowNext": "<button data-vc-arrow=\"next\"><svg class=\"shrink-0 size-4\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m9 18 6-6-6-6\"></path></svg></button>"
        }
    }'
>

@error($name)
<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
@enderror
