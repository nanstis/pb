<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    public function index()
    {
        return view('advertisements.index');
    }

    public function create()
    {
        //
    }

    public function store(StoreAdvertisementRequest $request)
    {
        //
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
