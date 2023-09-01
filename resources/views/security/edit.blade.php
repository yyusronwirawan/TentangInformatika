<x-auth-layout title="Security">
    <div class="space-y-3">
        <x-work-space>
            <div class="max-w-xl">
                @include('security.partials.update-password-form')
            </div>
        </x-work-space>
        {{-- <x-work-space>
            <div class="max-w-xl">
                @include('security.partials.delete-user-form')
            </div>
        </x-work-space> --}}
    </div>
</x-auth-layout>
