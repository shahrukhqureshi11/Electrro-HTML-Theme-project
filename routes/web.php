<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('login');//login.blade.php
});

Route::get('/app', function () {
    return view('layouts.app');//app.blade.php
});

Route::get('/register', function () {
    return view('register');//Register.blade.php
})->name('register');

Route::post('/login',[Authenticationcontroller::class,'login'])->name('/login'); 
  
Route::post('/registration-user',[Authenticationcontroller::class,'store'])->name('abc'); //i am defining the route

Route::get('/dashboard',function(){
    return view('dashboard');//dashboard.blade.php
})->name('dashboard');







































































   






















