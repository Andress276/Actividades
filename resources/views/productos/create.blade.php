@extends('layouts.plantilla')

@section('contect')

<form action="{{route('products.store')}}" method="POST">
@csrf
<h1>Perfil</h1>

<label>
    Nombre
    <input type="text" name="nombre">
    Descripcion
    <input type="text" name="descripcion">
    Precio
    <input type="number" name="precio">
    Existencias
    <input type="text" name="existencias">
    proveedor
    <input type="text" name="proveedor">

    <button type="submit">Enviar</button>
</label>



</form>

@endsection