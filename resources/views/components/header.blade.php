@props(['tiny' => false])

<div class="relative">
    <img src="{{Vite::image('header.jpg')}}" alt="{{__('alt.header')}}"
        {{ $attributes->class([
           'object-cover',
           'w-full',
           'brightness-50',
           'h-72' => $tiny]) }}
    />

    <div class="absolute top-1/3 px-4 py-3 w-full text-white text-center">
        {{$slot}}
    </div>
</div>
