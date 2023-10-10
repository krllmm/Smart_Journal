<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::view('/login', 'account.login')->name('login');
Route::view('/register', 'account.register')->name('register');

Route::view('/home', 'layouts.main')->name('home');
