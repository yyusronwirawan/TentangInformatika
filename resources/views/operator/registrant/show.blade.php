<x-auth-layout>
    <x-work-space>
        <div class="space-y-6">
            <div>
                <x-header title="{{ $registrant->name . ' Information' }}" description="1">
                    <x-slot:header>
                        this is a full information of {{ $registrant->getNickname() }}.
                    </x-slot:header>
                </x-header>
                <div class="grid grid-cols-1 lg:grid-cols-12 space-y-3 lg:space-y-0 lg:space-x-3 mt-6">
                    <div class="col-span-4 min-[1440px]:col-span-3 lg:mb-5 min-[1440px]:mb-0">
                        <div class="flex justify-center lg:mt-7">
                            @isset($registrant->picture)
                                <img class="w-auto h-64 rounded-lg" src="{{ asset('storage/' . $registrant->picture) }}"
                                    alt="profile-picture">
                            @else
                                <div role="status"
                                    class="space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center">
                                    <div
                                        class="flex items-center justify-center w-64 h-64 bg-gray-300 rounded md:w-48 min-[1440px]:w-40  dark:bg-gray-700">
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
                        <div class="mb-2">
                            <x-input-label for="name" :value="__('name')" />
                            <x-text-input disabled id="created_at" class="mt-1 block w-full" :value="old('created_at', $registrant->name)" />
                        </div>
                        <div class="mb-2">
                            <x-input-label for="username" :value="__('username')" />
                            <x-text-input disabled id="created_at" class="mt-1 block w-full" :value="old('created_at', $registrant->username)" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('email')" />
                            <x-text-input disabled id="created_at" class="mt-1 block w-full" :value="old('created_at', $registrant->email)" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="created_at" :value="__('Joined')" />
                            <x-text-input disabled id="created_at" class="mt-1 block w-full" :value="old('created_at', $registrant->created_at->format('d F Y'))" />
                        </div>
                    </div>
                </div>
            </div>

            <div>
                @isset($registrant->biodata)
                    <div class="grid grid-cols-1 lg:grid-cols-12 space-y-3 lg:space-y-0 lg:space-x-3 mt-6 mb-3">
                        <div class="col-span-6 space-y-3">
                            <div>
                                <x-input-label for="fullname" :value="__('nama lengkap')" />
                                <x-text-input disabled id="fullname" class="mt-1 block w-full" :value="$registrant->biodata->fullname" />
                            </div>
                            <div>
                                <x-input-label for="whatsapp" :value="__('no. whatsapp')" />
                                <x-text-input disabled id="whatsapp" class="mt-1 block w-full" :value="$registrant->biodata->whatsapp" />
                            </div>
                            <div>
                                <x-input-label for="religion" :value="__('agama')" />
                                <x-text-input disabled id="religion" class="mt-1 block w-full" :value="$registrant->biodata->religion" />
                            </div>
                            <div>
                                <x-input-label for="sex" :value="__('jenis kelamin')" />
                                <x-text-input disabled id="sex" class="mt-1 block w-full" :value="$registrant->biodata->sex" />
                            </div>
                            <div>
                                <x-input-label for="city" :value="__('kota lahir')" />
                                <x-text-input disabled id="city" class="mt-1 block w-full" :value="$registrant->biodata->city" />
                            </div>
                            <div>
                                <x-input-label for="birthday" :value="__('tanggal lahir')" />
                                <x-text-input disabled id="birthday" class="mt-1 block w-full" :value="$registrant->biodata->birthday" />
                            </div>
                            <div>
                                <x-input-label for="address" :value="__('alamat')" />
                                <x-text-input disabled id="address" class="mt-1 block w-full" :value="$registrant->biodata->address" />
                            </div>
                            <div>
                                <x-input-label for="university" :value="__('asal kampus')" />
                                <x-text-input disabled id="university" class="mt-1 block w-full" :value="$registrant->biodata->university" />
                            </div>
                            <div>
                                <x-input-label for="faculty" :value="__('fakultas')" />
                                <x-text-input disabled id="faculty" class="mt-1 block w-full" :value="$registrant->biodata->faculty" />
                            </div>
                            <div>
                                <x-input-label for="major" :value="__('jurusan')" />
                                <x-text-input disabled id="major" class="mt-1 block w-full" :value="$registrant->biodata->major" />
                            </div>
                            <div>
                                <x-input-label for="semester" :value="__('semester')" />
                                <x-text-input disabled id="semester" class="mt-1 block w-full" :value="$registrant->biodata->semester" />
                            </div>
                        </div>
                        <div class="col-span-6 space-y-3">
                            <div>
                                <x-input-label for="father" :value="__('nama ayah')" />
                                <x-text-input disabled id="father" class="mt-1 block w-full" :value="$registrant->biodata->father" />
                            </div>
                            <div>
                                <x-input-label for="fatherWhatsapp" :value="__('nomor whatsapp / telepon ayah')" />
                                <x-text-input disabled id="fatherWhatsapp" class="mt-1 block w-full" :value="$registrant->biodata->fatherWhatsapp" />
                            </div>
                            <div>
                                <x-input-label for="mother" :value="__('nama ibu')" />
                                <x-text-input disabled id="mother" class="mt-1 block w-full" :value="$registrant->biodata->mother" />
                            </div>
                            <div>
                                <x-input-label for="motherWhatsapp" :value="__('nomor whatsapp / telepon ibu')" />
                                <x-text-input disabled id="motherWhatsapp" class="mt-1 block w-full" :value="$registrant->biodata->motherWhatsapp" />
                            </div>
                            <div>
                                <x-input-label for="vehicle" :value="__('Kendaraan Pribadi')" />
                                <x-text-input disabled id="vehicle" class="mt-1 block w-full" :value="$registrant->biodata->vehicle" />
                            </div>
                            <div>
                                <x-input-label for="disease" :value="__('penyakit yang diderita / pantangan')" />
                                <x-input-textarea disabled class="mt-1 placeholder:italic" rows="5" id="disease">
                                    {{ $registrant->biodata->disease }}</x-input-textarea>
                            </div>
                            <div>
                                <x-input-label for="goals" :value="__('tujuan')" />
                                <x-input-textarea disabled class="mt-1 placeholder:italic" rows="5" id="goals">
                                    {{ $registrant->biodata->goals }}</x-input-textarea>
                            </div>
                            <div>
                                <x-input-label for="organizationsExp" :value="__('pengalaman organisasi')" />
                                <x-input-textarea disabled class="mt-1 placeholder:italic" rows="5"
                                    id="organizationsExp">
                                    {{ $registrant->biodata->organizationsExp }}</x-input-textarea>
                            </div>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </x-work-space>


</x-auth-layout>
