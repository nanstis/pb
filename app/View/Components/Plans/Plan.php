<?php

namespace App\View\Components\Plans;

use App\Models\Plan as PlanModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Plan extends Component
{
    public function __construct(
        public PlanModel $plan,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.plans.plan');
    }
}
