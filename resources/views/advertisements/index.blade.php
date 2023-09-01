<x-app-layout>
    <x-application-card breadcrumb="advertisement">
        <!-- Listing -->
        <div class="grid grid-cols-12 mt-10">

            <!-- Categories -->
            <div class="col-span-2 mr-8">
                @include('advertisements.partials.filter')
            </div>

            <!-- Ads -->
            <div class="col-span-10">
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
    </x-application-card>
</x-app-layout>
