<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NVController;
use App\Http\Controllers\SCController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::resource('employees', EmployeeController::class);
Route::resource('home', HomeController::class);
Route::resource('scs', SCController::class);
Route::resource('films', FilmController::class);