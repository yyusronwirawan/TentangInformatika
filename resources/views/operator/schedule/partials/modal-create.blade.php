<x-modal name="add-schedule" :show="$errors->scheduleDelition->isNotEmpty()" focusable>
    <form action="{{ route('schedule.store') }}" method="POST" class="p-6">
        @csrf
        @method('post')
        <x-header title="Add Schedule" description="10">
            <x-slot:header>
                This modal is for create schedule.
            </x-slot>
            </x-dashboard.header>
            <div class="mb-4 mt-6">
                <x-input-label for="name" :value="__('name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    autofocus autocomplete="off" />
                <x-input-error :messages="$errors->scheduleDelition->get('name')" class="mt-2" />
            </div>
            <div class="mb-4">
                <x-input-label for="location" :value="__('location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')"
                    autofocus autocomplete="off" />
                <x-input-error :messages="$errors->scheduleDelition->get('location')" class="mt-2" />
            </div>
            <div class="mb-4">
                <x-input-label for="time" :value="__('time')" />
                <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" :value="old('time')"
                    autofocus autocomplete="off" />
                <x-input-error :messages="$errors->scheduleDelition->get('time')" class="mt-2" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                <div>
                    <x-input-label for="date_start" :value="__('date start')" />
                    <x-text-input id="date_start" class="block mt-1 w-full" type="date" name="date_start"
                        :value="old('date_start')" autofocus autocomplete="off" />
                    <x-input-error :messages="$errors->scheduleDelition->get('date_start')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="date_end" :value="__('date end')" />
                    <x-text-input id="date_end" class="block mt-1 w-full" type="date" name="date_end"
                        :value="old('date_end')" autofocus autocomplete="off" />
                    <x-input-error :messages="$errors->scheduleDelition->get('date_end')" class="mt-2" />
                </div>
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
