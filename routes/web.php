<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [IndexController::class, 'Index']);
Route::get('/Home', [Indexcontroller::class, 'Home']);
Route::get('/about', [Indexcontroller::class, 'About']);
Route::get('/contact', [IndexController::class, 'ContactUs']);
Route::post('registration', [RegistrationController::class, 'Registration']);
Route::post('user-form', [UserController::class, 'User']);

Route::view('/registration', 'registrationform');
Route::view('/user-form', 'user-form');