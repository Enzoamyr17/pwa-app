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

Route::get('/proc', function () {
    $processes = Process::All();

    return view('proc', compact('processes'));

})->name('proc');

Route::post('/delete-process', function (Request $request) {
    $process = Process::find($request->id);
    if ($process) {
        $process->delete();
        return back()->with('success', 'Process deleted successfully.');
        
    }
    return back()->with('error', 'Process not found.');

});


Route::get('/iso', function () {
    $modules = Module::All();

    return view('iso', compact('modules'));
})->name('iso');


Route::post('/delete-module', function (Request $request) {
    $module = Module::find($request->id);

    if ($module) {
        $module->delete();
        return back()->with('success', 'Module deleted successfully.');
    }

    return back()->with('error', 'Module not found.');
});

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

    Route::get('/list',[RequestController::class, 'list_my_requests'])->name('list');

    Route::get('/view/{id}',[RequestController::class, 'view_request'])->name('view');

    Route::post('/store',[RequestController::class, 'store_request'])->name('store');

});

//ADMIN ROUTES

Route::get('/dashboard',[AdminController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/add-module', [AdminController::class, 'addModule']);
Route::post('/add-process', [AdminController::class, 'addProcess']);
Route::post('/update-request', [AdminController::class, 'updateRequest']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
