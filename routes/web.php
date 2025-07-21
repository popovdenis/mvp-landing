<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () { return view('pages.home'); });
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
