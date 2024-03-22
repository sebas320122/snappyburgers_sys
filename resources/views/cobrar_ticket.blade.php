@extends('base.menu')
@section('title', 'Ticket')

@section('content')
    <div class="cuadricula">
        <!--Caja 1-->
        <div class="box" id="box-1">
            <div class="box-header">
                <p>Ticket</p>
            </div>
            <div class="box-content">
                <!--Formulario de orden-->
                <form action="{{ route('update.orden', ['order_id' => $order_id]) }}" method="POST" id="order-form">
                    @csrf
                    <p class="texto-mesa">Mesa {{ $orden[0]->Mesa }} | Orden {{$order_id}}</p>
                    <!--Cambiar estatus de orden-->
                    <select name="estado_orden" class="selector-estado">
                        <option value="Confirmar">Confirmar</option>
                        <option value="Cancelar">Cancelar</option>
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
                                <!--Items seleccionados en vista anterior-->
                                @foreach($orden as $item)
                                    <tr>
                                        <td>{{ $item->Cantidad }}</td>
                                        <td>{{ $item->Item }}</td>
                                        <td>{{ $item->Precio }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>   
                    </div>
                    <p class="texto-total">Total: ${{$total}}</p>
                    <input type="submit" value="Listo" class="btn-listo">
                </form>
                <!--Final del formulario-->
            </div>
        </div>
        <!--mensaje de alerta-->
            @if ($message = Session::get('error'))
                <div class="mensaje-alerta">
                    <p>{{$message}}</p>
                </div>
            @endif
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
        <link rel="stylesheet" href="/css/cobrar_ticket.css">
    @endpush

@endsection