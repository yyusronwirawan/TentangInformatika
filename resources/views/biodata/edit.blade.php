<x-auth-layout title="Profil & Biodata Information">
    <div class="space-y-3 min-[1440px]:space-y-3">
        <x-work-space>
            {{--  --}}
            @if ($errors->any())
                <div class="flex p-4 mb-4 text-sm text-red-600 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <div>
                        <span class="font-medium">Oops, here's some error for you :</span>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            {{--  --}}
            @hasanyrole(['operator', 'admin'])
                <div class="space-y-3 min-[1440px]:space-y-3">
                    <div class="flex w-full justify-between">
                        <x-header title="Profile " description="1">
                            <x-slot:header>
                                update your profile information.
                            </x-slot:header>
                        </x-header>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 space-y-3 lg:space-y-0 lg:space-x-3 mt-6">
                        <div class="col-span-4 min-[1440px]:col-span-3 lg:mb-5 min-[1440px]:mb-0">
                            <div class="flex justify-center lg:mt-7">
                                @isset($user->picture)
                                    <img class="w-auto h-64 rounded-lg" src="{{ asset('storage/' . $user->picture) }}"
                                        alt="profile-picture">
                                @else
                                    <div role="status"
                                        class="space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center">
                                        <div
                                            class="flex items-center justify-center w-64 h-64 bg-gray-300 rounded md:w-52 min-[1440px]:w-64  dark:bg-gray-700">
                                            <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                            </svg>
                                        </div>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                @endisset
                            </div>
                        </div>
                        <div class="col-span-8 min-[1440px]:col-span-9 lg:mb-5 min-[1440px]:mb-0">
                            @include('biodata.partials.operator.update-operator-profile-information')
                        </div>
                    </div>
                </div>
            @else
                <div class="space-y-3 min-[1440px]:space-y-3">
                    <div class="flex w-full justify-between">
                        <x-header title="Profile and Biodata" description="2">
                            @if ($open)
                                <x-slot:header>
                                    update your profile & biodata information to meet the registration requirements.
                                </x-slot:header>
                                <x-slot:body>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Profile Picture</h3>
                                        <p>
                                            your picture is one of our requirements, please upload your picture so we
                                            could
                                            identify
                                            you
                                        </p>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Account Information</h3>
                                        <p>
                                            you can change your name and email.
                                        </p>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Username</h3>
                                        <p>
                                            Username cannot be edited due to your registration requirements.
                                        </p>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Biodata</h3>
                                        <p>make sure to fill all biodata field</p>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Download</h3>
                                        <p>click menu button on the right to download and if you complete to fill all
                                            biodata
                                            field, please download it right now because when the registration is close
                                            you
                                            cant
                                            download it anymore.</p>
                                    </div>
                                </x-slot:body>
                            @else
                                <x-slot:header>
                                    <span class="text-red-500">
                                        Sorry, Registrtion is close. you can update profile but not biodata.
                                    </span>
                                </x-slot:header>
                            @endif
                        </x-header>
                        @if ($user->has_verified == 0 && $open)
                            <x-header-menu-dropdown placement="bottom-end">
                                <x-slot:contents>
                                    @include('biodata.partials.registrant.reporting-menu')
                                </x-slot:contents>
                            </x-header-menu-dropdown>
                        @endif
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 lg:space-y-0 lg:space-x-3 mt-6">
                        <div class="col-span-4 min-[1440px]:col-span-2 mb-3 lg:mb-5 min-[1440px]:mb-0">
                            @include('biodata.partials.registrant.image-preview')
                        </div>
                        <div class="col-span-8 min-[1440px]:col-span-6 lg:mb-5 min-[1440px]:mb-0">
                            @include('biodata.partials.registrant.update-profile-picture')
                        </div>
                        <div class="my-6 max-lg:border-b max-lg:border-b-gray-300 dark:max-lg:border-b-gray-600 lg:hidden">
                        </div>
                        <div class="col-span-full min-[1440px]:col-span-4 mb-6">
                            @include('biodata.partials.registrant.update-profile-information')
                        </div>
                    </div>
                    <div class="my-6 max-lg:border-b max-lg:border-b-gray-300 dark:max-lg:border-b-gray-600 lg:hidden">
                    </div>
                    @if ($open)
                        @isset($biodata)
                            @include('biodata.partials.registrant.update-biodata-information')
                        @else
                            <x-header title="Biodata" description="3">
                                <x-slot:header>
                                    <span class="text-green-400">
                                        {{ 'you need biodata for the next step!' }}
                                    </span>
                                </x-slot:header>
                            </x-header>
                            <div class="flex items-center gap-4 mt-2">
                                @include('biodata.partials.registrant.store-biodata-information')
                            </div>
                        @endisset
                    @endif
                </div>
            @endhasanyrole
        </x-work-space>
    </div>
    <script>
        // Profile Picture Preview 
        function previewImage() {
            const image = document.querySelector("#picture");
            const imgPreview = document.querySelector(".img_preview");

            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
    </script>
</x-auth-layout>
