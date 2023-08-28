<x-guest-layout>

    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[1280px]">
            <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">

                <!-- Listing -->
                <div class="grid grid-cols-5">

                    <!-- Categories -->
                    <div class="col-span-1 border-primary border">
                        List
                    </div>

                    <!-- Ads -->
                    <div class="col-span-4 border-primary border">
                        @foreach($ads as $ad)
                            <div class="max-h-[180px] overflow-hidden">
                                <div class="grid grid-cols-6">
                                    <div class="col-span-2">
                                        <img class="object-cover"
                                             src="{{Vite::image('placeholder.png')}}"
                                             alt="{{$ad->partner->description}}">
                                    </div>
                                    <div class="row-span-2 col-span-4">
                                        <h2 class="text-xl mb-4 border-2">{{ucfirst($ad->partner->name)}}</h2>
                                        <p>{{$ad->partner->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>


            </div>
        </div>
    </div>


</x-guest-layout>
