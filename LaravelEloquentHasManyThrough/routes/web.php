<?php

use App\Http\Controllers\CountrieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('country',CountrieController::class);
Route::resource('post',PostController::class);
Route::resource('user',UserController::class);
