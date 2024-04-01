@extends('base.menu')
@section('title', 'Agregar orden de proveedor')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
            <p>Agregar orden de proveedor</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                <a href="#" class="btn-regresar">Regresar</a>
                </div>
                <div class="campo-formulario">
                    <label class="titulo-dato primero">Item:</label>
                    <input class="campo-dato" required type="text" min="0">
                    <label class="titulo-dato">Precio:</label>
                    <input class="campo-dato" required type="number" min="0">
                </div>
                <div class="mensaje-alerta">
                <p>Aqui se mostraran confirmaciones o errores al momento de ejecutar una operacion en la tabla</p>
                </div>
                <div class="opciones-linea inferior">
                <input type="submit" value="Agregar" class="btn-agregar">
                </div>
            </div>
        </div>
    </div>
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla_agregar.css">
    @endpush
@endsection