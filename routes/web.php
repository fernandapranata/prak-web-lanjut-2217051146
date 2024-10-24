<?php

use App\Http\Controllers\ProfilrController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/profile', [ProfilrController::class, 'profile']);

// Route::get('/profile/{nama}', )

Route::get('/user/profile', [ProfileController::class, 'profile']);
Route::get('/user/create', function () {return view('create_user');});
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');