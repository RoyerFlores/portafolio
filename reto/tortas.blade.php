@extends('layouts/base')
@section('title', 'Pastelería la Espiga')
@section('main')
    <h1>Pastelería la espiga</h1>
    <p>
        La Espiga es una pasteleria de barrio que hasta hoy anotaba sus tortas en un cuaderno. Ustedes le van a hacer la
        pantalla donde registra sus tortas y las ve listadas. Construyan esto:</p>
    <br>
    <h3>Hay {{ $cantidad }} tortas en la vitrina</h3>
    <br>
    <table>
        <thead>
            <tr>
                <th><strong>Sabor</strong></th>
                <th></th>
                <th><strong>Precio</strong></th>
                <th><strong>Stock</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tortas as $torta)
                <tr>
                    <td>{{ $torta->sabor }}</td>
                    <td>............</td>
                    <td>{{ $torta->precio }} Bs.</td>
                    <td>{{ $torta->stock }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <p>vitrina atendida por Royer J. Flores Aruquipa</p>
    <a href="{{ url('tortas/nuevo') }}" style="color: chartreuse"> + Agregar nueva torta</a>
@endsection