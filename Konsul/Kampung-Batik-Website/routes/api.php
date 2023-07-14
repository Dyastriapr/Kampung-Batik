<?php

use App\Http\Controllers\toko_controller;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/toko',[toko_controller::class ,"index"]);
Route::get('/toko/{id}',[toko_controller::class ,"detail"]);
Route::post('/login' , [AuthenticationController::class , "login"]);

Route::get('/test', function(){
    dd('test api update');
});
