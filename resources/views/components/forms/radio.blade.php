@props([
    'label',
    'name',
    'value',
    'checked' => false
])

<div class="relative flex items-start py-4">
    <div class="ml-3 flex h-6 items-center mr-4">
        <input id="{{$label}}"
               name="{{$name}}"
               type="radio"
               value="{{$value}}"
               {{$checked ? 'checked' : ''}}
               class="h-4 w-4 border-gray-300 text-primary focus:ring-primary"
        >
    </div>

    <div class="min-w-0 flex-1 text-sm leading-6">
        <label for="{{$label}}" class="select-none font-medium text-gray-900">{!! $label !!}</label>
    </div>

</div>
