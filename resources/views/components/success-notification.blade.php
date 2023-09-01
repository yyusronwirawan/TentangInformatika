@props(['status'])

@if ($status)
    <div id="marketing-banner" tabindex="-1" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 4000)"
        class="fixed z-50 flex flex-col md:flex-row justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-black border border-gray-100 rounded-lg shadow-sm lg:max-w-3xl left-1/2 bottom-6 dark:border-gray-600 dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950">
        <div class="flex justify-between items-center w-full ">
            <p class="flex items-center text-sm font-normal text-gray-200 dark:text-gray-400">
                <svg class="w-7 h-7 text-green-500 mr-2 font-medium" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                    </path>
                </svg>
                <span class="font-medium">{{ $status }}.</span>
            </p>
            <button data-dismiss-target="#marketing-banner" type="button"
                class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-green-400 hover:text-red-500 rounded-lg text-sm  dark:hover:bg-gray-600 dark:hover:text-white">
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
