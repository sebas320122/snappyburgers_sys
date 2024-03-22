@extends('base.menu')
@section('title', 'Ordenes')

@section('content')
    <div class="cuadricula">
        @foreach ($ordenes as $orden)
            <!--Orden-->
            <div class="box">
                <div class="box-header">
                    <p>Ticket</p>
                </div>
                <div class="box-content">
                    <!--Formulario de orden-->
                    <form action="{{ route('update.ordenconf') }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $orden->id }}">
                        <p class="texto-mesa">Mesa {{ $orden->Mesa }} | Orden {{$orden->id}}</p>
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
                                    @foreach ($orden->cobros as $cobro)
                                    <tr>
                                        <td>{{ $cobro->Cantidad }}</td>
                                        <td>{{ $cobro->Item }}</td>
                                        <td>{{ $cobro->Precio }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>   
                        </div>
                        <input type="submit" value="Preparado" class="btn-preparado">
                    </form>
                    <!--Final del formulario-->
                </div>
            </div>
        @endforeach
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
    <link rel="stylesheet" href="/css/ordenes.css">
  @endpush

@endsection