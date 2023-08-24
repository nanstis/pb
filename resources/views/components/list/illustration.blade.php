@props([
    'image',
    'title',
    'subTitle'
])

<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:ml-auto lg:pl-4 lg:pt-4">
                <div class="lg:max-w-lg">
                    <h2 class="text-base font-semibold leading-7 text-primary">{{$subTitle}}</h2>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-700 sm:text-3xl">
                        {{$title}}
                    </p>

                    <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                        {{$slot}}
                    </dl>
                </div>
            </div>
            <div class="flex items-start justify-end lg:order-first">
                <img src="{{Vite::image($image)}}" alt=""
                     class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                     width="2432" height="1442">
            </div>
        </div>
    </div>
</div>
