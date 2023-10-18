<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;

Route::prefix('client')->group(function () {

    Route::get('/listing', [clientController::class,'listingView']);
    Route::get('/listing/get', [clientController::class,'listingClient']) -> name('listingClient');
});