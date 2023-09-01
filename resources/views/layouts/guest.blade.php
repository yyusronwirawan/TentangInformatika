<x-base-layouts>
    <main class="font-sans text-gray-900">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-black">
            @isset($header)
                {{ $header }}
            @endisset
            {{ $slot }}
        </div>

        @if (Request::routeIs('home'))
            @guest
                {{-- <x-guest-announcements title="This application is still on Alpha-Test" /> --}}
                <x-guest-announcements title="Prepare your self, our registration is coming on 2024." />
            @endguest
        @endif
    </main>
</x-base-layouts>
