<header id="nav" class="absolute bg-transparent top-0 left-0 w-full flex items-center z-[39]">
    <div class="@if (Request::routeIs('home')) container @else w-full px-3 sm:px-6 @endif">
        <div class="flex items-center justify-between relative">
            {{-- Logo --}}
            <div class="flex items-center">
                <div class="py-7">
                    <x-application-logo class="w-auto h-[1.35rem] text-black dark:text-white" />
                </div>
            </div>
            {{-- /Logo --}}

            <div class="flex items-center">
                {{-- Dekstop Menu --}}
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white dark:bg-black dark:lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full -right-1 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none z-50 border border-gray-300 lg:border-none dark:border-gray-700 ">
                    <ul class="block lg:flex">
                        <x-primary-nav-link href="{{ Request::routeIs('home') ? '/#home' : route('home') }}"
                            value="home" />
                        <x-primary-nav-link href="/#lessons" value="lessons" />
                        <x-primary-nav-link href="/#devision" value="devisions" />
                        <x-primary-nav-link href="/#events" value="events" />
                        <x-primary-nav-link href="/#galleries" value="galleries" />
                        {{-- Dekstop Dropdown Menu --}}
                        @auth
                            @include('navigation.partials.dekstop-dropdown-menu')
                        @else
                            <li class="flex mt-2 lg:mt-0 lg:items-center">
                                <a href="{{ route('login') }}"
                                    class="text-base w-full text-center text-white py-1 lg:py-2 mx-4 lg:mx-3 xl:mx-4 font-bold bg-gradient-to-bl from-black via-emerald-700 to-black 
                                    dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 dark:border dark:border-gray-700 px-4 rounded-md hover:bg-green-500">
                                    Login
                                </a>
                            </li>
                        @endauth
                        {{-- /Dekstop Dropdown Menu --}}
                    </ul>
                </nav>
                {{-- /Dekstop Menu --}}

                {{-- Smartphone Menu --}}
                @auth
                    <div class="lg:hidden">
                        @include('navigation.partials.side-navigation')
                    </div>
                @else
                    <div class="lg:hidden">
                        @include('navigation.partials.smartphone-dropdown-menu')
                    </div>
                @endauth
                {{-- /Smartphone Menu --}}
            </div>
        </div>
    </div>
</header>
