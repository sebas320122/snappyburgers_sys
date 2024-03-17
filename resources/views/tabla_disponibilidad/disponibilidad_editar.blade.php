@extends('base.menu')
@section('title', 'Editar producto')

@section('content')
    <div class="cuadricula">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Editar producto</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="#" class="btn-regresar">Regresar</a>
                </div>
                <div class="campo-formulario">
                    <label class="titulo-dato primero">Producto:</label>
                    <input class="campo-dato" required type="text" value="Panes chicos">
                    <label class="titulo-dato">Existencia fisica:</label>
                    <input class="campo-dato" required type="number" value="50">
                    <label class="titulo-dato">Capacidad:</label>
                    <input class="campo-dato" required type="number" value="100">
                </div>
                <div class="mensaje-alerta">
                    <p>Aqui se mostraran confirmaciones o errores al momento de ejecutar una operacion en la tabla</p>
                </div>
                <div class="opciones-linea inferior">
                    <input type="submit" value="Eliminar" class="btn-eliminar">
                    <input type="submit" value="Editar" class="btn-editar">
                </div>
            </div>
        </div>
    </div>
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla_editar.css">
    @endpush
@endsection