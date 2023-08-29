@props([
    'text',
    'icon' => null
])

<div class="truncate py-2">
    <div x-data="{show: false}" class="relative inline-flex items-center">

        @if($icon)
            @svg($icon, 'h-5 w-5 mr-2')
        @endif
        <a href="#" @click="show = true" x-show="!show">{{$text}}</a>
        <div x-show="show" class="truncate">
            {{$slot}}
        </div>
    </div>
</div>

