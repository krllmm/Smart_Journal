<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('main');
Route::view('/home', 'layouts.main')->name('home');
Route::resource('article', ArticleController::class);
Route::resource('tag', TagController::class);
Route::resource('category', CategoryController::class);

Route::get('/login', [AccountController::class, 'index'])->name('login');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/create_account', [AccountController::class, 'create'])->name('create_account');
Route::get('/sign_in', [AccountController::class, 'sign_in'])->name('sign_in');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/publication', [PublicationController::class, 'index'])->name('publication');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
