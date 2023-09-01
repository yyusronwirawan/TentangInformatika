@inject('carbon', 'Carbon\Carbon')
<x-auth-layout title="Update Schedule">
    <x-work-space>
        <x-header title="Update Schedule" description="1">
            <x-slot:header>
                Update schedule {{ $schedule->name }}.
            </x-slot:header>
        </x-header>
        <div class="mt-5 max-w-lg">
            <form action="{{ route('schedule.update', $schedule) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-4 mt-6">
                    <x-input-label for="name" :value="__('name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $schedule->name)"
                        autofocus autocomplete="off" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <x-input-label for="location" :value="__('location')" />
                    <x-text-input id="location" class="block mt-1 w-full" type="text" name="location"
                        :value="old('location', $schedule->location)" autofocus autocomplete="off" />
                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <x-input-label for="time" :value="__('time')" />
                    <x-text-input id="time" class="block mt-1 w-full" type="time" name="time"
                        :value="old('time', $carbon::parse($schedule->time)->format('H:i'))" autofocus autocomplete="off" />
                    <x-input-error :messages="$errors->get('time')" class="mt-2" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                    <div>
                        <x-input-label for="date_start" :value="__('date start')" />
                        <x-text-input id="date_start" class="block mt-1 w-full" type="date" name="date_start"
                            :value="old('date_start', $schedule->date_start)" autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('date_start')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="date_end" :value="__('date end')" />
                        <x-text-input id="date_end" class="block mt-1 w-full" type="date" name="date_end"
                            :value="old('date_end', $schedule->date_end)" autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('date_end')" class="mt-2" />
                    </div>
                </div>
                <div class="mt-6">
                    <x-primary-button>
                        {{ __('Update') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-work-space>
</x-auth-layout>
