<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('register/step1', [RegisteredUserController::class, 'create'])
    ->name('register');
    Route::post('register/step1', [RegisteredUserController::class, 'storeStep1']);
    Route::get('register/step2', [RegisteredUserController::class, 'step2'])
    ->name('register.step2');
    Route::post('register/step2', [RegisteredUserController::class, 'storeStep2']); 
});