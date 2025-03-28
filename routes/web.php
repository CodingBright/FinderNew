<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sign-in', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

// Login with phone number
Route::get('/phone-number', function () {
    return view('phone-number');
});

// OTP Verification
Route::get('/verify-otp', function () {
    return view('otp');
});