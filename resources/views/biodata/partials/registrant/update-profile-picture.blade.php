<div class="w-full">
    <form action="{{ route('biodata.picture.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <x-input-label for="picture" :value="__('profile picture')" />
        <div class="mt-1 mb-3">
            <input type="hidden" name="oldPicture" value="{{ $user->picture }}">
            <input required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-black dark:border-gray-600 dark:placeholder-gray-400
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100"
                aria-describedby="file_input_help" id="picture" type="file" name="picture"
                onchange="previewImage()">
            @if ($errors->get('picture'))
                <x-input-error class="mt-1 text-xs" :messages="$errors->get('picture')" />
            @else
                <p class="mt-1 text-[0.65rem] text-gray-500 dark:text-gray-300" id="file_input_help">
                    PNG, JPG or JPEG (MAX. 1MB).
                </p>
            @endif
        </div>
        <div class="flex items-center gap-4 max-lg:justify-end">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</div>
