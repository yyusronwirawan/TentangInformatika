@props(['placeholder'])

<input type="text" id="simple-search" name="keyword" value="{{ request()->keyword }}"
    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10 p-2.5  dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
    placeholder="{{ $placeholder }}" required>
