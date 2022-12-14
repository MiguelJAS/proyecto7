@extends('layouts.master');
@section('content');
<div class="show">
    <h3>Datos del cuidador {{$id}}</h3>
    <p>Nombre: {{$cuidador['nombre']}}<p>
    <p>Apellidos: {{$cuidador['apellidos']}}</p>
    <p>Dni: {{$cuidador['dni']}}</p>
    <p>Telefono: {{$cuidador['telefono']}}</p>
    <p>email: {{$cuidador['email']}}</p>
    <p>Domicilio: {{$cuidador['domicilio']}}</p>
    <p>Comunidad Autónoma: {{$cuidador['comunidad']}}</p>
    <p>Localidad: {{$cuidador['localidad']}}</p>
</div>
@stop
