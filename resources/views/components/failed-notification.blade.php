@props(['status'])

@if ($status)
    <div id="marketing-banner" tabindex="-1" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 4000)"
        class="fixed z-50 flex flex-col md:flex-row justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-black border border-gray-100 rounded-lg shadow-sm lg:max-w-3xl left-1/2 bottom-6 dark:bg-gray-700 dark:border-gray-600 dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 ">
        <div class="flex justify-between items-center w-full ">
            <p class="flex items-center text-sm font-normal text-gray-200 dark:text-gray-400">
                <svg class="w-7 h-7 text-red-500 mr-2 font-medium" fill="none" stroke="currentColor" stroke-width="1.8"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="font-medium">{{ $status }}.</span>
            </p>
            <button data-dismiss-target="#marketing-banner" type="button"
                class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-red-500 hover:text-red-800 rounded-lg text-sm  dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close banner</span>
            </button>
        </div>
    </div>
@endif
