@extends('base.menu')
@section('title', 'Cobrar')

@section('content')
    <div class="grid">
        <!--Caja 1-->
        <div class="box" id="box-1">
            <div class="box-header">
                <p>Items</p>
            </div>
            <div class="box-content">
                <input type="text" class="filtro-items" placeholder="Buscar" id="filtro">
                <div class="campo-tabla">
                <table id="filtro-table">
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($itemsMenu as $itemMenu)
                            <tr>
                                <td>{{$itemMenu->Nombre}}</td>
                                <td>{{$itemMenu->Precio}}</td>
                                <td><button class="btn-agregar" data-item="{{$itemMenu->Nombre}}" data-precio="{{$itemMenu->Precio}}">+</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>   
                </div>
            </div>
        </div>
        <!--Caja 2-->
        <div class="box" id="box-2">
            <div class="box-header">
                <p>Orden</p>
            </div>
            <div class="box-content">
                <!--Formulario de orden-->
                <form id="order-form" action="{{route('store.cobros')}}" method="POST">
                    @csrf
                    <input type="number" min="0" placeholder="mesa" class="entrada-mesa" name="mesa">
                    <div class="campo-tabla">
                        <table id="order-table">
                            <thead>
                                <tr>
                                    <th>Cantidad</th>
                                    <th>Item</th>
                                    <th>Precio</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody id="items-list">
                                <!--Aqui se agregan los items-->
                            </tbody>
                        </table>   
                    </div>
                    <input type="submit" value="Siguiente" class="btn-siguiente">
                </form>
                <!--Final del formulario-->
            </div>
        </div>
        <!--mensaje de alerta-->
            @if (count($errors) > 0)
                <div class="mensaje-alerta">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
    </div>

     <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/cobrar.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/tomar_orden.js"></script>
        <script src="/js/filtro.js"></script>
    @endpush
   
@endsection