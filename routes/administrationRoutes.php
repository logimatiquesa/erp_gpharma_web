<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoAdministrationController;

Route::prefix('administration')->group(function () {


    Route::get('/info_administration', [infoAdministrationController::class,'infoAdminView']);
    
});