<x-accordion name="timeline">
    <x-accordion-head heading="timline-heading" body="timline-body" show="true"
        class="flex items-center justify-between w-full font-medium text-left text-gray-500 focus:ring-4 focus:ring-white dark:focus:ring-0 dark:border-gray-700 dark:text-gray-400 hover:bg-white dark:hover:bg-transparent">
        <x-header title="Registration Progress" description="2">
            <x-slot:header>
                @isset($user->registration_completed)
                    <span class="text-gray-900 dark:text-gray-400">
                        this is your registration information status <span class="text-green-500 font-bold">(complete)</span>
                    </span>
                @else
                    <span class="text-gray-900 dark:text-gray-400">
                        this is your registration information status <span class="text-red-600 font-bold">(incomplete)</span>
                    </span>
                @endisset
            </x-slot:header>
        </x-header>
    </x-accordion-head>
    <x-accordion-body heading="timline-heading" body="timline-body" class="mt-5">
        <ol class="relative border-l border-gray-200 dark:border-gray-700">
            <x-timeline-list active>
                <x-slot:time>
                    {{ 'completed ' . \Carbon\Carbon::parse($user->account_registration_time)->diffForHumans() }}
                </x-slot:time>
                <x-slot:title>
                    Account Registration
                </x-slot:title>
                <x-slot:body>
                    you have successfully created an account, the next step is to create your biodata.
                </x-slot:body>
            </x-timeline-list>
            @isset($user->create_biodata)
                <x-timeline-list active>
                    <x-slot:time>
                        {{ 'completed ' . \Carbon\Carbon::parse($user->create_biodata_time)->diffForHumans() }}
                    </x-slot:time>
                    <x-slot:title>
                        Create Biodata
                    </x-slot:title>
                    <x-slot:body>
                        you have successfully created your biodata, the next step is to update your biodata.
                    </x-slot:body>
                </x-timeline-list>
            @else
                <x-timeline-list>
                    <x-slot:time>
                        incompleted
                    </x-slot:time>
                    <x-slot:title>
                        Create Biodata
                    </x-slot:title>
                    <x-slot:body>
                        To complete this step, you must first create your biodata.
                    </x-slot:body>
                </x-timeline-list>
            @endisset
            @isset($user->update_biodata)
                <x-timeline-list active>
                    <x-slot:time>
                        {{ 'completed ' . \Carbon\Carbon::parse($user->update_biodata_time)->diffForHumans() }}
                    </x-slot:time>
                    <x-slot:title>
                        Update Biodata
                    </x-slot:title>
                    <x-slot:body>
                        you have successfully update your biodata, the next step is to download your biodata but
                        make sure you <span class="font-bold">fill all columns</span>.
                    </x-slot:body>
                </x-timeline-list>
            @else
                <x-timeline-list>
                    <x-slot:time>
                        incompleted
                    </x-slot:time>
                    <x-slot:title>
                        Update Biodata
                    </x-slot:title>
                    <x-slot:body>
                        To complete this step, you must update your biodata.
                    </x-slot:body>
                </x-timeline-list>
            @endisset
            @isset($user->download_biodata)
                <x-timeline-list active>
                    <x-slot:time>
                        {{ 'completed ' . \Carbon\Carbon::parse($user->download_biodata_time)->diffForHumans() }}
                    </x-slot:time>
                    <x-slot:title>
                        Download Biodata
                    </x-slot:title>
                    <x-slot:body>
                        you have successfully download your biodata, we will contact you for the next step!
                    </x-slot:body>
                </x-timeline-list>
            @else
                <x-timeline-list>
                    <x-slot:time>
                        incompleted
                    </x-slot:time>
                    <x-slot:title>
                        Download Biodata
                    </x-slot:title>
                    <x-slot:body>
                        To complete this step, you must download your biodata.
                    </x-slot:body>
                </x-timeline-list>
            @endisset
            @isset($user->interview_session)
                <x-timeline-list active>
                    <x-slot:time>
                        {{ 'completed ' . \Carbon\Carbon::parse($user->interview_session_time)->diffForHumans() }}
                    </x-slot:time>
                    <x-slot:title>
                        Interview
                    </x-slot:title>
                    <x-slot:body>
                        you have successfully complete the interview stage, thanks for your cooperation.
                    </x-slot:body>
                </x-timeline-list>
            @else
                <x-timeline-list>
                    <x-slot:time>
                        incompleted
                    </x-slot:time>
                    <x-slot:title>
                        Interview
                    </x-slot:title>
                    <x-slot:body>
                        The biodata that you have downloaded will be a requirement to participate in the
                        interview stage. We will contact you for a interview date.
                    </x-slot:body>
                </x-timeline-list>
            @endisset
            @isset($user->registration_completed)
                <x-timeline-list active>
                    <x-slot:time>
                        {{ 'completed ' . \Carbon\Carbon::parse($user->registration_completed_time)->diffForHumans() }}
                    </x-slot:time>
                    <x-slot:title>
                        Registration Completed
                    </x-slot:title>
                    <x-slot:body>
                        you have successfully completed all registration steps, congratulation you are now verified
                        registrant. thanks for your cooperation!
                    </x-slot:body>
                </x-timeline-list>
            @else
                <x-timeline-list>
                    <x-slot:time>
                        incompleted
                    </x-slot:time>
                    <x-slot:title>
                        Registration Completed
                    </x-slot:title>
                    <x-slot:body>
                        You will be verified after you complete the interview stage.
                    </x-slot:body>
                </x-timeline-list>
            @endisset
        </ol>
    </x-accordion-body>
</x-accordion>
