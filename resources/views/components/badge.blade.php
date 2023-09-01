@props(['type' => 'operator', 'title' => 'badge'])

@php
    $classes = match ($type) {
        'operator' => 'dark:text-yellow-300 border-yellow-300 bg-yellow-100 text-yellow-800',
        'registrant' => 'dark:text-green-300 border-green-300 bg-green-100 text-green-800',
        'schedule' => 'dark:text-indigo-300 border-indigo-300 bg-indigo-100 text-indigo-800',
    };
@endphp

<span
    {{ $attributes->merge(['class' => "$classes text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-gray-700 select-none border"]) }}>
    {{ $title }}
</span>
