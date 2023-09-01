@props(['heading' => 'accordion-heading-1', 'body' => 'accordion-body-1', 'class'])

@php
    $classes = 'py-5 border-b border-gray-200 dark:border-gray-700';
@endphp

<div {{ $attributes->merge(['class' => 'hidden']) }} id="{{ $body }}" aria-labelledby="{{ $heading }}">
    <div class="{{ $class ?? $classes }}">
        {{ $slot }}
    </div>
</div>
