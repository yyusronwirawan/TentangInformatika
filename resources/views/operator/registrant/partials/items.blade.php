<x-stacked-list>
    @forelse ($collections as $item)
        <x-stacked-list-item>
            <x-slot:item>
                @isset($item->picture)
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset('storage/' . $item->picture) }}"
                        alt="">
                @else
                    <x-svg class="w-12 h-12 text-gray-200 dark:text-gray-700" svg="avatar" fill="currentColor"
                        viewBox="0 0 20 20" />
                @endisset
                <div class="min-w-0 flex-auto">
                    <p
                        class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">
                        <a href="{{ route('registrant.show', $item) }}" class="hover:underline">
                            @if ($item->has_verified == 1)
                                <span class="flex items-center gap-x-1">
                                    {{ $item->getNickname() }}
                                    <x-verified-icon type="registrant" />
                                </span>
                            @else
                                {{ $item->name }}
                            @endif
                        </a>
                    </p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500 dark:text-gray-400">
                        {{ $item->email . ' . ' . $item->username }}
                    </p>
                    <p
                        class="flex items-center mt-1 gap-x-1 truncate text-xs leading-5 text-gray-500 dark:text-gray-400">
                        {{ $item->created_at->diffForHumans() }}
                        @if ($item->biodata_count == 1)
                            •
                            <span class="text-green-500 flex items-center">
                                Biodata
                                <x-svg class="w-3 h-3 ml-[0.1rem]" strokeWidth="1.5" svg="checklist"
                                    stroke="currentColor" />
                            </span>
                        @else
                            •
                            <span class="text-red-600 flex items-center">
                                Biodata
                                <x-svg class="w-3 h-3 ml-[0.1rem]" strokeWidth="1.5" svg="unchecklist"
                                    stroke="currentColor" />
                            </span>
                        @endif
                    </p>
                </div>
            </x-slot:item>
            <x-stacked-list-menu :id="$item->id" :data="$item->username" placement="bottom-end" type="registrant"
                title="Registrant">
                @include('operator.registrant.partials.item-menu')
            </x-stacked-list-menu>
        </x-stacked-list-item>
    @empty
        <x-empty-loop />
    @endforelse

</x-stacked-list>
