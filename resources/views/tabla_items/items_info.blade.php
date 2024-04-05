@extends('base.menu')
@section('title', 'Informacion del item')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Información del item</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('items')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('delete.item',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                   <div class="campo-formulario">
                        <label class="titulo-dato primero">Nombre:</label>
                        <p class="campo-dato">{{$item->Nombre}}</p>
                        <label class="titulo-dato">Precio:</label>
                        <p class="campo-dato">{{$item->Precio}}</p>
                        <label class="titulo-dato">Categoria:</label>
                        <p class="campo-dato">{{$item->Categoria}}</p>
                        <label class="titulo-dato">Productos:</label>
                        <p class="campo-dato">{{$item->Productos}}</p>
                   </div> 
                   <div class="opciones-linea inferior">
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                        <a href="{{route('show.editar_item',$item->id)}}" class="btn btn-editar">Editar</a>
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