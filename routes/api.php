<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/chambre/all',[ChambreController::class, 'index']);
Route::get('/chambre/{id}',[ChambreController::class, 'show']);
Route::post('/chambre/add',[ChambreController::class, 'store']);
Route::post('/chambre/update/{id}',[ChambreController::class, 'update']);
Route::delete('/chambre/delete/{id}',[ChambreController::class, 'destroy']);
