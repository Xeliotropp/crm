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
Route::put('/pages/clients/{client}/update', [ClientsController::class, 'update'])->name('clients.update');

//Route::resource('pages/contragents', ContragentsController::class);

Route::get('/pages/contragents', [ContragentsController::class, 'index'])->name('contragents.index');
Route::get('/pages/contragents/create', [ContragentsController::class, 'create'])->name('contragents.create');
Route::post('/pages/contragents', [ContragentsController::class, 'store'])->name('contragents.store');
Route::get('/pages/contragents/{client}/edit', [ContragentsController::class, 'edit'])->name('contragents.edit');
Route::put('/pages/contragents/{client}/update', [ContragentsController::class, 'update'])->name('contragents.update');