<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
    <li>
        <a href="{{ route('registrant.table.pdf.preview') }}" target="_blank" rel="noopener noreferrer"
            class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 font-medium hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            <x-svg class="w-6 h-6 mr-1" svg="pdf" strokeWidth="1.5" stroke="currentColor" />
            Preview
        </a>
    </li>
    <li>
        <a href="#" target="_blank" rel="noopener noreferrer"
            class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 font-medium hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            <x-svg class="w-6 h-6 mr-1" svg="xls" strokeWidth="1.5" stroke="currentColor" />
            Export
        </a>
    </li>
</ul>
@if ($collections->first())
    <div class="py-2 text-sm text-gray-700 dark:text-gray-200 border-t border-t-gray-200 dark:border-gray-700">
        @if ($collections->where('has_verified', 0)->first())
            <form action="{{ route('registrant.unverified.delete') }}" method="post" class="">
                @csrf
                @method('delete')
                <div class="flex items-center">
                    <button type="submit" class="w-full text-left"
                        onclick="return confirm('Are you sure want to delete unverified registrants?')">
                        <span
                            class="flex items-center font-medium text-red-600 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <x-svg class="w-6 h-6 mr-1" svg="delete" strokeWidth="1.5" stroke="currentColor" />
                            Delete unverified
                        </span>
                    </button>
                </div>
            </form>
        @endif

        <button type="submit" class="w-full text-left" x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-delete-all-registrants')">
            <span
                class="flex items-center font-medium text-red-600 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                <x-svg class="w-6 h-6 mr-1" svg="delete" strokeWidth="1.5" stroke="currentColor" />
                Delete all
            </span>
        </button>
    </div>
@endif
