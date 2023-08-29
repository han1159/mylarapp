<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

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
})->name(name:'home');

Route::get('/login',[AuthManager::class, 'login'])->name(name:'login');
Route::post('/login',[AuthManager::class, 'loginPost'])->name(name:'login.post');
Route::get('/register',[AuthManager::class, 'register'])->name(name:'register');
Route::post('/register',[AuthManager::class, 'registerPost'])->name(name:'register.post');
Route::get('/logout',[AuthManager::class, 'logout'])->name(name:'logout');
Route::group(['middleware' => 'auth'],function(){
    Route::get('/profile',function(){
        return 'Welcome to my 1st laravel project';
    });
});
