<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[880px] bg-white">
    <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">

        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">{{$title}}</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500"></p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                {{$slot}}
            </dl>
        </div>
    </div>
</div>
