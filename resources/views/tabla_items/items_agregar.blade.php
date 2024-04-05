@extends('base.menu')
@section('title', 'Agregar item')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
            <p>Agregar item</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('items')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('store.item')}}" method="POST">
                    @csrf
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Nombre:</label>
                        <input class="campo-dato" required type="text" name="nombre">
                        <label class="titulo-dato">Precio:</label>
                        <input class="campo-dato" required type="number" min="0" name="precio">
                        <label class="titulo-dato">Categoria:</label>
                        <input class="campo-dato" required type="text" name="categoria">
                        <label class="titulo-dato">Productos:</label>
                        <input class="campo-dato" required type="text" name="productos">
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