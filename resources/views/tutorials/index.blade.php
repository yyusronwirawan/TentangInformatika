<x-auth-layout title="Tutorials">
    <x-work-space>
        <div class="space-y-3">
            <x-header title="How to download your biodata on any device" description="1">
                <x-slot:header>
                    here's some tutorials, in case you need help.
                </x-slot:header>
            </x-header>

            <div class="px-2">
                <x-accordion name="tutorial">
                    <x-accordion-head heading="computer-heading" body="computer-body" show="true">
                        On Pc / Laptop
                    </x-accordion-head>
                    <x-accordion-body heading="computer-heading" body="computer-body">
                        <ol class="list-disc text-sm ml-5 text-gray-600 dark:text-gray-400 space-y-2">
                            <li>Pada menu biodata tekan icon titik 3 di kanan atas</li>
                            <li>Pilih preview</li>
                            {{-- <img src="{{  }}" alt="" srcset=""> --}}
                            <li>Anda akan diberi 2 opsi, pilih download secara otomatis atau manual</li>
                            <li>
                                jika anda memilih otomatis, maka biodata akan tersimpan di komputer anda secara
                                otomatis dengan nama file yang telah dibuat oleh sistem
                            </li>
                            <li>
                                tetapi jika anda memilih manual maka anda harus mengkonfigurasi beberapa hal seperti
                                dibawah ini :
                            </li>
                        </ol>
                    </x-accordion-body>
                    <x-accordion-head heading="android-heading" body="android-body" show="false">
                        On android
                    </x-accordion-head>
                    <x-accordion-body heading="android-heading" body="android-body">
                        <ol class="list-disc text-sm ml-5 text-gray-600 dark:text-gray-400 space-y-2">
                            <li>Pada menu biodata tekan icon titik 3 di kanan atas</li>
                            <li>Pilih preview</li>
                            {{-- <img src="{{  }}" alt="" srcset=""> --}}
                            <li>Anda akan diberi 2 opsi, pilih download secara otomatis atau manual</li>
                            <li>
                                jika anda memilih otomatis, maka biodata akan tersimpan di komputer anda secara
                                otomatis dengan nama file yang telah dibuat oleh sistem
                            </li>
                            <li>
                                tetapi jika anda memilih manual maka anda harus mengkonfigurasi beberapa hal seperti
                                dibawah ini :
                            </li>
                        </ol>
                    </x-accordion-body>
                    <x-accordion-head heading="iphone-heading" body="iphone-body" show="false">
                        On iphone
                    </x-accordion-head>
                    <x-accordion-body heading="iphone-heading" body="iphone-body">
                        <ol class="list-disc text-sm ml-5 text-gray-600 dark:text-gray-400 space-y-2">
                            <li>Pada menu biodata tekan icon titik 3 di kanan atas</li>
                            <li>Pilih preview</li>
                            {{-- <img src="{{  }}" alt="" srcset=""> --}}
                            <li>Anda akan diberi 2 opsi, pilih download secara otomatis atau manual</li>
                            <li>
                                jika anda memilih otomatis, maka biodata akan tersimpan di komputer anda secara
                                otomatis dengan nama file yang telah dibuat oleh sistem
                            </li>
                            <li>
                                tetapi jika anda memilih manual maka anda harus mengkonfigurasi beberapa hal seperti
                                dibawah ini :
                            </li>
                        </ol>
                    </x-accordion-body>
                </x-accordion>
            </div>
        </div>
    </x-work-space>
</x-auth-layout>
