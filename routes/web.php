<?php

// Jangan lupa nambahin Controller disini setiap abis create controller

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

Route::get('/dash', function () {
    return view('izin_pulang');
});

Route::get('sakit', [PermitController::class, 'getIzinSakit'])->name('formSakit');


Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('welcome');
});