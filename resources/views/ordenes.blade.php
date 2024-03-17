@extends('base.menu')
@section('title', 'Ordenes')

@section('content')
    <div class="cuadricula">
        <!--Orden-->
        <div class="box">
        <div class="box-header">
            <p>Ticket</p>
        </div>
        <div class="box-content">
            <!--Formulario de orden-->
            <form action="#">
            <p class="texto-mesa">Mesa 1</p>
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
            
            <input type="submit" value="Preparado" class="btn-preparado">
            </form>
            <!--Final del formulario-->
        </div>
        </div>
        <!--Orden-->
        <div class="box">
        <div class="box-header">
            <p>Ticket</p>
        </div>
        <div class="box-content">
            <!--Formulario de orden-->
            <form action="#">
            <p class="texto-mesa">Mesa 3</p>
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
            
            <input type="submit" value="Preparado" class="btn-preparado">
            </form>
            <!--Final del formulario-->
        </div>
        </div>
        <!--Orden-->
        <div class="box">
        <div class="box-header">
            <p>Ticket</p>
        </div>
        <div class="box-content">
            <!--Formulario de orden-->
            <form action="#">
            <p class="texto-mesa">Mesa 5</p>
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
            
            <input type="submit" value="Preparado" class="btn-preparado">
            </form>
            <!--Final del formulario-->
        </div>
        </div>
        <!--Orden-->
        <div class="box">
        <div class="box-header">
            <p>Ticket</p>
        </div>
        <div class="box-content">
            <!--Formulario de orden-->
            <form action="#">
            <p class="texto-mesa">Mesa 6</p>
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
            
            <input type="submit" value="Preparado" class="btn-preparado">
            </form>
            <!--Final del formulario-->
        </div>
        </div>
  </div>

  <!--Agregar estilo-->
  @push('styles')
    <link rel="stylesheet" href="/css/ordenes.css">
  @endpush

@endsection