@extends('layouts/base')
@section('title', 'Pastelería la Espiga')
@section('main')
    <h1>Agregar nueva torta</h1>
    <br>
    <div class="form_contact">
        <form action="{{ url('tortas/nuevo') }}" method="POST">
            @csrf
            <label>Sabor:</label>
            <input type="text" id="sabor" name="sabor" required>
            @error('sabor')
                <div class="error" style="color: red">{{ $message }}</div>
            @enderror
            <br>
            <label>Precio:</label>
            <input type="number" id="precio" name="precio">
            @error('precio')
                <div class="error" style="color: red">{{ $message }}</div>
            @enderror
            <br>
            <button type="submit" id="agregar">Agregar torta</button>
        </form>
    </div>
    <br>
    <a href="{{ url('tortas') }}">Volver</a>
@endsection