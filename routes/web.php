<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/proc', function () {
    return view('proc');
})->name('proc');

Route::get('/iso', function () {
    return view('iso');
})->name('iso');


Route::prefix('ves')->name('ves.')->group(function () {
    Route::get('/', function () {
        return view('ves');
    })->name('index');

    Route::get('/parts', function () {
        return view('vessel.parts');
    })->name('parts');

});


Route::prefix('hotl')->name('hotl.')->group(function () {
    Route::get('/', function () {
        return view('hot');
    })->name('index');

    Route::get('/EnSer', function () {
        return view('hotline.EnSer');
    })->name('EnforcementService');

});

Route::prefix('req')->name('req.')->group(function () {
    Route::get('/', function () {
        return view('req');
    })->name('index');

    Route::get('/form', function () {
        return view('request.form');
    })->name('form');

    Route::get('/list',[RequestController::class, 'list_all_requests'])->name('list');

    Route::get('/view/{id}',[RequestController::class, 'view_request'])->name('view');

    Route::post('/store',[RequestController::class, 'store_request'])->name('store');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
