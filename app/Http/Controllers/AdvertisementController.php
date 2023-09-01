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
        $ads = Advertisement::active()->get()->collect();
        $categories = $request->input('categories');
        $children = $request->input('children');

        if ($categories) {
            $ads = $ads->filter(function (Advertisement $advertisement) use ($categories) {
                return $advertisement->categories()
                    ->whereIn('category_id', $categories)
                    ->get()->isNotEmpty();
            });
        }

        return view('advertisements.index', [
            'ads' => $ads,
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
