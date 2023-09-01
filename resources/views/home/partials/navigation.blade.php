{{-- <header id="nav" class="bg-transparent absolute top-0 left-0 w-full flex items-center z-[39]">
    <div class="
    @if (Request::routeIs('home')) container @else w-full px-3 sm:px-6 @endif">
        <div class="flex items-center justify-between relative">
            <div class="flex items-center">
                @if (!Request::routeIs('home'))
                    <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
                        aria-controls="separator-sidebar" type="button"
                        class="mr-1 inline-flex items-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                @endif
                <div class="py-6">
                    @if (Request::routeIs('home'))
                        <a href="{{ route('home') }}" class="font-bold text-xl dark:text-white">
                            Study Club <span class="text-primary">Informatika</span>
                        </a>
                    @else
                        <p class="font-bold text-xl select-none dark:text-white">
                            Study Club <span class="text-primary">Informatika</span>
                        </p>
                    @endif
                </div>
            </div>
            <div class="flex items-center">
                <button id="hamburger" name="hamburger" type="button" class="block absolute -right-1 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-8 h-8 text-gray-500" aria-hidden="true" fill="currentColor" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white dark:bg-black dark:lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full -right-1 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none z-50 border border-gray-300 lg:border-none dark:border-gray-700 ">
                    <ul class="block lg:flex">
                        @auth
                            @role('admin')
                                <li
                                    class="lg:hidden flex items-center text-base text-gray-800 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium  font-bold dark:text-gray-200">
                                    {{ auth()->user()->getNickname() }}
                                    <x-verified-icon type="admin" />
                                </li>
                            @endrole
                            @role('operator')
                                <li
                                    class="lg:hidden flex items-center text-base text-gray-800 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium  font-bold dark:text-gray-200">
                                    {{ auth()->user()->getNickname() }}
                                    <x-verified-icon type="operator" />
                                </li>
                            @endrole
                            @unlessrole(['operator', 'admin'])
                                @if (auth()->user()->has_verified == 1)
                                    <li
                                        class="lg:hidden flex items-center text-base text-gray-800 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium  font-bold dark:text-gray-200">
                                        {{ auth()->user()->getNickname() }}
                                        <x-verified-icon type="registrant" />
                                    </li>
                                @else
                                    <li class="group">
                                        <span
                                            class="lg:hidden text-base text-gray-800 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium  font-bold dark:text-gray-200">{{ auth()->user()->getNickname() }}</span>
                                    </li>
                                @endif
                            @endunlessrole
                            <li class="group">
                                <span
                                    class="lg:hidden text-sm text-gray-600 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium dark:text-gray-400">{{ auth()->user()->email }}</span>
                            </li>
                            <div class="lg:hidden border-b border-gray-300 dark:border-gray-700  mt-2"></div>
                        @endauth
                        <li class="group flex">
                            <a href="{{ Request::routeIs('home') ? '/#home' : route('home') }}"
                                class="text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200">Home</a>
                        </li>
                        <li class="group flex">
                            <a href="{{ Request::routeIs('home') ? '#lessons' : route('home', '#lessons') }}"
                                class="text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200 ">Lessons</a>
                        </li>
                        <li class="group flex">
                            <a href="{{ Request::routeIs('home') ? '#devision' : route('home', '#devision') }}"
                                class="text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200">Devision</a>
                        </li>
                        <li class="group flex">
                            <a href="{{ Request::routeIs('home') ? '#events' : route('home', '#events') }}"
                                class="text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200">Events</a>
                        </li>
                        <li class="group flex">
                            <a href="{{ Request::routeIs('home') ? '#galleries' : route('home', '#galleries') }}"
                                class="text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200">Gallery</a>
                        </li>
                        @auth
                            <div class="hidden sm:flex sm:items-center ">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center text-base text-primary mx-4 lg:mx-3 xl:mx-4 lg:font-medium hover:text-dark dark:hover:text-gray-200 font-bold">
                                            <div>
                                                @role('admin')
                                                    <span class="flex items-center text-gray-800 dark:text-gray-200">
                                                        {{ auth()->user()->getNickname() }}
                                                        <x-verified-icon type="admin" />
                                                    </span>
                                                @endrole
                                                @role('operator')
                                                    <span class="flex items-center text-gray-800 dark:text-gray-200">
                                                        {{ auth()->user()->getNickname() }}
                                                        <x-verified-icon type="operator" />
                                                    </span>
                                                @endrole
                                                @unlessrole(['operator', 'admin'])
                                                    @if (auth()->user()->has_verified == 1)
                                                        <span class="flex items-center text-gray-800 dark:text-gray-200">
                                                            {{ auth()->user()->getNickname() }}
                                                            <x-verified-icon type="registrant" />
                                                        </span>
                                                    @else
                                                        {{ auth()->user()->getNickname() }}
                                                    @endif
                                                @endunlessrole
                                            </div>
                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        @if (Request::routeIs('home'))
                                            <x-dropdown-link :href="route('dashboard')">
                                                {{ __(Str::title('dashboard')) }}
                                            </x-dropdown-link>
                                        @else
                                            <x-dropdown-link :href="route('home')">
                                                {{ __(Str::title('home')) }}
                                            </x-dropdown-link>
                                        @endif
                                        <x-dropdown-link :href="route('biodata.index')">
                                            {{ __(Str::title('biodata')) }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __(Str::title('security')) }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('tutorial.index')">
                                            {{ __(Str::title('tutorial')) }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('help.index')">
                                            {{ __(Str::title('help')) }}
                                        </x-dropdown-link>
                                        <!-- Authentication -->
                                        <div class="hidden lg:block border-b border-gray-300 dark:border-gray-700 mt-2">
                                        </div>
                                        <div class="flex gap-1 justify-between items-center">
                                            <div class="w-full">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-dropdown-link :href="route('logout')" class="mt-1"
                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __(Str::title('logout')) }}
                                                    </x-dropdown-link>
                                                </form>
                                            </div>
                                            <div class="hover:bg-gray-100  mt-1">
                                                <button id="theme-toggle" type="button"
                                                    class="text-yellow-400 dark:text-cyan-500 rounded-lg text-sm p-2.5 mr-2 w-auto">
                                                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                                        </path>
                                                    </svg>
                                                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                            fill-rule="evenodd" clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                            <div class="lg:hidden border-b border-gray-300 dark:border-gray-700  mb-2"></div>
                            <div class="block sm:hidden">
                                <div class="flex group ">
                                    <a href="{{ route('dashboard') }}"
                                        class="text-sm w-full text-gray-700 py-1 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200">Dashboard</a>
                                </div>
                                <div class="flex items-center justify-between gap-1">
                                    <div class="w-full">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class=" block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out"
                                                href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __(Str::title('logout')) }}
                                            </a>
                                        </form>
                                    </div>
                                    <div class="hover:bg-gray-100  mt-1">
                                        <button id="responsive-theme-toggle" type="button"
                                            class="text-yellow-400 dark:text-cyan-500 rounded-lg text-sm p-2.5 mr-2 w-auto">
                                            <svg id="responsive-theme-toggle-light-icon" class="hidden w-5 h-5"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                                </path>
                                            </svg>
                                            <svg id="responsive-theme-toggle-dark-icon" class="hidden w-5 h-5"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <li class="flex mt-2 lg:mt-0 lg:items-center">
                                <a href="{{ route('login') }}"
                                    class="text-base w-full text-center text-white py-1 lg:py-2 mx-4 lg:mx-3 xl:mx-4 font-bold bg-gradient-to-bl from-black via-emerald-700 to-black 
                                    dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 dark:border dark:border-gray-700 px-4 rounded-md hover:bg-green-500">
                                    Login
                                </a>
                            </li>
                        @endauth
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</header> --}}
