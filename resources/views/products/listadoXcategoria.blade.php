@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">{{$cat->name}}</h2>

    <div class="container">

          <section id="cart">
            @foreach ($cat->products as $producto)
              <article class="product">
                  <header>

                      <a href="/products/detalleProducto/{{$producto->id}}">

                        {{-- <input type="hidden" name="id" value="{{$cart->id}}">
                        <button type="submit" class="btn btn-primary" name="button">Eliminar</button> --}}
                          <img src="/storage/{{$producto->poster}}" alt="">
                          <h3>Ver producto</h3>
                      </a>
                  </header>

                  <div class="content">

                      <h1>{{$producto->nombre}}</h1>

                      <p>{{$producto->descripcion}}</p>

                      {{-- <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
                      <div style="top: 43px" class="type small">XXL</div> --}}
                  </div>

                  <footer class="content">
                      {{-- <span class="qt-minus">-</span> --}}
                      <span class="qt">Id: {{$producto->id}}</span>
                      {{-- <span class="qt-plus">+</span> --}}
                      <h2 class="full-price">

                      </h2>

                      <h2 class="price">Precio: $
                        {{$producto->precio}}
                      </h2>
                  </footer>
                {{-- @empty
                  <h2>Su carrito se encuentra vacio</h2> --}}

              </article>
            @endforeach
          </section>

      </div>

@endsection
