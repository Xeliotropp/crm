<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContragentsController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::middleware(['auth'])->group(function () {
    Route::get('/crm/pages/clients', [ClientsController::class, 'index'])->name('clients.index');
    Route::get('/crm/pages/clients/create', [ClientsController::class, 'create'])->name('clients.create');
    Route::post('/crm/pages/clients', [ClientsController::class, 'store'])->name('clients.store');
    Route::get('/crm/pages/clients/{client}/edit', [ClientsController::class, 'edit'])->name('clients.edit');
    Route::put('/crm/pages/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');
    Route::get('/crm/pages/clients/delete/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
    Route::get('/crm/pages/clients/view/{id}', [ClientsController::class, 'view'])->name('pages.clients.view');


    Route::get('/crm/pages/contragents', [ContragentsController::class, 'index'])->name('contragents.index');
    Route::get('/crm/pages/contragents/create', [ContragentsController::class, 'create'])->name('contragents.create');
    Route::post('/crm/pages/contragents', [ContragentsController::class, 'store'])->name('contragents.store');
    Route::get('/crm/pages/contragents/{contragent}/edit', [ContragentsController::class, 'edit'])->name('contragents.edit');
    Route::put('/crm/pages/contragents/{id}', [ContragentsController::class, 'update'])->name('contragents.update');
    Route::get('/crm/pages/contragents/view/{id}', [ContragentsController::class, 'view'])->name('contragents.view');

    Route::get('/crm/pages/tasks', [TasksController::class,'index'])->name('pages.tasks.index');
    Route::get('/crm/pages/tasks/create', [TasksController::class,'create'])->name('pages.tasks.create');
    Route::post('/crm/pages/tasks', [TasksController::class, 'store'])->name('pages.tasks.store');
    Route::get('/crm/pages/tasks/{name}', [TasksController::class, 'getClientData'])->name('pages.tasks.getData');
    Route::get('/crm/pages/tasks/view/{id}', [TasksController::class, 'view'])->name('pages.tasks.view');
    Route::get('/crm/pages/tasks/{id}/edit', [TasksController::class, 'edit'])->name('pages.tasks.edit');
    Route::put('/crm/pages/tasks/{id}', [TasksController::class,'update'])->name('pages.tasks.update');
    Route::get('/crm/get-contragent-data/{id}', [TasksController::class, 'getContragentData'])->name('pages.tasks.getContragentData');
    Route::get('/crm/get-client-name/{id}', [TasksController::class, 'getClientName'])->name('get.client.name');
});
Auth::routes();

Route::get('/crm', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/crm');
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