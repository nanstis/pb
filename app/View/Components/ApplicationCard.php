<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class ApplicationCard extends Component
{
    public function __construct(
        public string     $breadcrumb,
        public Model|null $param = null,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.application-card');
    }
}
