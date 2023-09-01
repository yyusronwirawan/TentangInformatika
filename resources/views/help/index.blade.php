<x-auth-layout title="Help">
    <x-work-space>
        <div class="space-y-6">
            <x-header title="Helper" description="1">
                <x-slot:header>
                    if you got problem or some bugs, please capture it and contact our operators.
                </x-slot:header>
            </x-header>
            <div class="flex flex-wrap justify-evenly gap-5">
                @foreach ($operators as $item)
                    <div class="w-full max-w-[16rem] dark:bg-transparent p-5">
                        <div class="flex flex-col items-center">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                src="{{ asset('storage/' . $item->picture) }}" alt="Bonnie image" />
                            <h5 class="mb-1 text-lg font-medium text-gray-900 dark:text-white">{{ $item->name }}</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ 'operator' }}</span>
                            <div class="mt-4 md:mt-6">
                                <a href="https://wa.me/62{{ $item->whatsapp }}" target="_blank"
                                    class="inline-flex items-center gap-1 px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-xl shadow hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-500 dark:focus:ring-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        class="w-5 h-5">
                                        <path
                                            d="M6.579 8.121c.209-.663.778-1.457 1.19-1.66.183-.09.319-.11.763-.11.522 0 .548.005.684.14.088.095.328.606.673 1.432.292.71.533 1.315.533 1.347 0 .146-.293.61-.627 1.002-.23.267-.365.47-.365.543 0 .068.167.381.376.69.506.757 1.44 1.696 2.167 2.177.568.376 1.582.867 1.785.867.152 0 .429-.272.992-.982.23-.287.434-.495.512-.511.068-.021.235.005.37.057.392.152 2.371 1.117 2.476 1.211.203.188.037 1.264-.267 1.702-.464.68-1.79 1.259-2.663 1.17-.636-.068-2.14-.564-3.117-1.029-1.253-.6-2.574-1.697-3.644-3.038-.611-.763-1.227-1.692-1.493-2.246-.36-.751-.491-1.331-.455-2 .016-.287.068-.631.11-.762Z"
                                            fill="#25D366" />
                                        <path clip-rule="evenodd"
                                            d="M.606 9.5C1.582 4.491 5.576.76 10.709.06c.705-.1 2.684-.068 3.368.046.715.126 1.66.371 2.24.59 3.832 1.426 6.663 4.72 7.466 8.683.35 1.729.272 3.755-.203 5.457-1.133 4.03-4.423 7.205-8.511 8.218-2.663.658-5.462.37-7.983-.81l-.617-.292-3.226 1.029C1.473 23.545.01 23.994 0 23.983c-.01-.01.45-1.415 1.029-3.112l1.05-3.096-.424-.84C.48 14.569.12 12.01.605 9.498Zm21.172-.408c-1.028-3.76-4.297-6.626-8.145-7.148-2.099-.282-4.078.037-5.9.956-4.417 2.234-6.522 7.341-4.93 11.957.204.59.752 1.702 1.092 2.213l.271.408-.605 1.775a69.688 69.688 0 0 0-.606 1.817c0 .026.84-.224 1.864-.548a99.767 99.767 0 0 1 1.9-.596c.022 0 .225.11.45.24 2.428 1.447 5.456 1.76 8.187.852a9.927 9.927 0 0 0 6.48-6.945 9.998 9.998 0 0 0-.058-4.98Z"
                                            fill="#25D366" fill-rule="evenodd" />
                                    </svg>
                                    Message
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-work-space>
</x-auth-layout>
