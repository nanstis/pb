<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use App\Models\State;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::whereBelongsTo(Auth::user())->get();

        return view('partners.index', [
            'partners' => $partners
        ]);
    }

    public function create()
    {
        return view('partners.create', [
            'states' => State::all()
        ]);
    }

    public function store(StorePartnerRequest $request)
    {
        $validated = $request->validated();

        $partner = new Partner($validated);
        $partner->user_id = Auth::id();
        $partner->save();

        return redirect()->route('partners.index');
    }


    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
