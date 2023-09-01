<x-auth-layout title="Registrant List">
    <x-work-space class="relative overflow-x-auto">
        <div class="flex justify-between item-center">
            <x-header title="Registrants List" description="1">
                <x-slot:header>
                    This is a registrant who has completed the registration process.
                </x-slot:header>
            </x-header>

            @if (!$open)
                <x-header-menu-dropdown placement="bottom-end">
                    <x-slot:contents>
                        @include('operator.registrant.partials.menu')
                    </x-slot:contents>
                </x-header-menu-dropdown>
            @endif
        </div>
        <div class="max-w-sm mt-5">
            <x-search-input-form :route="route('registrant.index')" placeholder="Search Registrant" />
        </div>
        <div class="mt-5">
            <!-- relative class on main tag -->
            @include('operator.registrant.partials.items')
        </div>
    </x-work-space>
    @include('operator.registrant.partials.all-delete-modal')

</x-auth-layout>
