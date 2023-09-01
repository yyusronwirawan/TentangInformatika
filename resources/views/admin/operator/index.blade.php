<x-auth-layout title="Operator List">
    <x-work-space class="relative overflow-x-auto ">
        <div class="flex item-center justify-between">
            <x-header title="Operators List" description="1">
                <x-slot:header>
                    This is a list operator, who in charge of managing the registrants.
                </x-slot:header>
            </x-header>
            <x-header-menu-dropdown placement="bottom-end">
                <x-slot:contents>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                        <li>
                            <button type="submit" class="w-full text-left" x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'add-operator')">
                                <span
                                    class="flex items-center font-medium text-gray-700 dark:text-gray-300 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <x-svg class="w-6 h-6 mr-1" svg="add" strokeWidth="1.5"
                                        stroke="currentColor" />
                                    Add operator
                                </span>
                            </button>
                        </li>
                    </ul>
                </x-slot:contents>
            </x-header-menu-dropdown>
        </div>
        <div class="max-w-sm mt-5">
            <x-search-input-form :route="route('operator.index')" placeholder="Search Operator" />
        </div>
        <div class="mt-5">
            @include('admin.operator.partials.items')
        </div>
    </x-work-space>
    @include('admin.operator.partials.create-modal')

</x-auth-layout>
