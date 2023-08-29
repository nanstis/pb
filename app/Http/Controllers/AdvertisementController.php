<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index(): View
    {
        $ads = Advertisement::active()->get();

        return view('advertisements.index', [
            'ads' => $ads->all(),
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


    public function edit(Advertisement $advertisement)
    {
        //
    }

    public function update(UpdateAdvertisementRequest $request, Advertisement $advertisement)
    {
        $validated = $request->validated();

        $ad = Advertisement::find($validated['id']);
        dd($ad);
    }

    public function destroy(int $id): RedirectResponse
    {
        Advertisement::find($id)->delete();
        return redirect()->back()->with('success', 'Advertisement deleted successfully');
    }

    public function restore(Request $request)
    {
        dd($request->all());
    }

}
