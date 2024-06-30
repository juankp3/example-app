<?php

use App\Http\Controllers\ComponentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    // return view('dashboard');
    return view('welcome');
});

Route::get('/test', [HomeController::class, 'index']);
Route::get('/components',[ComponentsController::class, 'index']);





