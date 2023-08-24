<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationItem extends Component
{
    public function __construct(
        public string $routeName,
        public string $title,
    ) {
        //
    }

    public function render(): View
    {
        return view('components.navigation-item');
    }
}
