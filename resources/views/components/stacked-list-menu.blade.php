@props(['id' => 'stacked-list-menu-1', 'data' => 'data-stacked-list-menu-1', 'placement' => 'bottom-end', 'type' => 'yellow', 'title' => 'Operator'])

<div class="flex items-center gap-x-2">
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <x-badge :type="$type" :title="$title" />
    </div>
    <div>
        <button id="{{ $id }}" data-dropdown-toggle="{{ $data }}"
            data-dropdown-placement="{{ $placement }}"
            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-2 focus:outline-none dark:text-gray-200 focus:ring-gray-50 dark:bg-transparent dark:hover:bg-gray-900/50 dark:focus:ring-gray-600 mr-1"
            type="button">
            <x-svg class="w-6 h-6 text-slate-800 dark:text-slate-400" svg="stacked-list" fill="none" strokeWidth="1.5"
                stroke="currentColor" />

        </button>
        <div id="{{ $data }}"
            class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gradient-to-tl dark:from-cyan-950 dark:via-black dark:to-cyan-950 border border-gray-200 dark:border-gray-700 ">
            {{ $slot }}
        </div>
    </div>
</div>
