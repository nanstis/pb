@props([
    'title',
    'items'
])

<fieldset>
    <legend
        class="text-base font-semibold leading-6 text-gray-900">
        {{$title}}
    </legend>
    <div class="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">
        @foreach($items as $item)
            <div class="relative flex items-start py-4">
                <div class="min-w-0 flex-1 text-sm leading-6">
                    <label for="{{$item->name}}" class="checkbox-label">
                        {{$item->label}}
                    </label>
                </div>
                <div class="ml-3 flex h-6 items-center">
                    <input id="{{$item->name}}" name="{{$item->name}}" type="checkbox"
                           class="checkbox">
                </div>
            </div>
        @endforeach
    </div>
</fieldset>
