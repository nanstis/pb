@props([
    'label',
    'name',
    'value',
    'key' => null,
    'checked' => false
])

<div class="relative flex items-start">
    <div class="mr-3 flex h-6 items-center">
        <input id="{{$key ? $name.$label.$key : $name.$label}}"
               name="{{$name}}"
               value="{{$value}}"
               type="checkbox"
               class="checkbox"
            {{$checked ? 'checked' : ''}} />


    </div>
    <div class="min-w-0 flex-1 text-sm leading-6">
        <label for="{{$key ? $name.$label.$key : $name.$label}}" class="checkbox-label">
            {{$label}}
        </label>
    </div>
</div>
