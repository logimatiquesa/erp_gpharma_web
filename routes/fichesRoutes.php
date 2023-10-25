<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fournisseursController;

Route::prefix('fiches')->group(function () {
    // Fournisseurs
    Route::get('/fournisseur', [ fournisseursController::class, 'fournisseursView'])->name('fournisseur.view');
    Route::post('/fournisseur', [ fournisseursController::class, 'fournisseursAdd'])->name('fournisseur.add');
    Route::get('/fournisseurListe', [ fournisseursController::class, 'fournisseursListe'])->name('fournisseur.liste');
    Route::get('/fournisseurDetail', [ fournisseursController::class, 'fournisseursDetail'])->name('fournisseur.detail');
    Route::get('/fournisseurDelete', [ fournisseursController::class, 'fournisseursDelete'])->name('fournisseur.delete');

    Route::get('/listePays', [ fournisseursController::class, 'listePays'])->name('fournisseur.listePays');
    Route::get('/bureauAchat', [ fournisseursController::class, 'bureauAchat'])->name('fournisseur.bureauAchat');
});