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


// Auth Routes
use App\Http\Controllers\AuthController;
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout']);
Route::post('userlogin', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('storeregister', [AuthController::class, 'user_registration']);

// User Routes
use App\Http\Controllers\UserController;
Route::get('olahuser', [UserController::class, 'manajemenuser'])->name('manajemenuser')->middleware('auth','cekrole:1');
Route::get('tambahuser', [UserController::class, 'tambahuser'])->middleware('auth','cekrole:1');
Route::post('storetambahuser', [UserController::class, 'create']);
Route::get('edituser/{id}', [UserController::class, 'edituser']);
Route::post('updateuser', [UserController::class, 'update']);
Route::post('deleteuser/{id}', [UserController::class, 'delete']);

// Role Routes
use App\Http\Controllers\RoleController;
Route::get('olahrole', [RoleController::class, 'manajemenrole'])->name('manajemenrole')->middleware('auth','cekrole:1');
Route::get('tambahrole', [RoleController::class, 'tambahrole'])->middleware('auth','cekrole:1');
Route::post('storetambahrole', [RoleController::class, 'storetambahrole']);
Route::get('editrole/{id}', [RoleController::class, 'editrole']);
Route::post('updaterole', [RoleController::class, 'updaterole']);
Route::post('deleterole/{id}', [RoleController::class, 'destroyrole']);

// Iframe Routes
use App\Http\Controllers\IframeController;
Route::get('olahiframe', [IframeController::class, 'manajemeniframe'])->name('manajemeniframe')->middleware('auth','cekrole:1');
Route::get('tambahiframe', [IframeController::class, 'tambahiframe'])->middleware('auth','cekrole:1');
Route::post('storetambahiframe', [IframeController::class, 'storetambahiframe']);
Route::get('editiframe/{id}', [IframeController::class, 'editiframe']);
Route::post('updateiframe', [IframeController::class, 'updateiframe']);
Route::post('deleteiframe/{id}', [IframeController::class, 'destroyiframe']);

use App\Http\Controllers\KontenController;
Route::get('dashboard', [KontenController::class, 'dashboard'])->name('dashboard')->middleware('auth','cekrole:1, 2');