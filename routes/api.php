<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\DealershipApplicationController;
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
Route::resource('applications', DealershipApplicationController::class);
Route::resource('banks', BankController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


