<x-app-layout>
    {{ Breadcrumbs::render('advertisement') }}

    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[1280px]">
            <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">

                <!-- Listing -->
                <div class="grid grid-cols-6">

                    <!-- Categories -->
                    <div class="col-span-2 mr-10">
                        @include('advertisements.partials.filter')
                    </div>

                    <!-- Ads -->
                    <div class="col-span-4">
                        @foreach($ads as $ad)
                            @php($partner = $ad->partner)

                            <a href="{{route('advertisements.show', $partner)}}">
                                <div class="max-h-[180px] overflow-hidden mb-4 border">
                                    <div class="grid grid-cols-6">
                                        <!-- Image -->
                                        <div class="col-span-2">
                                            <img class="object-cover"
                                                 src="{{Vite::image('placeholder.png')}}"
                                                 alt="{{$partner->description}}">
                                        </div>

                                        <!-- Content -->
                                        <div class="row-span-2 col-span-4">
                                            <div class="m-6">
                                                <h2 class="text-lg text-primary font-semibold">{{strtoupper($partner->name)}}</h2>
                                                <div class="inline-flex items-center text-sm">
                                                    @svg('heroicon-o-map-pin', 'm-1')
                                                    <span>
                                                    {{ucfirst($partner->state)}},
                                                    {{$partner->address}},
                                                    {{$partner->zip}}
                                                        {{$partner->city}}
                                                </span>
                                                </div>

                                                <hr>
                                                <p class="text-ellipsis overflow-hidden mt-4">{{$ad->partner->summary}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
