<section class="space-y-6">

    <x-header title="Delete Account" description="2">
        <x-slot name="header">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
            your account, please download any data or information that you wish to retain.
        </x-slot>
    </x-header>
    <div class="flex items-center gap-4 max-lg:justify-end">
        <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
            {{ __('Delete Account') }}</x-danger-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <x-header title="Are you sure you want to delete your account?" description="3">
                <x-slot name="header">
                    Once your account is deleted, all of its resources and data will be permanently deleted. Please
                    enter your password to confirm you would like to permanently delete your account.
                </x-slot>
            </x-header>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                    placeholder="{{ __('Password') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-between sm:justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
