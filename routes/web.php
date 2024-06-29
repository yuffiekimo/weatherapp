<?php

use App\Http\Controllers\Api\VenuesController;
use App\Http\Controllers\api\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('main');
});

Route::prefix('/api')->group(function () {

    Route::prefix('/venues')->group(function () {
        Route::get('/search', [VenuesController::class, 'search'])->name('api.venues.search');
        Route::get('/info', [VenuesController::class, 'info'])->name('api.venues.info');
    });

    Route::get('/weather', [WeatherController::class, 'forecast'])->name('api.weather');
});
