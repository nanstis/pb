<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index(Request $request): View
    {
        $categories = $request->input('categories');
        $children = $request->input('children');

        if ($categories || $children) {
            $ads = Advertisement::active()->get()->map(function ($ad) use ($categories, $children) {
                $categories = $ad->partner->categories;
                $children = $ad->partner->children;
                if ($categories->isEmpty() && $children->isEmpty()) return false;

                return $ad->partner->categories->contains('id', $categories) || $ad->partner->children->contains('id', $children);
            });
        } else {
            $ads = Advertisement::active()->get();
        }

        return view('advertisements.index', [
            'ads' => $ads->all(),
            'categories' => Category::all(),
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
