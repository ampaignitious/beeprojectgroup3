<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagecrudController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/create',[ImageCrudController::class,'create']);
Route::get('/get',[ImageCrudController::class,'get']);
Route::patch('/edit/{id}',[ImageCrudController::class,'edit']);
Route::post('/update/{id}',[ImageCrudController::class,'update']);
Route::delete('/delete/{id}',[ImageCrudController::class,'delete']);
