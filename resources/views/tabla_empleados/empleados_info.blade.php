@extends('base.menu')
@section('title', 'Informacion de empleado')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Información de empleado</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('empleados')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('delete.empleado',$empleado->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                   <div class="campo-formulario">
                        <label class="titulo-dato primero">Nombre:</label>
                        <p class="campo-dato">{{$empleado->nombre}}</p>
                        <label class="titulo-dato">Email:</label>
                        <p class="campo-dato">{{$empleado->email}}</p>
                        <label class="titulo-dato">Rol:</label>
                        <p class="campo-dato">{{$empleado->rol}}</p>
                        <label class="titulo-dato">Fecha de creación:</label>
                        <p class="campo-dato">{{$empleado->created_at}}</p>
                        <label class="titulo-dato">Ultima actualización:</label>
                        <p class="campo-dato">{{$empleado->updated_at}}</p>
                   </div> 
                   <div class="opciones-linea inferior">
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                        <a href="{{route('show.editar_empleado',$empleado->id)}}" class="btn btn-editar">Editar</a>
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