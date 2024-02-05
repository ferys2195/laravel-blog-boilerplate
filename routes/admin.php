<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.admin.index');
})->name('dashboard');
Route::get('test', fn () => view('pages.admin.index'));
