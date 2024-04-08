@extends('base.menu')
@section('title', 'Ventas')

@section('content')
    <div class="grid">
        <!--Recuadro con ventas de hoy-->
        <div class="box">
            <div class="box-header">
                <p>Ventas de hoy</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos')}}" class="btn-agregar">Regresar</a>
                </div>
                <p class="campo-dato">Total: ${{$ventasHoyTotal}}</p>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Mesa</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventasHoy as $ventaHoy)
                                <tr>
                                    <td>{{$ventaHoy->Mesa}}</td>
                                    <td>{{$ventaHoy->Total}}</td>
                                    <td>{{$ventaHoy->created_at}}</td>
                                    <td>
                                        <a href="{{route('show.info_venta',$ventaHoy->id)}}">
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
        <!--Recuadro con ventas de hace 7 dias-->
        <div class="box">
            <div class="box-header">
                <p>Ventas de hace 7 dias</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('ingresos')}}" class="btn-agregar">Regresar</a>
                </div>
                <p class="campo-dato">Total: ${{$ventasPasadasTotal}}</p>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Mesa</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventasPasadas as $ventaPasada)
                                <tr>
                                    <td>{{$ventaPasada->Mesa}}</td>
                                    <td>{{$ventaPasada->Total}}</td>
                                    <td>{{$ventaPasada->created_at}}</td>
                                    <td>
                                        <a href="{{route('show.info_venta',$ventaPasada->id)}}">
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