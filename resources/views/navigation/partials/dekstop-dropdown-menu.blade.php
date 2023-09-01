<li class="group flex">
    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" data-dropdown-offset-distance="0"
        data-dropdown-offset-skidding="-110"
        class="flex items-center text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200"
        type="button">
        <span class="sr-only">Open user menu</span>
        <span class="flex items-center group-hover:font-medium group-hover:text-gray-700 dark:group-hover:text-white">
            <x-auth-user />
        </span>
        <x-svg viewBox="0 0 10 6" class="w-2.5 h-2.5 ml-2.5" svg="menu-dropdown" />
    </button>
</li>
<div id="dropdownAvatarName"
    class="z-10 hidden bg-white border border-gray-200 dark:border-gray-600 divide-y divide-gray-200 rounded-lg shadow w-[17rem] dark:bg-black dark:divide-gray-600 ">
    <div class="px-4 py-4 text-sm select-none ">
        <div class="font-medium text-gray-900 dark:text-white">{{ auth()->user()->getNickName() }}</div>
        <div class="truncate text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAvatarNameButton">
        <li>
            <x-side-navigation-link href="{{ route('home') }}">
                <x-svg class="w-5 h-5" svg="home" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Home
            </x-side-navigation-link>
        </li>
    </ul>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAvatarNameButton">
        <li>
            <x-side-navigation-link href="{{ route('dashboard') }}">
                <x-svg class="w-5 h-5" svg="dashboard" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Dashboard
            </x-side-navigation-link>
        </li>
        <li>
            <x-side-navigation-link href="{{ route('biodata.index') }}">
                <x-svg class="w-5 h-5" svg="biodata" fill="none" strokeWidth="1.5" stroke="currentColor" />
                @hasanyrole(['operator', 'admin'])
                    Profile
                @else
                    Biodata
                @endhasanyrole
            </x-side-navigation-link>
        </li>
        <li>
            <x-side-navigation-link href="{{ route('timeline.index') }}">
                <x-svg class="w-5 h-5" svg="timeline" strokeWidth="1.5" stroke="currentColor" />
                Timeline
            </x-side-navigation-link>
        </li>
        <li>
            <x-side-navigation-link href="{{ route('profile.edit') }}">
                <x-svg class="w-5 h-5" svg="security" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Security
            </x-side-navigation-link>
        </li>
        <li>
            <x-side-navigation-link href="{{ route('tutorial.index') }}">
                <x-svg class="w-5 h-5" svg="tutorial" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Tutorial
            </x-side-navigation-link>
        </li>
        <li>
            <x-side-navigation-link href="{{ route('help.index') }}">
                <x-svg class="w-5 h-5" svg="help" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Help
            </x-side-navigation-link>
        </li>
    </ul>
    @hasanyrole(['operator', 'admin'])
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
                <x-side-navigation-link class="justify-between" href="{{ route('registrant.index') }}">
                    <div class="flex gap-x-1">
                        <x-svg class="w-5 h-5" svg="registrant-list" fill="none" strokeWidth="1.5"
                            stroke="currentColor" />
                        Registrant List
                    </div>
                    <x-verified-icon type="operator" />
                </x-side-navigation-link>

                <x-side-navigation-link class="justify-between" href="{{ route('schedule.index') }}">
                    {{-- <x-svg class="w-5 h-5" svg="schedule" fill="none" strokeWidth="1.5" stroke="currentColor" />
                    Schedules --}}
                    <div class="flex gap-x-1">
                        <x-svg class="w-5 h-5" svg="schedule" fill="none" strokeWidth="1.5" stroke="currentColor" />
                        Schedules
                    </div>
                    <x-verified-icon type="operator" />
                </x-side-navigation-link>
            </li>
        </ul>
    @endhasanyrole
    @role('admin')
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
                <x-side-navigation-link class="justify-between" href="{{ route('operator.index') }}">
                    <div class="flex gap-x-1">
                        <x-svg class="w-5 h-5" svg="operator-list" fill="none" strokeWidth="1.5" stroke="currentColor" />
                        Operator List
                    </div>
                    <x-verified-icon type="admin" />
                </x-side-navigation-link>
            </li>
        </ul>
    @endrole
    <div class="py-2 flex items-center justify-between gap-x-2">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit"
                class="w-full text-left flex items-center gap-x-1 px-4 py-2 text-gray-800 dark:text-gray-300 text-sm hover:text-red-600 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-red-600">
                <x-svg class="w-5 h-5" svg="logout" fill="none" strokeWidth="1.5" stroke="currentColor" />
                Logout
            </button>
        </form>
        <div>
            <x-theme-toggle btnId="theme-toggle" svgDarkId="theme-toggle-dark-icon"
                svgLightId="theme-toggle-light-icon" />
        </div>
    </div>
</div>
