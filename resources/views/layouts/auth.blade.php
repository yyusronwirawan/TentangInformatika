<x-base-layouts>
    <main class="font-sans">
        <div class="min-h-screen bg-white dark:bg-black">
            {{-- Navigation --}}
            {{-- @include('home.partials.navigation') --}}
            @include('navigation.navigation')

            <div class="pt-20">
                {{-- Sidebar --}}
                <x-sidebar />

                <div class="p-4 lg:ml-64 lg:mr-5 rounded-lg">
                    <main>
                        {{ $slot }}
                    </main>
                    <x-success-notification :status="session('status')" />
                    <x-success-notification :status="session('status-success')" />
                    <x-failed-notification :status="session('status-failed')" />
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/datepicker.min.js"></script>
        <script>
            window.onscroll = function() {
                const header = document.querySelector("header");
                const nav = document.querySelector("nav");
                const fixedNav = header.offsetTop;

                if (window.pageYOffset > fixedNav) {
                    header.classList.add("nav-fixed");
                    nav.classList.add("transparent-nav");
                } else {
                    header.classList.remove("nav-fixed");
                    nav.classList.remove("transparent-nav");
                }
            };
        </script>
    </main>
</x-base-layouts>
