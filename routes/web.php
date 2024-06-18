<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContragentsController;
use App\Livewire\Contragents\Index as ContragentsIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('pages')->group(function(){
    Route::controller(ClientsController::class)->group(function(){
        Route::get('/clients', 'index')->name('clients.index');
        Route::get('/clients/create', 'create')->name('clients.create');
        Route::post('/clients', 'store')->name('clients.store');
        Route::get('/clients/{clients}/edit/', 'edit')->name('clients.edit');;
        Route::put('/clients/{clients}', 'update') -> name('clients.update');
        Route::get('/clients/delete/{id}', 'destroy');
    });
});

Route::controller(ContragentsController::class)->group(function(){
    Route::get('/pages/contragents', 'index')->name('contragents.index');
    Route::get('/pages/contragents/create', 'create')->name('contragents.create');
    Route::post('/pages/contragents', 'store')->name('contragents.store');
    Route::get('/pages/contragents/{id}/edit', 'edit')->name('contragents.edit');
    Route::put('/pages/contragents/{id}', 'update')->name('contragents.update');
    Route::delete('/pages/contragents/{id}', 'destroy')->name('contragents.destroy');
});