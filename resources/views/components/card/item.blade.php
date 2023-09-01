@props([
    'label',
    'text',
])


<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 font-ibm">
    <dt class="leading-7 text-gray-800 text-base font-bold">{{strtoupper($label)}}</dt>
    <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
        <span class="flex-grow">{{$text}}</span>
        <span class="ml-4 flex-shrink-0">
            {{$slot}}
        </span>
    </dd>
</div>
