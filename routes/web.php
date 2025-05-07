<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Models\Process;
use App\Models\Module;
use App\Models\Trivia;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    $trivia = Trivia::inRandomOrder()->first();
   

    return view('welcome', compact('trivia'));
})->name('home');

Route::get('/proc', function (Request $request) {
    $search = $request->input('search');

    $results = Process::query()
        ->when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%");
        })->get();

    return view('proc', compact('results'));
})->name('proc');


Route::get('/iso', function (Request $request) {

    $search = $request->input('search');

    $results = Module::query()
        ->when($search, function($query, $search){
            return $query->where('title', 'like', "%{$search}%");
        })->get();

    return view('iso', compact('results'));
})->name('iso');



Route::prefix('ves')->name('ves.')->group(function () {
    Route::get('/', function () {
        return view('ves');
    })->name('index');

    Route::get('/parts', function () {
        return view('vessel.parts');
    })->name('parts');

    Route::get('/explore', function () {
        return view('vessel.explore');
    })->name('explore');

    Route::get('/providence', function () {
        return view('vessel.providence');
    })->name('providence');

    Route::get('/endurance', function () {
        return view('vessel.endurance');
    })->name('endurance');

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

    Route::get('/list',[RequestController::class, 'list_my_requests'])->name('list');

    Route::get('/view/{id}',[RequestController::class, 'view_request'])->name('view');

    Route::get('/draft',[RequestController::class, 'view_draft'])->name('draft');

    Route::post('/store',[RequestController::class, 'store_request'])->name('store');

    Route::post('/store-draft',[RequestController::class, 'store_draft'])->name('store_draft');

});

//ADMIN ROUTES

Route::get('/dashboard',[AdminController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/add-module', [AdminController::class, 'addModule']);
Route::post('/add-process', [AdminController::class, 'addProcess']);


Route::post('/delete-process',  [AdminController::class, 'deleteProcess']);
Route::post('/delete-module', [AdminController::class, 'deleteModule']); 

Route::post('/update-request', [AdminController::class, 'updateRequest']);
Route::post('/update-process', [AdminController::class, 'updateProcess']);
Route::post('/update-module', [AdminController::class, 'updateModule']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
