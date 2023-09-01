<x-header title="Security Information" description="4">
    <x-slot:header>
        <span class="text-green-500">
            Last update password is {{ Auth::user()->updated_at->diffForHumans() }}
        </span>
    </x-slot:header>
</x-header>
<x-primary-link class="mt-2" href="{{ route('profile.edit') }}">update</x-primary-link>
