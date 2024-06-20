<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContragentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/pages/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/pages/clients/create', [ClientsController::class, 'create'])->name('clients.create');
Route::post('/pages/clients', [ClientsController::class, 'store'])->name('clients.store');
Route::get('/pages/clients/{client}/edit', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/pages/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');
Route::get('/pages/clients/delete/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');


Route::get('/pages/contragents', [ContragentsController::class, 'index'])->name('contragents.index');
Route::get('/pages/contragents/create', [ContragentsController::class, 'create'])->name('contragents.create');
Route::post('/pages/contragents', [ContragentsController::class, 'store'])->name('contragents.store');
Route::get('/pages/contragents/{contragent}/edit', [ContragentsController::class, 'edit'])->name('contragents.edit');
Route::put('/pages/contragents/{id}', [ContragentsController::class, 'update'])->name('contragents.update');