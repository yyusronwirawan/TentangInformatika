<li class="group flex">
    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" data-dropdown-offset-distance="0"
        data-dropdown-offset-skidding="-95"
        class="flex items-center text-sm lg:text-base w-full text-gray-700 py-2 mx-0 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200"
        type="button">
        <span class="sr-only">Open user menu</span>
        <x-svg strokeWidth="1.2" stroke="currentColor" class="w-8 h-8" svg="menu-side" />
    </button>
</li>
<div id="dropdownAvatarName"
    class="z-10 hidden bg-white border border-gray-200 dark:border-gray-700 divide-y divide-gray-200 rounded-lg shadow w-52 dark:bg-black dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 space-y-2" aria-labelledby="dropdownAvatarNameButton">
        <li>
            <x-smartphone-dropdown-link href="{{ Request::routeIs('home') ? '/#home' : route('home') }}">
                <x-svg class="w-5 h-5" svg="home" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Home
            </x-smartphone-dropdown-link>
        </li>
        <li>
            <x-smartphone-dropdown-link href="/#lessons">
                <x-svg class="w-5 h-5" svg="lessons" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Lessons
            </x-smartphone-dropdown-link>
        </li>
        <li>
            <x-smartphone-dropdown-link href="/#devision">
                <x-svg class="w-5 h-5" svg="devisions" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Devision
            </x-smartphone-dropdown-link>
        </li>
        <li>
            <x-smartphone-dropdown-link href="/#events">
                <x-svg class="w-5 h-5" svg="events" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Events
            </x-smartphone-dropdown-link>
        </li>
        <li>
            <x-smartphone-dropdown-link href="/#galleries">
                <x-svg class="w-5 h-5" svg="galleries" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Galleries
            </x-smartphone-dropdown-link>
        </li>
        <li class="flex pb-2 lg:items-center">
            <a href="{{ route('login') }}"
                class="text-base w-full text-center text-white py-1 lg:py-2 mx-4 lg:mx-3 xl:mx-4 font-bold bg-gradient-to-bl from-black via-emerald-700 to-black 
                dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 dark:border dark:border-gray-700 px-4 rounded-md hover:bg-green-500">
                Login
            </a>
        </li>
    </ul>
</div>
