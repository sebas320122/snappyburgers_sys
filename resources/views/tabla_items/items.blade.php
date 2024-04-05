@extends('base.menu')
@section('title', 'Items')

@section('content')
    <div class="grid">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Items en venta</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('items/agregar')}}" class="btn-agregar">Agregar</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar" id="filtro">
                </div>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->Nombre}}</td>
                                    <td>{{$item->Precio}}</td>
                                    <td>{{$item->Categoria}}</td>
                                    <td>
                                        <a href="{{route('show.info_item',$item->id)}}">
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