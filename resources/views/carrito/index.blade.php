@extends('layouts.plantilla')
@section('content')

  <header id="site-header">
		<div class="container">
			<h1>Carrito de compras</h1>
		</div>
	</header>

  <div class="container">

        <section id="cart">
          @foreach ($carts as $cart)
            <article class="product">
                <header>

                    <a href="/carrito/eliminar/{{$cart->id}}" class="remove">

                      {{-- <input type="hidden" name="id" value="{{$cart->id}}">
                      <button type="submit" class="btn btn-primary" name="button">Eliminar</button> --}}
                        <img src="/storage/{{$cart->image_product}}" alt="">
                        <h3>Eliminar</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>{{$cart->nombre}}</h1>

                    <p>{{$cart->descripcion}}</p>

                    {{-- <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
                    <div style="top: 43px" class="type small">XXL</div> --}}
                </div>

                <footer class="content">
                    {{-- <span class="qt-minus">-</span> --}}
                    <span class="qt">{{$cart->cantidad}}</span>
                    {{-- <span class="qt-plus">+</span> --}}
                    <h2 class="full-price">

                    </h2>

                    <h2 class="price">Precio: $
                      {{$cart->precio}}
                    </h2>
                </footer>
              {{-- @empty
                <h2>Su carrito se encuentra vacio</h2> --}}

            </article>
          @endforeach
        </section>

    </div>

    <section id="site-footer">
        <div class="container clearfix">

            <div class="left">
                <h2 class="subtotal">Subtotal: $<span>{{$carts->sum('precio')-$carts->sum('precio')*0.21}}</span></h2>
                <h3 class="tax">IVA (21%): $<span>{{$carts->sum('precio')*0.21}}</span></h3>
                <h3 class="shipping">Envio: $<span>0</span></h3>
            </div>

            <div class="right">
                <h1 class="total">Total: $<span>{{$carts->sum('precio')}}</span></h1>
                <form class="remove" action="/carrito/cerrarCompra/" method="post">
                  @csrf
                  <input type="hidden" name="estadoDeCompra" value="id">
                  <button type="submit" class="btn2 btn-primary" name="button">Pagar</button>
                {{-- <a class="btn2">Checkout</a> --}}

                </form>
            </div>

        </div>
</section>



@endsection
