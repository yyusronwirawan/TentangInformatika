@props(['title', 'description'])

<div class="group">
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ $title }}
    </h2>
    <span {{ $attributes->merge(['class' => 'text-sm text-gray-600 dark:text-gray-400']) }}>
        {{ $header }}
        @isset($body)
            <button data-popover-target="popover-description-{{ $description }}" data-popover-placement="bottom-end"
                type="button"><svg
                    class="w-4 h-4 -ml-1 text-yellow-400 hover:text-yellow-500 animate-bounce group-hover:animate-none"
                    aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                        clip-rule="evenodd"></path>
                </svg><span class="sr-only">Show information</span>
            </button>
            <div data-popover id="popover-description-{{ $description }}" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-black dark:border-gray-700 dark:text-gray-400">
                <div class="p-3 space-y-2">
                    {{ $body }}
                </div>
                <div data-popper-arrow></div>
            </div>
        @endisset
    </span>
</div>
