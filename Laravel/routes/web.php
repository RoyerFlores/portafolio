<?php

use App\Http\Controllers\MessageController;
use App\Models\Torta;
use App\Models\User;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/messages', [MessageController::class, 'index']);

    Route::post('/logout', function (Request $request) {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    })->name('logout');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'telefono' => 'required',
        'mensaje' => 'required'
    ], [
        'nombre.required' => 'Indica tu nombre.',
        'correo.required' => 'Indica tu correo.',
        'correo.email' => 'Indica un correo válido.',
        'telefono.required' => 'Indica un teléfono.',
        'mensaje.required' => 'Escribe un mensaje.'
    ]);

    message::create([
        'name' => $request->nombre,
        'email' => $request->correo,
        'tel' => $request->telefono,
        'message' => $request->mensaje,
    ]);

    return back()->with('success', 'Mensaje enviado correctamente.');
});

Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/messages');
    }

    return back()->withErrors(['email' => 'Correo o contraseña incorrectos.',])->onlyInput('email');
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
