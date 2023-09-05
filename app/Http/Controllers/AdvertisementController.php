<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\CategoryChild;
use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index(Request $request): View
    {
        $ads = Advertisement::active()->get()->collect();

        return view('advertisements.index', [
            'ads' => $ads,
            'categories' => Category::all(),
            'activeCategory' => 1,
        ]);
    }

    public function category(Category $category): View
    {
        $ads = $category->advertisements;

        return view('advertisements.index', [
            'ads' => $ads,
            'categories' => Category::all(),
            'activeCategory' => 1,
        ]);
    }

    public function categoryChild(Category $category, string $item): View
    {
        $child = $category->children()->where('en', $item)->first();
        $ads = $child->advertisements;

        return view('advertisements.index', [
            'ads' => $ads,
            'categories' => Category::all(),
            'activeCategory' => 1,
        ]);
    }


    public function store(StoreAdvertisementRequest $request)
    {
        $validated = $request->validated();

        $advertisement = new Advertisement($validated);
        $advertisement->save();

        return redirect()->route('profile.show');
    }

    public function show(Partner $partner): View
    {
        return view('advertisements.show', [
            'partner' => $partner,
        ]);
    }

    public function update(UpdatePartnerRequest $request, Advertisement $advertisement)
    {
        $request->validated();
        $items = $request->input('items');

        $toSync = CategoryChild::whereIn('id', $items)->get()
            ->map(fn(CategoryChild $item) => $item->category_id);

        $advertisement->categoryChildren()->sync($items);

        return redirect()->back()->with('success-update-partner', __('notification.success-update-partner'));
    }

    public function destroy(int $id): RedirectResponse
    {
        Advertisement::find($id)->delete();
        return redirect()->back()->with('success-destroy-advertisement', __('notification.success-destroy-advertisement'));
    }

    public function restore(int $id): RedirectResponse
    {
        Advertisement::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success-restore-advertisement', __('notification.success-restore-advertisement'));
    }

}
