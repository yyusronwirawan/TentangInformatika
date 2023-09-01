<ul class="py-2 text-sm divide-y divide-gray-200 dark:divide-gray-700" aria-labelledby="{{ $item->id }}">
    <li>
        <a href="{{ route('operator.show', $item) }}"
            class=" flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
            <x-svg class="w-6 h-6 mr-1" svg="show" strokeWidth="1.5" stroke="currentColor" />
            Show
        </a>
    </li>
    <li>
        <form action="{{ route('registrant.delete', $item) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"
                class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white"
                onclick="return confirm('Are you sure want to delete {{ $item->name }}?')">
                <span class="font-medium text-red-600  flex items-center">
                    <x-svg class="w-6 h-6 mr-1" svg="delete" strokeWidth="1.5" stroke="currentColor" />
                    Delete
                </span>
            </button>
        </form>
    </li>
</ul>
