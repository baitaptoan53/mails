<?php

use App\Http\Controllers\LoginController;
use App\Models\Nhanvien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendEmailController;


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
Route::resource('nhanvien', NhanvienController::class);
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::get('/register',[RegisterController::class,'index'])->name('register.index')->middleware('authorization');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/register',[RegisterController::class,'register'])->name('register');

Route::get('/sendemail', [SendEmailController::class, 'index']);