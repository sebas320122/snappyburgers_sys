@extends('base.menu')
@section('title', 'Informacion de venta')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Información de venta</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos/ventas')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <div class="campo-formulario">
                    <label class="titulo-dato primero">ID:</label>
                    <p class="campo-dato">{{$venta->id}}</p>
                    <label class="titulo-dato">Total:</label>
                    <p class="campo-dato">{{$venta->Total}}</p>
                    <label class="titulo-dato">Mesa:</label>
                    <p class="campo-dato">{{$venta->Mesa}}</p>
                    <label class="titulo-dato">Estado:</label>
                    <p class="campo-dato">{{$venta->Estado}}</p>
                    <label class="titulo-dato">Fecha de registro:</label>
                    <p class="campo-dato">{{$venta->created_at}}</p>
                    <label class="titulo-dato">Ultima actualizacion:</label>
                    <p class="campo-dato">{{$venta->updated_at}}</p>
                </div> 
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