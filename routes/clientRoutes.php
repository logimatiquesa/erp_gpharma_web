<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\loginController;

Route::prefix('client')->group(function () {

    Route::get('/listing', [clientController::class,'listingView']);
    Route::get('/listing/listingClient', [clientController::class,'listingClient']) -> name('listingClient');
    Route::get('/listing/infoClient', [clientController::class,'infoClient']) -> name('infoClient');

    Route::get('/listing/get', [clientController::class,'listingClient']) -> name('listingClient');

    // client garde
    Route::get('/clientsgarde', [clientController::class,'clientGarde']);
    Route::get('/clientsGarde/list', [clientController::class,'listeClientGarde']) -> name('listeClientGarde');
    Route::get('/clientGarde/list', [clientController::class,'listeClient']) -> name('listeClient');
    Route::post('/addclientGarde', [clientController::class,'addClientGarde']) -> name('addClientGarde');
    Route::post('/updateClientGarde', [clientController::class,'updateClientGarde']) -> name('updateClientGarde');
    Route::post('/deleteClientGarde', [clientController::class,'deleteClientGarde']) -> name('deleteClientGarde');

    // a revoir
    Route::post('/verifMdp', [loginController::class,'compareMdp']) -> name('compareMdp');
});
