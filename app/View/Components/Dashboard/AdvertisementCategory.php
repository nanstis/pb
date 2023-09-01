<?php

namespace App\View\Components\Dashboard;

use App\Models\Category;
use App\Models\Partner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class AdvertisementCategory extends Component
{
    public Collection $categories;
    public Collection $activeCategories;
    public Collection $activeCategoryChildren;

    public function __construct(
        public Partner $partner,
    )
    {
        $this->categories = Category::all();
        $this->activeCategories = $partner->advertisement->categories->map(fn($e) => $e->id)->flip();
        $this->activeCategoryChildren = $partner->advertisement->categoryChildren->map(fn($e) => $e->id)->flip();
    }

    public function render(): View|Closure|string
    {
        return view('components.dashboard.advertisement-category');
    }
}
