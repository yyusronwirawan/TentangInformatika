<x-modal name="operator-forget-password" :show="$errors->operatorForgetPasswordDelition->isNotEmpty()" focusable>
    <form action="{{ route('operator.forget.password') }}" method="POST" class="space-y-3 p-6">
        @csrf
        @method('put')
        <x-header title="Operator Forget Password" description="10">
            <x-slot:header>
                This is a page where only admin can change operator password.
            </x-slot:header>
        </x-header>
        <input type="hidden" name="userId" value="{{ $operator->id }}">
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />

            <x-input-error :messages="$errors->operatorForgetPasswordDelition->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" />

            <x-input-error :messages="$errors->operatorForgetPasswordDelition->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mt-6 flex justify-between sm:justify-end gap-2">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button>
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
