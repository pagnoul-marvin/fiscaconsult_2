<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/a-propos', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/mentions-legales', 'pages.legal')->name('legal');
