<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContragentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Livewire\Clients\View as ClientView;

Route::middleware(['auth'])->group(function () {
    Route::get('/pages/clients', [ClientsController::class, 'index'])->name('clients.index');
    Route::get('/pages/clients/create', [ClientsController::class, 'create'])->name('clients.create');
    Route::post('/pages/clients', [ClientsController::class, 'store'])->name('clients.store');
    Route::get('/pages/clients/client/{client}', [ClientView::class,'render'])->name('client.view');
    Route::get('/pages/clients/{client}/edit', [ClientsController::class, 'edit'])->name('clients.edit');
    Route::put('/pages/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');
    Route::get('/pages/clients/delete/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');


    Route::get('/pages/contragents', [ContragentsController::class, 'index'])->name('contragents.index');
    Route::get('/pages/contragents/create', [ContragentsController::class, 'create'])->name('contragents.create');
    Route::post('/pages/contragents', [ContragentsController::class, 'store'])->name('contragents.store');
    Route::get('/pages/contragents/{contragent}/edit', [ContragentsController::class, 'edit'])->name('contragents.edit');
    Route::put('/pages/contragents/{id}', [ContragentsController::class, 'update'])->name('contragents.update');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

/*
|--------------------------------------------------------------------------
| Resending Authentication Email
|--------------------------------------------------------------------------
 */
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Изпратен е линк за потвърждение!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');