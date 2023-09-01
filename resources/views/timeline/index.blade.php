<x-auth-layout title="Activity Progress">
    <x-work-space>
        @hasanyrole(['operator', 'admin'])
            <div id="operator-accordion" data-accordion="collapse"
                data-active-classes="dark:bg-transparent text-gray-900 dark:text-white">
                <h2 id="operator-accordion-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full font-medium text-left text-gray-500  focus:ring-0 focus:ring-white dark:focus:ring-0 dark:border-gray-700 dark:text-gray-400 hover:bg-white dark:hover:bg-transparent"
                        data-accordion-target="#operator-accordion-body-1" aria-expanded="true"
                        aria-controls="operator-accordion-body-1">
                        <span>
                            <x-header title="Registrant Information">
                                <x-slot:header>
                                    this is all registrant information.
                                </x-slot:header>
                            </x-header>
                        </span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="operator-accordion-body-1" class="hidden mt-5" aria-labelledby="operator-accordion-heading-1">
                    <div>
                        <ol class="relative border-l border-gray-200 dark:border-gray-700">
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-green-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-green-900 dark:bg-green-400">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    Registrant total : {{ App\Models\User::doesntHave('roles')->count() }}
                                </h3>
                                <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    This is the total number of users who have registered.
                                </p>
                            </li>
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-green-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-green-900 dark:bg-green-400">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    Registrant does fill biodata :
                                    {{ App\Models\User::doesntHave('roles')->has('biodata')->count() }}
                                </h3>
                                <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    This is the total registrant who have biodata.
                                </p>
                            </li>
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-green-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-green-900 dark:bg-green-400">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    Registrant doesn't fill biodata :
                                    {{ App\Models\User::doesntHave('roles')->doesntHave('biodata')->count() }}
                                </h3>
                                <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    This is the total registrant who doesn't have biodata.
                                </p>
                            </li>
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-green-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-green-900 dark:bg-green-400">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    Verified registrant :
                                    {{ App\Models\User::doesntHave('roles')->where('has_verified', 1)->count() }}
                                </h3>
                                <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    This is the total registrant, who have been verified by operator.
                                </p>
                            </li>
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-green-400 rounded-full mt-1.5 -left-1.5 border border-white dark:border-green-900 dark:bg-green-400">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    Unverified registrant :
                                    {{ App\Models\User::doesntHave('roles')->where('has_verified', 0)->count() }}
                                </h3>
                                <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    This is the total registrant, who have not been verified.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        @else
            @php
                $user = auth()->user()->registrantActivity;
            @endphp
            <x-timeline :user="$user" />
        @endhasanyrole
    </x-work-space>
</x-auth-layout>
