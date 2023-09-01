<x-auth-layout title="Schedule List">
    <x-work-space class="relative overflow-x-auto">
        <div class="flex justify-between item-center">
            <x-header title="Schedule" description="1">
                <x-slot:header>
                    here's all schedules that we're going todo.
                </x-slot:header>
            </x-header>
            <x-header-menu-dropdown placement="bottom-end">
                <x-slot:contents>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                        <li>
                            <button type="submit" class="w-full text-left" x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'add-schedule')">
                                <span
                                    class="flex items-center font-medium text-gray-700 dark:text-gray-300 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <x-svg class="w-6 h-6 mr-1" svg="add-schedule" fill="none" strokeWidth="1.5"
                                        stroke="currentColor" />
                                    Add Schedule
                                </span>
                            </button>
                        </li>
                    </ul>
                </x-slot:contents>
            </x-header-menu-dropdown>
        </div>
        <div class="mt-5">
            @include('operator.schedule.partials.items')
        </div>
    </x-work-space>
    @include('operator.schedule.partials.modal-create')
</x-auth-layout>
