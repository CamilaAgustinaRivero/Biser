@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Mi Carrito</title>
  <link rel="stylesheet" href="/css/carrito.css">
@endsection

<!-- MAIN -->
@section('main')
  <h1>
    Mi carrito
  </h1>

  <div class="lista-prod">
    <ul>
      @foreach ($carritos as $producto)
        <li>
          <div class="imagen">
            <img src="/img/iphone-11.png" alt="iphone 11">
          </div>

          <div class="descrip-prod">
            <h3><strong>{{$producto->nombre}}</strong></h3>

            <!-- Modificar cantidad -->
            <form class="cantidad" action="/modificarCantidad" method="post">
            @csrf
              <input type="hidden" name="idProducto" value="{{$producto->id}}">
              <label for="cantidad">Cantidad</label>
              <input id="cantidad" class="numero-cant" type="text" name="cantidad" value="{{$producto->pivot->cantidad}}" class="form-control">
              <div class="button">
                <button id="agregar" type="submit" class="btn btn-success">Actualizar Cantidad</button>
              </div>
            </form>

            <!-- Quitar producto -->
            <form class="borrar" action="/borrarProducto" method="post">
            @csrf
              <input type="hidden" name="idProducto" value="{{$producto->id}}">
                <div class="button">
                  <button id="button-quitar" type="submit" class="btn btn-primary">Quitar</button>
                </div>
            </form>
          </div>
        </li>

        <p class="total"><strong>
          Precio: ${{$producto->precio}} | Subtotal: ${{($producto->pivot->cantidad)*$producto->precio}}
        </p></strong>

        @php
        $total = $total + ($producto->pivot->cantidad)*$producto->precio
        @endphp

      @endforeach
      <p class="suma"><strong>
        $Total: {{$total}}
      </p></strong>
    </ul>

    <a href="checkout">
    <button id="button-confirmar" type="button" class="btn btn-outline-primary">Confirmar compra</button>
    </a>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="/js/carrito_scripts.js"></script>
@endsection
