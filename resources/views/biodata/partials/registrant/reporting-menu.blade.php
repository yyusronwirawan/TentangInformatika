@php
    $code = mt_rand(1, 999999);
@endphp
<ul class="py-2 text-sm text-gray-700 dark:text-gray-200 space-y-2" aria-labelledby="dropdownMenuIconButton">
    <li class="px-3 space-y-1">
        <p class="text-xs lg:text-sm">
            Here's some tutorial for download biodata, in case you need!
        </p>
        <x-primary-link class="w-full text-center justify-center " href="{{ route('tutorial.index') }}">
            Tutorial
        </x-primary-link>
    </li>

    <li class="px-3 space-y-1">
        <x-primary-link class="w-full text-center justify-center" href="{{ route('biodata.export.preview', $user) }}"
            target="_blank" rel="noopener noreferrer">
            <x-svg class="w-6 h-6 mr-1" svg="pdf" strokeWidth="1.5" stroke="currentColor" />
            Preview
        </x-primary-link>
    </li>
</ul>
