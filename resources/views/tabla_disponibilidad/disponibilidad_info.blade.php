@extends('base.menu')
@section('title', 'Informacion del producto')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Información del producto</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('disponibilidad')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('delete.producto',$producto->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                   <div class="campo-formulario">
                        <label class="titulo-dato primero">Producto:</label>
                        <p class="campo-dato">{{$producto->Producto}}</p>
                        <label class="titulo-dato">Existencia:</label>
                        <p class="campo-dato">{{$producto->Existencia}}</p>
                        <label class="titulo-dato">Capacidad:</label>
                        <p class="campo-dato">{{$producto->Capacidad}}</p>
                        <label class="titulo-dato">Porcentaje:</label>
                        <p class="campo-dato">{{$producto->Porcentaje}}</p>
                   </div> 
                   <div class="opciones-linea inferior">
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                        <a href="{{route('show.editar_producto',$producto->id)}}" class="btn btn-editar">Editar</a>
                    </div>
                </form>
            </div>
        </div>
            <!--Mensaje de alerta-->
            @if ($message = Session::get('success'))
                <div class="mensaje-alerta">
                    <p>{{$message}}</p>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="mensaje-alerta">
                    <p>{{$message}}</p>
                </div>
            @endif
    </div>
    <!--Agregar estilo--> 
    @push('styles')
        <link rel="stylesheet" href="/css/tabla_editar.css">
    @endpush
@endsection