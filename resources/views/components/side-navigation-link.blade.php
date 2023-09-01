@props(['mode'])

@php
    $classes = $mode ?? false ? 'flex items-center py-1 text-gray-800 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 group' : 'flex items-center gap-x-1 px-4 py-2 text-gray-800 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
