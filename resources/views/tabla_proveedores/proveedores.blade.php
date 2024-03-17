@extends('base.menu')
@section('title', 'Proveedores')

@section('content')
    <div class="cuadricula">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Pedidos a proveedores</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="#" class="btn-configuracion">Agregar</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar">
                </div>
                <div class="campo-tabla">
                    <table id="order-table">
                        <thead>
                            <tr>
                                <th>Proveedor</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Bimbo</td>
                            <td>Panes chicos</td>
                            <td>20</td>
                            <td>150</td>
                            <td>Sin ordenar</td>
                            <td>
                                <a href="#">
                                <button class="btn-editar">
                                    Editar
                                </button>
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>Pepsi</td>
                            <td>Paquete</td>
                            <td>20</td>
                            <td>175</td>
                            <td>Ordenado</td>
                            <td>
                                <a href="#">
                                <button class="btn-editar">
                                    Editar
                                </button>
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>San Juan</td>
                            <td>Lechuga</td>
                            <td>30</td>
                            <td>120</td>
                            <td>Ordenado</td>
                            <td>
                                <a href="#">
                                <button class="btn-editar">
                                    Editar
                                </button>
                                </a>
                            </td>
                            </tr>
                        </tbody>
                    </table>   
                </div>
                <div class="mensaje-alerta">
                    <p>Aqui se mostraran confirmaciones o errores al momento de ejecutar una operacion en la tabla</p>
                </div>
            </div>
        </div>
    </div>

    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla.css">
    @endpush

@endsection