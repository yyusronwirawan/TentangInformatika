<x-guest-layout>
    <div class="w-full bg-white dark:bg-gray-900">

        {{-- @include('home.partials.navigation') --}}
        @include('navigation.navigation')

        <div
            class="bg-gradient-to-t from-white via-green-100 to-white 
            dark:bg-gradient-to-t dark:from-black dark:via-teal-950 dark:to-black">
            @include('home.partials.header')
        </div>

        <div class="dark:bg-black">
            @include('home.partials.about')
        </div>

        <div class="dark:bg-black">
            @include('home.partials.lessons')
        </div>

        <div class="dark:bg-black">
            @include('home.partials.devision')
        </div>

        <div class="bg-white dark:bg-black">
            @include('home.partials.events')
        </div>

        <div class="dark:bg-black">
            @include('home.partials.gallery')
        </div>

        @include('home.partials.footer')

    </div>

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
</x-guest-layout>
