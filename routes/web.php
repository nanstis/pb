<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Models\Plan;


Route::view('/become-partner', 'pages.partner', [
    'plans' => Plan::all()
])->name('partner');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('advertisements', AdvertisementController::class)->except([
    'store', 'show', 'destroy', 'update'
]);

Route::get('/advertisements/', [AdvertisementController::class, 'index'])->name('advertisements.index');
Route::get('/advertisements/{partner:name}', [AdvertisementController::class, 'show'])->name('advertisements.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('partners', PartnerController::class);

    Route::post('/advertisements', [AdvertisementController::class, 'store'])->name('advertisements.store');
    Route::delete('/advertisements/{id}', [AdvertisementController::class, 'destroy'])->name('advertisements.destroy');
    Route::patch('/advertisements/{id}/restore', [AdvertisementController::class, 'restore'])->name('advertisements.restore');
});

