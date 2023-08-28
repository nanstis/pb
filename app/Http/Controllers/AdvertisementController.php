<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Models\Advertisement;
use Illuminate\Contracts\View\View;

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

    public function show(Advertisement $advertisement)
    {
        //
    }

    public function edit(Advertisement $advertisement)
    {
        //
    }

    public function update(UpdateAdvertisementRequest $request, Advertisement $advertisement)
    {
        //
    }

    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
