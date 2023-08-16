<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\newpostcontroller;
use App\Http\Controllers\OnepostController;
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

Auth::routes();

Route::get('/Home', [App\Http\Controllers\PostController::class, 'show'])->name('Home');
Route::get('/login1', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/login/user', [App\Http\Controllers\LoginController::class, 'loginUser'])->name('login/user');  
Route::get('/newpost',[App\Http\Controllers\newpostcontroller::class]);
Route::get('/onepost/{id}',[OnepostController::class,'onepost']);
Route::post('/onepost/{id}',[OnepostController::class,'onepost']);
