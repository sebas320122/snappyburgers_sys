@extends('base.menu')
@section('title', 'Gastos')

@section('content')
    <div class="grid">
        <!--Recuadro con gastos de hoy-->
        <div class="box">
            <div class="box-header">
                <p>Gastos de hoy</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos')}}" class="btn-agregar">Regresar</a>
                </div>
                <p class="campo-dato">Total: ${{$gastosHoyTotal}}</p>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Costo</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($gastosHoy as $gastoHoy)
                                <tr>
                                    <td>{{$gastoHoy->Producto}}</td>
                                    <td>{{$gastoHoy->Costo}}</td>
                                    <td>{{$gastoHoy->created_at}}</td>
                                    <td>
                                        <a href="{{route('show.info_gasto',$gastoHoy->id)}}">
                                            <button class="btn-editar">
                                                Ver
                                            </button>
                                        </a>
                                    </td> 
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
        <!--Recuadro con gastos de hace 7 dias-->
        <div class="box">
            <div class="box-header">
                <p>Gastos de hace 7 dias</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos')}}" class="btn-agregar">Regresar</a>
                </div>
                <p class="campo-dato">Total: ${{$gastosPasadosTotal}}</p>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Costo</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($gastosPasados as $gastoPasado)
                                <tr>
                                    <td>{{$gastoPasado->Producto}}</td>
                                    <td>{{$gastoPasado->Costo}}</td>
                                    <td>{{$gastoPasado->created_at}}</td>
                                    <td>
                                        <a href="{{route('show.info_gasto',$gastoPasado->id)}}">
                                            <button class="btn-editar">
                                                Ver
                                            </button>
                                        </a>
                                    </td> 
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>   
                </div>
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
        <link rel="stylesheet" href="/css/tabla.css">
    @endpush

@endsection