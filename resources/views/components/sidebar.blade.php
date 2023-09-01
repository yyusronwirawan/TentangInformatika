<aside id="separator-sidebar"
    class="fixed lg:top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-black">
        @auth
            <ul class="mb-4 space-y-2 font-medium">
                <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" svg="dashboard">
                    Dashboard
                </x-sidebar-link>
                <x-sidebar-link :href="route('biodata.index')" :active="request()->routeIs('biodata.*')" svg="biodata">
                    @hasanyrole(['operator', 'admin'])
                        Profile
                    @else
                        Biodata
                    @endhasanyrole
                </x-sidebar-link>
                <x-sidebar-link :href="route('timeline.index')" :active="request()->routeIs('timeline.*')" svg="timeline">
                    timeline
                </x-sidebar-link>
                <x-sidebar-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')" svg="security">
                    security
                </x-sidebar-link>
                <x-sidebar-link :href="route('tutorial.index')" :active="request()->routeIs('tutorial.*')" svg="tutorial">
                    tutorial
                </x-sidebar-link>
                <x-sidebar-link :href="route('help.index')" :active="request()->routeIs('help.*')" svg="help">
                    help
                </x-sidebar-link>
            </ul>
        @endauth
        @hasanyrole(['operator', 'admin'])
            <ul class="py-4 mb-4 space-y-2 font-medium border-y border-y-gray-300 dark:border-y-gray-700">
                <x-sidebar-link :href="route('registrant.index')" :active="request()->routeIs('registrant.*')" svg="registrant-list">
                    registrant list
                    <x-slot:mark>
                        <x-verified-icon type="operator" />
                    </x-slot:mark>
                </x-sidebar-link>
                <x-sidebar-link :href="route('schedule.index')" :active="request()->routeIs('schedule.*')" svg="schedule">
                    Schedules
                    <x-slot:mark>
                        <x-verified-icon type="operator" />
                    </x-slot:mark>
                </x-sidebar-link>
            </ul>
        @endhasanyrole
        @hasrole('admin')
            <ul class="space-y-2 font-medium">
                <x-sidebar-link :href="route('operator.index')" :active="request()->routeIs('operator.*')" svg="operator-list">
                    operator list
                    <x-slot:mark>
                        <x-verified-icon type="admin" />
                    </x-slot:mark>
                </x-sidebar-link>
            </ul>
        @endhasrole
    </div>
</aside>
