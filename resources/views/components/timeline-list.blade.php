@props(['active'])

@php
    $classes = $active ?? false ? 'absolute w-3 h-3 bg-green-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-green-900 dark:bg-green-400' : 'absolute w-3 h-3 bg-gray-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700';
    
    $classes2 = $active ?? false ? 'text-lg font-semibold text-green-400 ' : 'text-lg font-semibold text-gray-400 dark:text-gray-300';
@endphp

<li class="mb-10 ml-4">
    <div {{ $attributes->merge(['class' => $classes]) }}>
    </div>
    <time class="mb-1 text-xs font-normal leading-none text-gray-400 dark:text-gray-500">
        {{ $time }}
    </time>
    <h3 {{ $attributes->merge(['class' => $classes2]) }}>
        {{ $title }}
    </h3>
    <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
        {{ $body }}
    </p>
</li>
