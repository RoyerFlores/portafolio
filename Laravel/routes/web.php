<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    $credentials = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];
    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('/home');
    }

    return back()->with('error', 'Correo o contraseña incorrecto.');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('');
});