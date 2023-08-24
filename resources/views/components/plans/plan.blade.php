<div
    class="shadow-lg bg-white max-w-4xl relative hover:transform transition ease-in-out  hover:-translate-y-1 hover:scale-110 duration-50">
    <h3 {{$attributes->class(['plan-title', 'bg-plan-'.$plan->name])}}>{{strtoupper($plan->name)}}</h3>

    <div class="p-8 h-72">
        <p class="mt-4 text-sm leading-6 text-gray-600">
        </p>


        <!-- Options -->
        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 mb-2">

            <div class="border-primary border-2">
                @foreach($plan->planOptions as $key => $option)
                    @php
                        $category = $option->categories_count . ' ' . __('plan.category') . ' (' . $option->sub_categories_count . ' ' . __('plan.sub_category') . ')';
                    @endphp

                    <x-plans.plan-item :text="$category"/>

                @endforeach
            </div>

            <x-plans.plan-item :text="$plan->photos . ' photos'"/>
            @if($plan->video == 1)
                <x-plans.plan-item text="Video"/>
            @endif

            @if($plan->direct == 1)
                <x-plans.plan-item :text="__('plan.request')"/>
            @endif
        </ul>
    </div>

    <hr>

    <!-- Price -->
    <div {{$attributes->class(['', 'text-plan-'.$plan->name])}}>
        <p class="mt-6 flex items-baseline gap-x-1 p-4">
            <span
                class="text-4xl font-bold tracking-tight">CHF {{$plan->price}}</span>
            <span class="text-sm font-semibold leading-6 text-gray-600">/{{__('plan.payment_schedule')}}</span>
        </p>
    </div>
</div>
