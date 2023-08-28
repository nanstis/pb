<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/become-partner', [PartnerController::class, 'index'])->name('partners.index');


Route::resource('advertisements', AdvertisementController::class)->except([
    'store'
]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('partners', PartnerController::class)->except([
        'index', 'show'
    ]);

    Route::get('/partners/{name}', [PartnerController::class, 'show'])->name('partners.show');
    Route::post('/advertisements', [AdvertisementController::class, 'store'])->name('advertisements.store');
});

