@if ($open)
    @isset(Auth::user()->biodata)
        <x-header title="Biodata Information" description="6">
            <x-slot:header>
                <span class="text-green-500">
                    Last update biodata is {{ Auth::user()->biodata->updated_at->diffForHumans() }}
                </span>
            </x-slot:header>
        </x-header>
        <x-primary-link class="mt-2" href="{{ route('biodata.index') }}">update</x-primary-link>
    @else
        <x-header title="Biodata Information" description="7">
            <x-slot:header>
                <span class="text-green-500">
                    {{ 'you need biodata for the next step!' }}
                </span>
            </x-slot:header>
        </x-header>
        <div class="flex items-center gap-4 mt-2">
            @include('biodata.partials.store-biodata-information')
        </div>
    @endisset
@else
    <x-header title="Biodata" description="8">
        <x-slot:header>
            <span class=" text-green-500">
                Last update biodata is {{ Auth::user()->biodata->updated_at->diffForHumans() }}
            </span>
        </x-slot:header>
    </x-header>
    <div class="flex items-center">
        <x-primary-button class="mt-2 disabled:bg-gray-800/50 disabled:hover:bg-gray-800/50" disabled href="#">
            update
        </x-primary-button>
    </div>
@endif
