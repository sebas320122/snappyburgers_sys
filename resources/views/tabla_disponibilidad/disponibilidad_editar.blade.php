    @extends('base.menu')
    @section('title', 'Editar producto')

    @section('content')
        <div class="grid">
            <!--Recuadro con tabla-->
            <div class="box">
                <div class="box-header">
                    <p>Editar producto</p>
                </div>
                <div class="box-content">
                    <!--Linea de botones-->
                    <div class="opciones-linea">
                        <a href="{{url('disponibilidad')}}" class="btn btn-regresar">Regresar</a>
                    </div>
                    <!--Formulario-->
                    <form action="{{route('update.producto',$producto->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="campo-formulario">
                            <label class="titulo-dato primero">Producto:</label>
                            <input class="campo-dato" required type="text" value="{{$producto->Producto}}" name="producto">
                            <label class="titulo-dato">Existencia:</label>
                            <input class="campo-dato" required type="number" value="{{$producto->Existencia}}" name="existencia">
                            <label class="titulo-dato">Capacidad:</label>
                            <input class="campo-dato" required type="number" min="1" value="{{$producto->Capacidad}}" name="capacidad">
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