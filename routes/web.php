<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IframeController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\Model3dController;

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
    return redirect('/login');
});

// Auth Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout']);
Route::post('userlogin', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('storeregister', [AuthController::class, 'user_registration']);


Route::middleware(['auth','cekrole:1'])->group(function () {
    // User Routes
    Route::get('olahuser', [UserController::class, 'manajemenuser'])->name('manajemenuser');
    Route::get('tambahuser', [UserController::class, 'tambahuser']);
    Route::post('storetambahuser', [UserController::class, 'create']);
    Route::get('edituser/{id}', [UserController::class, 'edituser']);
    Route::post('updateuser', [UserController::class, 'update']);
    Route::post('deleteuser/{id}', [UserController::class, 'delete']);

    // Role Routes
    Route::get('olahrole', [RoleController::class, 'manajemenrole'])->name('manajemenrole');
    Route::get('tambahrole', [RoleController::class, 'tambahrole']);
    Route::post('storetambahrole', [RoleController::class, 'storetambahrole']);
    Route::get('editrole/{id}', [RoleController::class, 'editrole']); 
    Route::post('updaterole', [RoleController::class, 'updaterole']);
    Route::post('deleterole/{id}', [RoleController::class, 'destroyrole']);
    
    // Iframe Routes
    Route::get('olahiframe', [IframeController::class, 'manajemeniframe'])->name('manajemeniframe');
    Route::get('tambahiframe', [IframeController::class, 'tambahiframe']);
    Route::post('storetambahiframe', [IframeController::class, 'storetambahiframe']);
    Route::get('editiframe/{id}', [IframeController::class, 'editiframe']);
    Route::post('updateiframe', [IframeController::class, 'updateiframe']);
    Route::post('deleteiframe/{id}', [IframeController::class, 'destroyiframe']);

    // Model3d Routes
    Route::get('olahmodel3d', [Model3dController::class, 'manajemenmodel3d'])->name('manajemenmodel3d');
    
});

// Konten Routes
Route::get('dashboard/{id?}', [KontenController::class, 'dashboard'])->name('dashboard');
Route::get('db_coziness', [KontenController::class, 'db_coziness']);
Route::get('db_cumulativecounting', [KontenController::class, 'db_cumulativecounting']);
Route::get('db_facerecognition', [KontenController::class, 'db_facerecognition']);
Route::get('db_safesecure', [KontenController::class, 'db_safesecure']);
Route::get('db_saranaprasarana', [KontenController::class, 'db_saranaprasarana']);
Route::get('db_socialdistencing', [KontenController::class, 'db_socialdistencing']);
Route::get('db_sosialmedia', [KontenController::class, 'db_sosialmedia']);