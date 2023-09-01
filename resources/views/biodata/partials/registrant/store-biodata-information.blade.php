<form action="{{ route('biodata.store') }}" method="post">
    @csrf
    @method('post')
    <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
    <x-primary-button
        class="bg-gradient-to-tr from-green-600 via-green-400 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300">
        {{ __('Create') }}
    </x-primary-button>
</form>
