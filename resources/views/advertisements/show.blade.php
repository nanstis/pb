<x-app-layout>

    <x-application-card breadcrumb="advertisement.show" :param="$partner">
        <h1 class="sr-only">{{$partner->name}}</h1>
        <br>
        <div class="px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <!-- Main 3 column grid -->
            <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-3 lg:gap-8">
                <!-- Left column -->
                <div class="grid grid-cols-1 gap-4">
                    <section aria-labelledby="section-2-title">
                        <h2 class="sr-only" id="section-2-title">Section title</h2>
                        <div class="overflow-hidden rounded-lg bg-white shadow">
                            <!-- Details Card -->
                            <div class="text-center bg-primary text-white p-4">
                                {{__('pages/advertisement.details')}}
                            </div>
                            <div class="p-6 grid grid-cols-1">

                                <x-utils.click-show :text="__('form.phone')" icon="heroicon-o-phone-arrow-up-right">
                                    {{$partner->phone}}
                                </x-utils.click-show>

                                <x-utils.click-show :text="__('form.email')" icon="heroicon-o-envelope">
                                    {{$partner->email}}
                                </x-utils.click-show>

                                <x-utils.click-show :text="__('form.website')" icon="heroicon-o-globe-alt">
                                    <a href="{{$partner->website}}" target="_blank">{{$partner->website}}</a>
                                </x-utils.click-show>

                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right column -->
                <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                    <section aria-labelledby="section-1-title">
                        <h2 class="sr-only" id="section-1-title">Section title</h2>
                        <div class="overflow-hidden rounded-lg bg-white shadow">
                            <div class="p-6">
                                <x-tab.index :tabs="[
                                    __('pages/advertisement.show-description'),
                                    __('pages/advertisement.show-information'),
                                    __('pages/advertisement.show-schedules'),
                                    __('pages/advertisement.show-prices'),
                                    __('pages/advertisement.show-videos'),
                                ]">

                                    <!-- Description -->
                                    <x-tab.item :title="$partner->slogan">
                                        <p class="text-justify">{{$partner->description}}</p>
                                    </x-tab.item>

                                    <!-- Information -->
                                    <x-tab.item>
                                        Dank
                                    </x-tab.item>

                                    <!-- Schedules -->
                                    <x-tab.item>
                                        Dank
                                    </x-tab.item>
                                </x-tab.index>


                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </x-application-card>


</x-app-layout>

