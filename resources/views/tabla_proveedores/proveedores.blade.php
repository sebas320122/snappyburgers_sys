@extends('base.menu')
@section('title', 'Proveedores')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Solicitudes a proveedores</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('proveedores/agregar')}}" class="btn-agregar">Agregar</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar" id="filtro">
                </div>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($solicitudes as $solicitud)
                                <tr>
                                    <td>{{$solicitud->Proveedor}}</td>
                                    <td>{{$solicitud->Producto}}</td>
                                    <td>{{$solicitud->Cantidad}}</td>
                                    <td>{{$solicitud->Estado}}</td>
                                    <td>
                                        <a href="{{route('show.info_solicitud',$solicitud->id)}}">
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
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/filtro.js"></script>
    @endpush

@endsection