<?php

use App\Http\Controllers\ClientsController;
use App\Livewire\Contragents\Index as ContragentsIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ClientsController::class)->group(function(){
    Route::get('pages/clients', 'index')->name('clients.index');
    Route::get('pages/clients/create', 'create')->name('clients.create');
    Route::post('pages/clients', 'store')->name('clients.store');
    Route::get('pages/clients/{clients}/edit/', 'edit');
    Route::put('pages/clients/{clients}', 'update');
    Route::get('pages/clients/delete/{id}', 'destroy');
});
Route::get('/contragents', ContragentsIndex::class);