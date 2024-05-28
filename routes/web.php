<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('restaurante',RestauranteController::class);
