@props(['active', 'mark', 'svg'])

@php
    $classes = $active ?? false ? 'flex items-center p-2 text-dark rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 bg-slate-200/70 dark:bg-slate-200/20' : 'flex items-center p-2 text-dark rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <x-svg class="w-6 h-6 text-slate-800 dark:text-slate-400" svg="{{ $svg }}" fill="none" strokeWidth="1.5"
            stroke="currentColor" />
        <span class="flex-1 ml-3 whitespace-nowrap capitalize">{{ $slot }}</span>
        @isset($mark)
            <span class="inline-flex items-center justify-center ml-3 text-sm font-medium">
                {{ $mark }}
            </span>
        @endisset
    </a>
</li>
