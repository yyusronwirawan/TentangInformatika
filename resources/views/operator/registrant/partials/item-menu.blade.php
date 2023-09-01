<ul class="py-2 text-sm divide-y divide-gray-200 dark:divide-gray-700" aria-labelledby="{{ $item->id }}">
    @if (!$open)
        <li>
            @if ($item->has_verified == 1)
                <form action="{{ route('registrant.unverify', $item) }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit"
                        class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white">
                        <span class="font-medium text-red-600 flex items-center">
                            <x-svg class="w-6 h-6 mr-1" svg="unverified" strokeWidth="1.5" stroke="currentColor" />
                            Unverified
                        </span>
                    </button>
                </form>
            @else
                <form action="{{ route('registrant.verify', $item) }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit"
                        class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white">
                        <span class="font-medium text-gray-700 dark:text-gray-300  flex items-center">
                            <x-svg class="w-6 h-6 mr-1" svg="verified" strokeWidth="1.5" stroke="currentColor" />
                            Verified
                        </span>
                    </button>
                </form>
            @endif
        </li>
        @hasrole('admin')
            <li>
                <form action="{{ route('registrant.promote', $item) }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit"
                        class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white"
                        onclick="return confirm('Are you sure want to promote {{ $item->getNickname() }}?')">
                        <span class=" text-gray-700 dark:text-gray-300 flex items-center">
                            <x-svg class="w-6 h-6 mr-1" svg="promote" strokeWidth="1.5" stroke="currentColor" />
                            Promote
                        </span>
                    </button>
                </form>
            </li>
        @endhasrole
        <li>
            <a href="{{ route('registrant.pdf.preview', $item) }}" target="_blank" rel="noopener noreferrer"
                class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                <x-svg class="w-6 h-6 mr-1" svg="pdf" strokeWidth="1.5" stroke="currentColor" />
                Preview
            </a>
        </li>
    @endif
    <li>
        <a href="{{ route('registrant.show', $item) }}"
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
                class="w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white"
                @if ($item->biodata_count == 1 || $item->has_verified == 1) onclick="return confirm('Are you sure want to delete {{ $item->getNickname() }}?')" @endif>
                <span class="font-medium text-red-600  flex items-center">
                    <x-svg class="w-6 h-6 mr-1" svg="delete" strokeWidth="1.5" stroke="currentColor" />
                    Delete
                </span>
            </button>
        </form>
    </li>
</ul>
