@extends('base.menu')
@section('title', 'Editar empleado')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Editar empleado</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('empleados')}}" class="btn btn-regresar">Regresar</a>
                </div>
                <!--Formulario-->
                <form action="{{route('update.empleado',$empleado->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Nombre:</label>
                        <input class="campo-dato" required type="text" value="{{$empleado->nombre}}" name="nombre">
                        <label class="titulo-dato">Email:</label>
                        <input class="campo-dato" required type="email" value="{{$empleado->email}}" name="email">
                        <label class="titulo-dato">Contraseña:</label>
                        <input class="campo-dato" required type="password" name="password">
                        <label class="titulo-dato">Rol:</label>
                        <select class="campo-dato" name="rol">
                            <option value="Empleado">Empleado</option>
                            <option value="Gerente">Gerente</option>
                        </select>
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