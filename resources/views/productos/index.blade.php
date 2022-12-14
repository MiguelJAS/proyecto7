@extends('layouts.master');
@section('content');
<section class="categorias contenedor">
    <h2>Consulta nuestros cuidadores</h2>
    <div class="listado-categorias">
        @foreach( $arrayCuidadores as $key => $cuidador )
        <div>
           <a href="{{ url('/productos/show/' . $key ) }}">
                <h4 >
                    {{$cuidador['nombre']}},
                    {{$cuidador['dni']}}
                </h4>
            </a>

        </div>
        @endforeach
    </div>
</section>
@stop
