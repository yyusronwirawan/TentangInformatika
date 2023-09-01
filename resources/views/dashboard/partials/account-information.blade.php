<x-header title="Account Information" description="3">
    <x-slot:header>
        <span class="text-green-500">
            Last update account is {{ Auth::user()->updated_at->diffForHumans() }}
        </span>
    </x-slot:header>
</x-header>
<x-primary-link class="mt-2" href="{{ route('biodata.index') }}">update</x-primary-link>
