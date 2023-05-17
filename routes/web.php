<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;

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
            return view('dashboard');
        })->name('dashboard');
    });
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/chambre/all',[ChambreController::class, 'index'])->name('chambre_all');
    Route::get('/chambre/{id}',[ChambreController::class, 'show'])->name('chambre_show');
    Route::post('/chambre/add',[ChambreController::class, 'store'])->name('chambre_add');
    Route::post('/chambre/update/{id}',[ChambreController::class, 'update'])->name('chambre_update');
    Route::get('/chambre/delete/{id}',[ChambreController::class, 'destroy'])->name('chambre_delete');
});
