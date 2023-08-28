<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use App\Models\Plan;
use App\Models\State;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PartnerController extends Controller
{
    public function index(): View
    {
        return view('partners.index', [
            'plans' => Plan::all()
        ]);
    }

    public function create(): View
    {
        return view('partners.create', [
            'states' => State::all()
        ]);
    }

    public function show(string $name): View
    {
        $partner = Partner::where('name', $name)->firstOrFail();
        Gate::authorize('view', $partner);

        return view('partners.show', [
            'partner' => $partner
        ]);
    }

    public function store(StorePartnerRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $partner = new Partner($validated);
        $partner->user_id = Auth::id();
        $partner->save();

        return redirect()->route('partners.show');
    }

    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
