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
    return view('welcome');
});


use App\Http\Controllers\AuthController;
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register']);
Route::post('storeregister', [AuthController::class, 'storeregister']);
Route::post('storetambahuser', [AuthController::class, 'storetambahuser']);
Route::post('storetambahrole', [AuthController::class, 'storetambahrole']);
Route::post('deleteuser/{id}', [AuthController::class, 'destroyuser']);
Route::post('deleterole/{id}', [AuthController::class, 'destroyrole']);
Route::get('edituser/{id}', [AuthController::class, 'edituser']);
Route::get('editrole/{id}', [AuthController::class, 'editrole']);
Route::post('updateuser', [AuthController::class, 'updateuser']);
Route::post('updaterole', [AuthController::class, 'updaterole']);
Route::post('userlogin', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

// use App\Http\Controllers\AuthController;
// Route::resource('user', AuthController::class)->middleware('auth');

use App\Http\Controllers\KontenController;
Route::get('dashboard', [KontenController::class, 'dashboard'])->name('dashboard')->middleware('auth','cekrole:1, 2');
Route::get('olahuser', [KontenController::class, 'manajemenuser'])->name('manajemenuser')->middleware('auth','cekrole:1');
Route::get('olahrole', [KontenController::class, 'manajemenrole'])->name('manajemenrole')->middleware('auth','cekrole:1');
Route::get('olahiframe', [KontenController::class, 'manajemeniframe'])->name('manajemeniframe')->middleware('auth','cekrole:1');
Route::get('tambahuser', [KontenController::class, 'tambahuser'])->middleware('auth','cekrole:1');
Route::get('tambahrole', [KontenController::class, 'tambahrole'])->middleware('auth','cekrole:1');
Route::get('tambahiframe', [KontenController::class, 'tambahiframe'])->middleware('auth','cekrole:1');
Route::post('storetambahiframe', [KontenController::class, 'storetambahiframe']);
Route::get('editiframe/{id}', [KontenController::class, 'editiframe']);
Route::post('updateiframe', [KontenController::class, 'updateiframe']);
Route::post('deleteiframe/{id}', [KontenController::class, 'destroyiframe']);