@extends('base.menu')
@section('title', 'Informacion de gasto')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Información de gasto</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos/gastos')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <div class="campo-formulario">
                    <label class="titulo-dato primero">ID:</label>
                    <p class="campo-dato">{{$gasto->id}}</p>
                    <label class="titulo-dato">Proveedor:</label>
                    <p class="campo-dato">{{$gasto->Proveedor}}</p>
                    <label class="titulo-dato">Producto:</label>
                    <p class="campo-dato">{{$gasto->Producto}}</p>
                    <label class="titulo-dato">Cantidad:</label>
                    <p class="campo-dato">{{$gasto->Cantidad}}</p>
                    <label class="titulo-dato">Costo:</label>
                    <p class="campo-dato">{{$gasto->Costo}}</p>
                    <label class="titulo-dato">Estado:</label>
                    <p class="campo-dato">{{$gasto->Estado}}</p>
                    <label class="titulo-dato">Fecha estimada:</label>
                    <p class="campo-dato">{{$gasto->Fecha_estimada}}</p>
                    <label class="titulo-dato">Fecha de entrega:</label>
                    <p class="campo-dato">{{$gasto->Fecha_entrega}}</p>
                    <label class="titulo-dato">Ultima actuliación:</label>
                    <p class="campo-dato">{{$gasto->updated_at}}</p>
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