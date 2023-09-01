<?php

namespace App\View\Components\Dashboard;

use App\Models\Advertisement;
use App\Models\Partner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdvertisementStatus extends Component
{
    public Advertisement|null $advertisement;
    public bool $isTrashed = false;

    public function __construct(
        public Partner $partner,
    )
    {
        $this->advertisement = $partner->advertisement;
        if ($this->advertisement) {
            $this->isTrashed = $this->advertisement->deleted_at !== null;
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.dashboard.advertisement-status');
    }
}
