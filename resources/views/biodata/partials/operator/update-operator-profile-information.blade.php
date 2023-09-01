<form action="{{ route('profile.update') }}" method="post">
    @csrf
    @method('patch')
    <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
    <div class="mb-2">
        <x-input-label for="name" :value="__('name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required
            autocomplete="name" />
        <x-input-error class="mt-1 text-xs" :messages="$errors->get('name')" />
    </div>
    <div class="mb-2">
        <x-input-label for="username" :value="__('username')" />
        <x-text-input id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username', $user->username)" required
            autocomplete="username" />
        <x-input-error class="mt-1 text-xs" :messages="$errors->get('username')" />
    </div>
    <div class="mb-4">
        <x-input-label for="email" :value="__('email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required
            autocomplete="email" />
        <x-input-error class="mt-1 text-xs" :messages="$errors->get('email')" />
    </div>
    @role('operator')
        <div class="mb-4">
            <x-input-label for="whatsapp" :value="__('Whatsapp')" />
            <x-text-input id="whatsapp" name="whatsapp" type="text" class="mt-1 block w-full" :value="old('whatsapp', $user->whatsapp)"
                required autocomplete="whatsapp" />
            <x-input-error class="mt-1 text-xs" :messages="$errors->get('whatsapp')" />
        </div>
    @endrole
    <div class="flex items-center gap-4 justify-end">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </div>
</form>
