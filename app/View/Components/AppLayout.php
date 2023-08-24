<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function __construct(
        // reference (h-(x)) : https://tailwindcss.com/docs/height
        public ?int $headerHeight = null,
        public bool $showHeader = true
    )
    {
        //
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
