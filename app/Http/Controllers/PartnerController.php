<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Models\Category;
use App\Models\Partner;
use App\Models\State;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PartnerController extends Controller
{
    public function index(): View
    {
        $partners = Auth::user()->partners;

        return view('partners.index', [
            'partners' => $partners
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

        $partnerships = Auth::user()->partners->map(fn(Partner $p) => $p->name);

        return view('partners.show', [
            'partner' => $partner,
            'partnerships' => $partnerships,
            'categories' => Category::all()
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


    public function destroy(Partner $partner)
    {
        //
    }
}
