<form action="{{ route('biodata.profile.update') }}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
    <div class="mb-2">
        <x-input-label for="name" :value="__('name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required
            autocomplete="name" />
        <x-input-error class="mt-1 text-xs" :messages="$errors->get('name')" />
    </div>
    <div class="mb-2">
        <x-input-label for="email" :value="__('email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required
            autocomplete="email" />
        <x-input-error class="mt-1 text-xs" :messages="$errors->get('email')" />
    </div>
    <div class="mb-4">
        <x-input-label for="username" :value="__('username')" />
        <x-text-input id="username" disabled type="text" class="mt-1 block w-full" :value="old('username', $user->username)" required
            autocomplete="username" />
        <x-input-error class="mt-1 text-xs" :messages="$errors->get('username')" />
    </div>
    <div class="flex items-center gap-4 max-lg:justify-end">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </div>
</form>
