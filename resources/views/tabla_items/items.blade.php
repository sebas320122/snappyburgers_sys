@extends('base.menu')
@section('title', 'Items en venta')

@section('content')
    <div class="cuadricula">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Items en venta</p>
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
                            <th>Item</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>Hamburguesa ch c/queso</td>
                        <td>90</td>
                        <td>
                            <a href="#">
                            <button class="btn-editar">
                                Editar
                            </button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>Papas ch</td>
                        <td>80</td>
                        <td>
                            <a href="#">
                            <button class="btn-editar">
                                Editar
                            </button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>Pizza ch c/peperoni</td>
                        <td>100</td>
                        <td>
                            <a href="#">
                            <button class="btn-editar">
                                Editar
                            </button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>Hamburguesa md c/queso</td>
                        <td>100</td>
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
                
            </div>
        </div>
        <div class="mensaje-alerta">
            <p>Aqui se mostraran confirmaciones o errores al momento de ejecutar una operacion en la tabla</p>
        </div>
    </div>
    
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla.css">
    @endpush

@endsection