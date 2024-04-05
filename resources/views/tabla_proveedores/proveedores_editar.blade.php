@extends('base.menu')
@section('title', 'Editar solicitud')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Editar solicitud</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('proveedores')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('update.solicitud',$solicitud->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Proveedor:</label>
                        <input class="campo-dato" required type="text" value="{{$solicitud->Proveedor}}" name="proveedor">
                        <label class="titulo-dato">Producto:</label>
                        <input class="campo-dato" required type="text" value="{{$solicitud->Producto}}" name="producto">
                        <label class="titulo-dato">Cantidad:</label>
                        <input class="campo-dato" required type="number" value="{{$solicitud->Cantidad}}" min="1" name="cantidad">
                        <label class="titulo-dato">Costo:</label>
                        <input class="campo-dato" required type="number" value="{{$solicitud->Costo}}" min="0" name="costo">
                        <label class="titulo-dato">Estado:</label>
                        <select class="campo-dato" name="estado">
                            <option value="En curso">En curso</option>
                            <option value="Cancelada">Cancelada</option>
                            <option value="Entregada">Entregada</option>
                        </select>
                        <label class="titulo-dato">Fecha estimada:</label>
                        <input class="campo-dato" required type="date" value="{{$solicitud->Fecha_estimada}}" name="fecha_estimada">
                        <label class="titulo-dato">Fecha de entrega:</label>
                        <input class="campo-dato" type="date" value="{{$solicitud->Fecha_entrega}}" name="fecha_entrega">
                    </div>
                    <div class="opciones-linea inferior">
                        <input type="submit" value="Editar" class="btn btn-editar">
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