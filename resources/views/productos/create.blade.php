@extends('layouts.master');
@section('content');

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Añadir Ciudador
          </div>
          <div class="card-body" style="padding:30px">

             <form action="{{ url('/productos/create') }}" method="POST">

                 @csrf

                 <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="title">Apellido</label>
                    <input type="text" name="apellido" id="apellido">
                 </div>

                 <div class="form-group">
                     <label for="title">dni</label>
                    <input type="text" name="dni" id="dni" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="title">telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="title">email</label>
                   <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">domicilio</label>
                   <input type="text" name="domicilio" id="domicilio" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">comunidad</label>
                   <input type="text" name="comunidad" id="comunidad" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">localidad</label>
                   <input type="text" name="localidad" id="localidad" class="form-control">
                </div>


                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Añadir Cuidador
                    </button>
                 </div>

             </form>

          </div>
       </div>
    </div>
 </div>
@stop
