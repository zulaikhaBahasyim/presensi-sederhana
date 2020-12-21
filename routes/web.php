<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

route::get('/home',[HomeController::class,'index']);
