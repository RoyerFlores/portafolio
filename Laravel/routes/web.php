<?php

use App\Models\Torta;
use Illuminate\Http\Request;
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


//Evaluación integradora
route::get('tortas', function () {
    $tortas = Torta::all();
    $cantidad = Torta::count();

    return view('tortas', compact('tortas', 'cantidad'));
});
Route::get('tortas/nuevo', function () {
    return view('tortas_nuevo');
});
Route::post('tortas/nuevo', function (Request $request) {
    $request->validate([
        'sabor' => 'required',
        'precio' => 'required|integer'
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
    ]);
    Torta::create([
        'sabor' => request()->sabor,
        'precio' => request()->precio,
    ]);
    return redirect('tortas');
});
