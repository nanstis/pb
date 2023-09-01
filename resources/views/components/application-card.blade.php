@if(!$param)
    {{ Breadcrumbs::render($breadcrumb) }}
@else
    {{ Breadcrumbs::render($breadcrumb, $param) }}
@endif

<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full m-20 bg-white">
        <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <x-application-logo/>
            </div>

            {{$slot}}
        </div>
    </div>
</div>
