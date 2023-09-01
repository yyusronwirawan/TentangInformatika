<x-auth-layout title="Dashboard">
    <div class="space-y-3 min-[1440px]:space-y-3">
        @hasanyrole(['operator', 'admin'])
            <x-work-space>
                <x-header title="Information" description="1">
                    <x-slot:header>
                        <span class="text-green-500">
                            {{ 'Welcome ' .auth()->user()->getNickname() .', you are ' .auth()->user()->roles->pluck('name')[0] }}.
                        </span>
                    </x-slot:header>
                </x-header>
            </x-work-space>
        @endhasanyrole

        <x-work-space>
            @include('dashboard.partials.registration-information')
        </x-work-space>

        <div class="grid grid-cols-1 min-[1440px]:grid-cols-12 space-y-3 min-[1440px]:space-y-0 min-[1440px]:space-x-3">
            <div class="col-span-4">
                <x-work-space>
                    @include('dashboard.partials.account-information')
                </x-work-space>
            </div>
            <div class="col-span-4">
                <x-work-space>
                    @include('dashboard.partials.security-information')
                </x-work-space>
            </div>
            <div class="col-span-4">
                <x-work-space>
                    @hasanyrole(['operator', 'admin'])
                        <x-header title="Activity Progress" description="5">
                            <x-slot:header>
                                <span class="text-green-500">
                                    Check registrants progress.
                                </span>
                            </x-slot:header>
                        </x-header>
                        <div class="flex items-center">
                            <x-primary-link class="mt-2" href="{{ route('timeline.index') }}">check</x-primary-link>
                        </div>
                    @else
                        @include('dashboard.partials.biodata-information')
                    @endhasanyrole
                </x-work-space>
            </div>
        </div>

        @unlessrole(['operator', 'admin'])
            <x-work-space>
                <x-timeline :user="$user" />
            </x-work-space>
        @endunlessrole
    </div>
</x-auth-layout>
