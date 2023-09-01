<x-header title="Registration Information" description="2">
    <x-slot name="header">
        @if ($open)
            <span class="text-green-400 animate-pulse">
                @unlessrole(['operator', 'admin'])
                    {{ 'Hello ' .auth()->user()->getNickname() .',' }}
                @endunlessrole
                Registration is now open!
            </span>
        @else
            <span class="text-red-600 animate-pulse">
                @unlessrole(['operator', 'admin'])
                    {{ 'Sorry ' .auth()->user()->getNickname() .',' }}
                @endunlessrole
                Registration is now close!
            </span>
        @endif
    </x-slot>
</x-header>

@hasanyrole('operator|admin')
    <div class="flex flex-wrap items-center gap-2 mt-3">
        @role('admin')
            <div class="">
                <x-primary-link href="{{ route('operator.index') }}" class="">{{ __('More info') }}</x-primary-link>
            </div>
        @endrole

        @if ($open)
            <form action="{{ route('status.close') }}" method="post">
                @csrf
                @method('put')
                <div class="block min-[500px]:flex min-[500px]:items-center  gap-4">
                    <x-primary-button>{{ __('Close Registration') }}</x-primary-button>
                </div>
            </form>
        @else
            <form action="{{ route('status.open') }}" method="post">
                @csrf
                @method('put')
                <div class="block min-[500px]:flex min-[500px]:items-center  gap-4">
                    <x-primary-button>{{ __('Open Registration') }}</x-primary-button>
                </div>
            </form>
        @endif
    </div>
@endhasanyrole
{{-- <x-admin.registration-status /> --}}
