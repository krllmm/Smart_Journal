<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('main');
Route::view('/home', 'layouts.main')->name('home');

Route::resource('tag', TagController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');

Route::resource('article', ArticleController::class)->middleware('auth');
Route::get('download/{article}', [DownloadController::class, 'download'])->name('download');

Route::get('/login', [AccountController::class, 'index'])->name('login');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/create_account', [AccountController::class, 'create'])->name('create_account');
Route::get('/sign_in', [AccountController::class, 'sign_in'])->name('sign_in');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/publication', [PublicationController::class, 'index'])->name('publication')->middleware('auth');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/profile/edit/{user}', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update/{user}', [ProfileController::class, 'update'])->name('update_profile')->middleware('auth');
Route::get('/profile/{user}', [ProfileController::class, 'user'])->name('user')->middleware('auth');

Route::get('/search', [SearchController::class, 'index'])->name('search')->middleware('auth');
