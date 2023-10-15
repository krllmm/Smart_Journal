<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

//Route::view('/login', 'account.login')->name('login');
//Route::view('/register', 'account.register')->name('register');

Route::view('/home', 'layouts.main')->name('home');

Route::resource('article', ArticleController::class);

// Route::resource('account', AccountController::class);


// Route::controller(AccountController::class)->group(function () {
//     Route::get('/account/login', 'login')->name('login');
//     Route::get('/account/create', 'register')->name('register');
//     //Route::post('/account', 'store')->name('store');
// });
// Route::post('/account', [AccountController::class, 'store'])->name('store');


Route::get('/login', [AccountController::class, 'index'])->name('login');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/create_account', [AccountController::class, 'create'])->name('create_account');
Route::get('/sign_in', [AccountController::class, 'sign_in'])->name('sign_in');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

