@props(['title'])

<div id="marketing-banner" tabindex="-1" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 120000)"
    class="fixed z-50 flex flex-col md:flex-row justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-gradient-to-bl from-black via-indigo-950 to-black border border-gray-600 rounded-lg shadow-sm md:max-w-2xl left-1/2 bottom-6 dark:border-gray-600   dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950">
    <div class="flex justify-between items-center w-full">
        <p class="flex items-center text-xs md:text-sm font-medium text-gray-200 dark:text-gray-400">
            <svg class="w-7 h-7 text-green-500 mr-2 " fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46">
                </path>
            </svg>
            <span class="">{{ $title }}</span>
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
