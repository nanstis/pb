@props([
    'name',
    'label',
])
<div>
    <label for="{{$name}}" class="block text-sm font-medium leading-6 text-gray-900">
        {{$label}}
    </label>

    <div class="relative mt-2 rounded-md shadow-sm">
        <select id="{{$name}}"
                name="{{$name}}"
                autocomplete="{{$name}}"
                class="input @error($name) ring-1 ring-inset ring-red-300 placeholder:text-red-300 focus:ring-2 focus:ring-inset focus:ring-red-500 @enderror">

            <option value="" selected disabled>----</option>
            {{$slot}}
        </select>
    </div>
    <x-forms.error field="state"/>
</div>

