<x-app-layout>

    <x-utils.notification session-key="success-destroy-advertisement"/>
    <x-utils.notification session-key="success-restore-advertisement"/>

    <x-application-card breadcrumb="partner.show" :param="$partner">


        <div class="grid grid-cols-6">
            <div>
                <x-dashboard.advertisement-status :partner="$partner"/>
            </div>

            <div>
                <x-dashboard.advertisement-category :partner="$partner"/>
            </div>
        </div>

    </x-application-card>


    <div class="m-4">


    </div>

    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <x-card title="Company">


            <x-utils.notification session-key="success" message="Dank" type="info"/>


            <x-card.item label="Company name" :text="$partner->name"/>
        </x-card>
    </div>

</x-app-layout>


