<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;

Route::prefix('client')->group(function () {

    Route::get('/listing', [clientController::class,'listingView']);
    Route::get('/listing/listingClient', [clientController::class,'listingClient']) -> name('listingClient');
    Route::get('/listing/infoClient', [clientController::class,'infoClient']) -> name('infoClient');
});