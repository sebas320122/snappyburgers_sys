@extends('base.menu')
@section('title', 'Cobrar')

@section('content')
    <div class="cuadricula">
        <!--Caja 1-->
        <div class="box" id="box-1">
        <div class="box-header">
            <p>Items</p>
        </div>
        <div class="box-content">
            <input type="text" class="filtro-items" placeholder="Buscar">
            <div class="campo-tabla">
            <table id="menu-table">
                <thead>
                <tr>
                    <th>Item</th>
                    <th>Precio</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>refresco</td>
                    <td>50</td>
                    <td><button class="btn-agregar" data-item="Refresco" data-precio="50">+</button></td>
                </tr>
                <tr>
                    <td>orden gde papas fritas</td>
                    <td>90</td>
                    <td><button class="btn-agregar" data-item="Orden gde papas fritas" data-precio="90">+</button></td>
                </tr>
                <tr>
                    <td>Pizza</td>
                    <td>200</td>
                    <td><button class="btn-agregar" data-item="Pizza" data-precio="200">+</button></td>
                </tr>
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
                <input type="number" min="1" placeholder="mesa" class="entrada-mesa" name="mesa">
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
    </div>

     <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/cobrar.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/tomar_orden.js"></script>
    @endpush
   
@endsection