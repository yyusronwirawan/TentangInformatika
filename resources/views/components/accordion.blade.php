@props(['name' => 'accordion'])
<div id="{{ $name }}" data-accordion="collapse"
    data-active-classes="bg-white dark:bg-transparent text-gray-900 dark:text-white"
    data-inactive-classes="text-gray-500 dark:text-gray-300">
    {{ $slot }}
</div>
