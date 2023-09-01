@props(['placement' => 'left-end'])

<div>
    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" data-dropdown-placement="{{ $placement }}"
        class="inline-flex items-center p-1 min-[425px]:p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-transparent dark:hover:bg-gray-800 dark:focus:ring-gray-600"
        type="button">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
            <path
                d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdownDots"
        class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gradient-to-tl dark:from-cyan-950 dark:via-black dark:to-cyan-950 border border-gray-300 dark:border-gray-700">
        {{ $contents }}
    </div>
</div>
