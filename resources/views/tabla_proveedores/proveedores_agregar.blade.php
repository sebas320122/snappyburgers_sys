@extends('base.menu')
@section('title', 'Agregar solicitud')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
            <p>Agregar solicitud</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('proveedores')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('store.solicitud')}}" method="POST">
                    @csrf
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Proveedor:</label>
                        <input class="campo-dato" required type="text" name="proveedor">
                        <label class="titulo-dato">Producto:</label>
                        <input class="campo-dato" required type="text" name="producto">
                        <label class="titulo-dato">Cantidad:</label>
                        <input class="campo-dato" required type="number" min="1" name="cantidad">
                        <label class="titulo-dato">Costo:</label>
                        <input class="campo-dato" required type="number" min="0" name="costo">
                        <label class="titulo-dato">Estado:</label>
                        <select class="campo-dato" name="estado">
                            <option value="En curso">En curso</option>
                            <option value="Cancelada">Cancelada</option>
                            <option value="Entregada">Entregada</option>
                        </select>
                        <label class="titulo-dato">Fecha estimada:</label>
                        <input class="campo-dato" required type="date" name="fecha_estimada">
                    </div>
                    <div class="opciones-linea inferior">
                        <input type="submit" value="Agregar" class="btn btn-agregar">
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
        <link rel="stylesheet" href="/css/tabla_agregar.css">
    @endpush
@endsection