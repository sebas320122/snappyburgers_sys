@extends('base.menu')
@section('title', 'Cobrar')

@section('content')
    <div class="cuadricula">
        <!--Caja 2-->
        <div class="box" id="box-1">
            <div class="box-header">
                <p>Ticket</p>
            </div>
            <div class="box-content">
                <!--Formulario de orden-->
                <form action="#" id="order-form">
                <p class="texto-mesa">Mesa 5</p>
                <select name="estado_orden" class="selector-estado">
                    <option value="volvo">Confirmar</option>
                    <option value="saab">Cancelar</option>
                    <option value="saab">Editar</option>
                </select>
                <div class="campo-tabla">
                    <table id="order-table">
                        <thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Item</th>
                            <th>Precio</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Pizza</td>
                        <td>$50 </td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Refresco</td>
                        <td>$60 </td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>orden gde papas fritas</td>
                        <td>$100</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Hamburguesa</td>
                        <td>$200</td>
                        </tr>
                        </tbody>
                    </table>   
                </div>
                <p class="texto-total">Total: $410</p>
                <input type="submit" value="Listo" class="btn-listo">
                </form>
                <!--Final del formulario-->
            </div>
        </div>
    </div>
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/cobrar_ticket.css">
    @endpush

@endsection