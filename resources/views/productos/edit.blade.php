@extends('layouts.master');
@section('content');
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar Cuidador
          </div>
          <div class="card-body" style="padding:30px">

             <form action="{{ url('/productos/edit' . $id) }}" method="POST">
            {{method_field('PUT')}}

                 @csrf

                 <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{$cuidador['nombre']}}" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="title">Apellidos</label>
                    <input type="number" name="apellidos" id="apellidos" value="{{$cuidador['apellidos']}}">
                 </div>

                 <div class="form-group">
                     <label for="title">dni</label>
                    <input type="text" name="dni" id="dni" class="form-control" value="{{$cuidador['dni']}}">
                 </div>

                 <div class="form-group">
                     <label for="title">telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{$cuidador['telefono']}}">
                 </div>

                 <div class="form-group">
                    <label for="synopsis">email</label>
                    <textarea name="synopsis" id="email" class="email" rows="3">{{$cuidador['email']}}</textarea>
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar Cuidador
                    </button>
                 </div>

             </form>

          </div>
       </div>
    </div>
 </div>@stop
