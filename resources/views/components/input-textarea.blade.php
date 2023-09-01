@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'disabled:text-gray-500 form-textarea w-full border-none ring-1 focus:ring-2 rounded-md ring-gray-300 focus:ring-green-500 text-sm placeholder:text-sm dark:bg-black dark:text-gray-300 dark:ring-gray-600 dark:focus:ring-green-600 placeholder:text-gray-400 disabled:text-gray-500 dark:placeholder:text-slate-600',
]) !!}>
{{ $slot }}</textarea>
