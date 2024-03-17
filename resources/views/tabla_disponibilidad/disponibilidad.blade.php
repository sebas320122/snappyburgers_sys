@extends('base.menu')
@section('title', 'Disponibilidad')

@section('content')
    <div class="cuadricula">
        <!--Recuadro con tabla-->
        <div class="box">
            <div class="box-header">
                <p>Disponibilidad de productos</p>
            </div>
            <div class="box-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="#" class="btn-configuracion">Configuracion</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar">
                </div>
                <div class="campo-tabla">
                    <table id="order-table">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Existencia fisica</th>
                            <th>Existencia calculada</th>
                            <th>Porcentaje E.F</th>
                            <th>Porcentaje E.C</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>Panes chicos</td>
                        <td>50</td>
                        <td>50</td>
                        <td>100%</td>
                        <td>100%</td>
                        <td>
                            <a href="#">
                            <button class="btn-editar">
                                Editar
                            </button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>Panes grandes</td>
                        <td>50</td>
                        <td>50</td>
                        <td>100%</td>
                        <td>100%</td>
                        <td>
                            <a href="#">
                            <button class="btn-editar">
                                Editar
                            </button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>Lechuga</td>
                        <td>20</td>
                        <td>21.7</td>
                        <td>30%</td>
                        <td>31.5%</td>
                        <td>
                            <a href="#">
                            <button class="btn-editar">
                                Editar
                            </button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>Queso americano</td>
                        <td>64</td>
                        <td>65</td>
                        <td>80%</td>
                        <td>81%</td>
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