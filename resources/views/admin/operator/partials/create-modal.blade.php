<x-modal name="add-operator" :show="$errors->operatorDelition->isNotEmpty()" focusable>
    <form action="{{ route('operator.store') }}" method="POST" class="space-y-3 p-6">
        @csrf
        <x-header title="Registering operator" description="10">
            <x-slot:header>
                This is a page where only admin can add operator.
            </x-slot:header>
            </x-dashboard.header>
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    autofocus autocomplete="name" />
                <x-input-error :messages="$errors->operatorDelition->get('name')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    autocomplete="username" />
                <x-input-error :messages="$errors->operatorDelition->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->operatorDelition->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" autocomplete="new-password" />
                <x-input-error :messages="$errors->operatorDelition->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="mt-6 flex justify-between sm:justify-end gap-2">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button>
                    {{ __('Create') }}
                </x-primary-button>
            </div>
    </form>
</x-modal>
