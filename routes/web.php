<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserformController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [IndexController::class, 'Index']);
Route::post('user-form', [UserformController::class, 'Userform']);
Route::view('/Home/index/user-form', 'user-form')->name('form');


Route::view('/Home/index/user/about', 'about')->name('user');
Route::view('/Home/index/user/{name}', 'about')->name('user');

Route::get('Home', [HomeController::class, 'Home']);
 
