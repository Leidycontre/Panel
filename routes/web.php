<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/action', function () {
//    return view('usuario.action');
//});

//Route::get('/app', function () {
//    return view('usuario.index');
//});

Route::resource('usuario', UserController::class);


