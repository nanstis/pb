<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('advertisements', AdvertisementController::class);

Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/partners/show/{id}', [PartnerController::class, 'show'])->name('partners.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('partners', PartnerController::class)->except([
        'index',
        'show',
    ]);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
