<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudentdataController;
use App\Http\Controllers\UserformController;
use Illuminate\Support\Facades\Route;

// Route::post('student-form', [FormController::class, 'Form']);

// Route::get('/form', function(){
//     return view('form');
// });

// Route::get('/record', [FormController::class, 'Datashow']);

Route::get('/studentdata', [StudentdataController::class, 'Studentdata']);
Route::post('student', [StudentdataController::class, 'Studentform']);
Route::get('/studentform', function(){
    return view('studentform');
});



