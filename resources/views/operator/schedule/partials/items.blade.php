<x-stacked-list>
    @forelse ($collections as $item)
        <x-stacked-list-item>
            <x-slot:item>
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">
                        <a href="{{ route('schedule.edit', $item) }}" class="hover:underline">{{ $item->name }}</a>
                    </p>
                    <p class="flex items-center gap-x-1 mt-1 truncate text-xs leading-5 text-gray-500">
                        {{ $item->location }}
                        •
                        {{ \Carbon\Carbon::parse($item->time)->format('H.i') . ' WITA' }}
                        •
                        @if ($item->active_in == null)
                            <span class="text-red-600 flex items-center">
                                Not Active
                                <x-svg class="w-3 h-3 ml-[0.1rem]" strokeWidth="1.5" svg="unchecklist"
                                    stroke="currentColor" />
                            </span>
                        @else
                            <span class="text-green-500 flex items-center">
                                Active
                                <x-svg class="w-3 h-3 ml-[0.1rem]" strokeWidth="1.5" svg="checklist"
                                    stroke="currentColor" />
                            </span>
                        @endif
                    </p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                        {{ $item->getFullDate() }}
                    </p>
                </div>
            </x-slot:item>
            <x-stacked-list-menu :id="$item->id" :data="$item->identifier" placement="bottom-end" type="schedule"
                title="Schedule">
                @include('operator.schedule.partials.item-menu')
            </x-stacked-list-menu>
        </x-stacked-list-item>
    @empty
        <x-empty-loop />
    @endforelse
</x-stacked-list>
