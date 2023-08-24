@props([
    'type' => 'button',
    'route' => null,
    'icon' => null,
    'animation' => null,
    'iconClass' => ''
])

<a href="{{$route ? route($route) : '#'}}">
    <button type="{{$type}}" class="@if($animation) {{'btn-'.$animation}} @endif btn btn-primary">
        @if($icon)
            @svg($icon, $iconClass)
        @endif
        {{$slot}}
    </button>
</a>
