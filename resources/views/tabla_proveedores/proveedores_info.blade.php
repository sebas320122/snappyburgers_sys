@extends('base.menu')
@section('title', 'Informacion de la solicitud')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Información de la solicitud</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('proveedores')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('delete.solicitud',$solicitud->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                   <div class="campo-formulario">
                        <label class="titulo-dato primero">Proveedor:</label>
                        <p class="campo-dato">{{$solicitud->Proveedor}}</p>
                        <label class="titulo-dato">Producto:</label>
                        <p class="campo-dato">{{$solicitud->Producto}}</p>
                        <label class="titulo-dato">Cantidad:</label>
                        <p class="campo-dato">{{$solicitud->Cantidad}}</p>
                        <label class="titulo-dato">Costo:</label>
                        <p class="campo-dato">{{$solicitud->Costo}}</p>
                        <label class="titulo-dato">Estado:</label>
                        <p class="campo-dato">{{$solicitud->Estado}}</p>
                        <label class="titulo-dato">Fecha estimada:</label>
                        <p class="campo-dato">{{$solicitud->Fecha_estimada}}</p>
                        <label class="titulo-dato">Fecha de entrega:</label>
                        <p class="campo-dato">{{$solicitud->Fecha_entrega}}</p>
                   </div> 
                   <div class="opciones-linea inferior">
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                        <a href="{{route('show.editar_solicitud',$solicitud->id)}}" class="btn btn-editar">Editar</a>
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