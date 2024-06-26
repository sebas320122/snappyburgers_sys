@extends('base.menu')
@section('title', 'Editar item')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Editar item</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('items')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('update.item',$item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Nombre:</label>
                        <input class="campo-dato" required type="text" value="{{$item->Nombre}}" name="nombre">
                        <label class="titulo-dato">Precio:</label>
                        <input class="campo-dato" required type="number" min="0" value="{{$item->Precio}}" name="precio">
                        <label class="titulo-dato">Categoria:</label>
                        <input class="campo-dato" required type="text" value="{{$item->Categoria}}" name="categoria">
                        <label class="titulo-dato">Productos:</label>
                        <input class="campo-dato" required type="text" value="{{$item->Productos}}" name="productos">
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