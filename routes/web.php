<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TobuyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tobuy',[TobuyController::class,'index']);
Route::get('/tobuy/create',[TobuyController::class,'create']);
Route::post('/tobuy/store',[TobuyController::class,'store']);
Route::get('/tobuy/{id}/edit',[TobuyController::class,'edit']);
Route::put('/tobuy/{id}/',[TobuyController::class,'update']);
Route::delete('/tobuy/{id}/',[TobuyController::class,'destroy']);

