<ul class="py-2 text-sm divide-y divide-gray-200 dark:divide-gray-700" aria-labelledby="{{ $item->identifier }}">
    <li>
        <a href="{{ route('schedule.edit', $item) }}"
            class=" flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
            <x-svg class="w-6 h-6 mr-1" svg="edit" strokeWidth="1.5" stroke="currentColor" />
            Edit
        </a>
    </li>
    <li>
        @if ($item->active_in == null)
            <form action="{{ route('schedule.activate', $item) }}" method="post">
                @csrf
                @method('put')
                <button type="submit"
                    class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white"
                    onclick="return confirm('Are you sure want to activate this schdule?')">
                    <span class="font-medium text-gray-700 dark:text-gray-300  flex items-center">
                        <x-svg class="w-6 h-6 mr-1" svg="activate" strokeWidth="1.5" stroke="currentColor" />
                        Activate
                    </span>
                </button>
            </form>
        @else
            <form action="{{ route('schedule.deactivate', $item) }}" method="post">
                @csrf
                @method('put')
                <button type="submit"
                    class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white"
                    onclick="return confirm('Are you sure want to deactivate this schdule?')">
                    <span class="font-medium text-yellow-400 flex items-center">
                        <x-svg class="w-6 h-6 mr-1" svg="deactivate" strokeWidth="1.5" stroke="currentColor" />
                        Deactivate
                    </span>
                </button>
            </form>
        @endif
    </li>
    <li>
        <form action="{{ route('schedule.delete', $item) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"
                class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white"
                onclick="return confirm('Are you sure want to delete {{ $item->name }}?')">
                <span class="font-medium text-red-600 flex items-center">
                    <x-svg class="w-6 h-6 mr-1" svg="delete" strokeWidth="1.5" stroke="currentColor" />
                    Delete
                </span>
            </button>
        </form>
    </li>
</ul>
