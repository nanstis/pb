<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;

// Remove For Fresh Migration
Route::view('/become-partner', 'pages.partner', [
    // 'plans' => Plan::all()
])->name('partner');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('advertisements', AdvertisementController::class)->except([
    'store', 'show', 'destroy', 'update'
]);

Route::get('/advertisements', [AdvertisementController::class, 'index'])->name('advertisements.index');
Route::get('/advertisements/{category:en}', [AdvertisementController::class, 'category'])->name('advertisements.category');
Route::get('/advertisements/{category:en}/{categoryChild:en}', [AdvertisementController::class, 'categoryChild'])->name('advertisements.categoryChild');

Route::get('/advertisements/{partner:name}', [AdvertisementController::class, 'show'])->name('advertisements.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('partners', PartnerController::class);

    Route::post('/advertisements', [AdvertisementController::class, 'store'])->name('advertisements.store');
    Route::put('/advertisements', [AdvertisementController::class, 'update'])->name('advertisements.update');
    Route::delete('/advertisements/{id}', [AdvertisementController::class, 'destroy'])->name('advertisements.destroy');
    Route::patch('/advertisements/{id}/restore', [AdvertisementController::class, 'restore'])->name('advertisements.restore');
});

