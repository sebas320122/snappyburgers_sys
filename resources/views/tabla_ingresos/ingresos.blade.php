@extends('base.menu')
@section('title', 'Ingresos')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Panel de ingresos</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos/ventas')}}" class="btn btn-regresar">Ventas</a>
                    <a href="{{url('ingresos/gastos')}}" class="btn btn-regresar">Gastos</a>
                </div>
                <!--Formulario-->
                <div class="campo-formulario">
                    <label class="titulo-dato primero">Ganancias del dia:</label>
                    <p class="campo-dato">${{$gananciasHoy}}</p>
                    <label class="titulo-dato">Ganancias de hace 7 dias:</label>
                    <p class="campo-dato">${{$gananciasPasadas}}</p>
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