<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [UserController::class, 'index']);
    
});

Route::post('/wight_logs/goal_setting',[UserController::class,'store']);

Route::post('/wight_logs/create',[UserController::class,'create']);

Route::post('/weight_logs/{weightLog}/update', [UserController::class, 'update'])
    ->name('weight.update');

