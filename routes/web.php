<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.home'); });
//Route::get('/contact', [\App\Http\Controllers\ContactController\ContactController::class, 'showForm'])->name('contact.form');
//Route::post('/contact', [\App\Http\Controllers\ContactController\ContactController::class, 'submitForm'])->name('contact.submit');
