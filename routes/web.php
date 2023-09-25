<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::view('/login', 'account.login');
