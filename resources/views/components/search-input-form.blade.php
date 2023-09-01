@props(['route', 'placeholder' => 'Search'])

<form class="flex items-center"method="GET">
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <x-svg class="w-4 h-4 text-gray-500 dark:text-gray-400" svg="search" strokeWidth="1.5" stroke="currentColor"
                viewBox="0 0 20 20" />
        </div>
        <x-input-text-search :placeholder="$placeholder" />
    </div>
    @if (request()->keyword)
        <x-cancel-search-button href="{{ $route }}" />
    @else
        <x-search-button />
    @endif
</form>
