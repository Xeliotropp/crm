<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContragentsController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::prefix('crm')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/');
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
    Route::middleware(['auth'])->group(function () {
        Route::get('/pages/clients', [ClientsController::class, 'index'])->name('clients.index');
        Route::get('/pages/clients/create', [ClientsController::class, 'create'])->name('clients.create');
        Route::post('/pages/clients', [ClientsController::class, 'store'])->name('clients.store');
        Route::get('/pages/clients/{client}/edit', [ClientsController::class, 'edit'])->name('clients.edit');
        Route::put('/pages/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');
        Route::get('/pages/clients/delete/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
        Route::get('/pages/clients/view/{id}', [ClientsController::class, 'view'])->name('pages.clients.view');


        Route::get('/pages/contragents', [ContragentsController::class, 'index'])->name('contragents.index');
        Route::get('/pages/contragents/create', [ContragentsController::class, 'create'])->name('contragents.create');
        Route::post('/pages/contragents', [ContragentsController::class, 'store'])->name('contragents.store');
        Route::get('/pages/contragents/{contragent}/edit', [ContragentsController::class, 'edit'])->name('contragents.edit');
        Route::put('/pages/contragents/{id}', [ContragentsController::class, 'update'])->name('contragents.update');
        Route::get('/pages/contragents/view/{id}', [ContragentsController::class, 'view'])->name('contragents.view');

        Route::get('/pages/tasks', [TasksController::class, 'index'])->name('pages.tasks.index');
        Route::get('/pages/tasks/create', [TasksController::class, 'create'])->name('pages.tasks.create');
        Route::get('/pages/tasks/action', [TasksController::class, 'action'])->name('pages.tasks.action');
        Route::post('/pages/tasks', [TasksController::class, 'store'])->name('pages.tasks.store');
        Route::get('/pages/tasks/view/{id}', [TasksController::class, 'view'])->name('pages.tasks.view');
        Route::get('/pages/tasks/{id}/edit', [TasksController::class, 'edit'])->name('pages.tasks.edit');
        Route::put('/pages/tasks/{id}', [TasksController::class, 'update'])->name('pages.tasks.update');
        Route::get('/pages/tasks/delete/{id}', [TasksController::class, 'destroy'])->name('pages.tasks.destroy');
        Route::get('/tasks/get-contragent-data', [TasksController::class, 'getContragentData'])->name('pages.tasks.getContragentData');
        Route::get('/get-client-name/{id}', [TasksController::class, 'getClientName'])->name('get.client.name');
        Route::get('/tasks/get-data', [TasksController::class, 'getClientData'])->name('pages.tasks.getData');
    });
    Auth::routes();
});
