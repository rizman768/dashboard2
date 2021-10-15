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

Route::get('/', function () {
    return view('/');
});


use App\Http\Controllers\AuthController;
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register']);
Route::post('storeregister', [AuthController::class, 'storeregister']);
Route::post('updateuser', [AuthController::class, 'update']);
Route::post('userlogin', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

use App\Http\Controllers\KontenController;
Route::get('dashboard', [KontenController::class, 'dashboard'])->name('dashboard')->middleware('auth','cekrole:1, 2');
Route::get('olahuser', [KontenController::class, 'manajemenuser'])->name('manajemenuser')->middleware('auth','cekrole:1');