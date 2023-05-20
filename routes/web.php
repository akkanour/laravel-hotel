<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth'])->group(function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/welcome', function () {
            return view('dashboard');})->name('dashboard');
    });
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/chambre/all',[ChambreController::class, 'index'])->name('chambre_all');
    Route::get('/chambre/{id}',[ChambreController::class, 'show'])->name('chambre_show');
    Route::post('/chambre/add',[ChambreController::class, 'store'])->name('chambre_add');
    Route::post('/chambre/update/{id}',[ChambreController::class, 'update'])->name('chambre_update');
    Route::get('/chambre/delete/{id}',[ChambreController::class, 'destroy'])->name('chambre_delete');

    Route::get('/personnel/all',[PersonnelController::class, 'index'])->name('personnel_all');
    Route::get('/personnel/{id}',[PersonnelController::class, 'show'])->name('personnel_show');
    Route::post('/personnel/add',[PersonnelController::class, 'store'])->name('personnel_add');
    Route::post('/personnel/update/{id}',[PersonnelController::class, 'update'])->name('personnel_update');
    Route::get('/personnel/delete/{id}',[PersonnelController::class, 'destroy'])->name('personnel_delete');

    Route::get('/client/all',[ClientController::class, 'index'])->name('client_all');
    Route::get('/client/{id}',[ClientController::class, 'show'])->name('client_show');
    Route::post('/client/add',[ClientController::class, 'store'])->name('client_add');
    Route::post('/client/update/{id}',[ClientController::class, 'update'])->name('client_update');
    Route::get('/client/delete/{id}',[ClientController::class, 'destroy'])->name('client_delete');

});
