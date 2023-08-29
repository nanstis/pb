<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/become-partner', [PartnerController::class, 'index'])->name('partners.index');


Route::resource('advertisements', AdvertisementController::class)->except([
    'store', 'show', 'destroy', 'update'
]);

Route::get('/advertisements/{partner:name}', [AdvertisementController::class, 'show'])->name('advertisements.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('partners', PartnerController::class)->except([
        'index',
    ]);

    Route::post('/advertisements', [AdvertisementController::class, 'store'])->name('advertisements.store');
    Route::put('/advertisements/{id}', [AdvertisementController::class, 'update'])->name('advertisements.update');
    Route::delete('/advertisements/{id}', [AdvertisementController::class, 'destroy'])->name('advertisements.destroy');
});

