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
{{-- <section class="col-12 col-sm-12 col-md-9 mt-5">
   <div class="row">
     <div class="panel panel-default">

       <div class="panel-heading">Detalle del Carrito de Pedidos</div>
       <div class="panel-body" id="ec-cart-list-container">

       <table class="table table-bordered table-striped margin-no">
         <thead>
           <tr>
             <th width="30%" colspan="2">Item</th>
             <th width="10%">Cantidad</th>
             <th width="10%">Color</th>
             <th width="10%">Precio de Lista (unitario)</th>
             <th width="10%">Descuento</th>
             <th width="10%">Precio Final (unitario)</th>
             <th width="15%">Subtotal</th><th width="15%">Acciones</th>
           </tr>
         </thead>
         <tbody>
           <tr id="item_678">
         <td width="60"><img src="https://www.zecat.com.ar/AR/gt/upload/ec/products/60554/efebd0bb-d721-4b1a-82b1-156f05c1053d.jpg" alt="Toilet Bag Baden" class="img-responsive"></td>
         <th scope="row" id="title_678">Toilet Bag Baden</th>
         <td align="center">
           <input id="min_amount_678" type="hidden" value="50">
           <input id="quantity_678" min="50" type="number" value="50"
           class="form-control input-height" onchange="javascript:ecCartChange(678,'2fbb8bb9172224789ca6eb1ebc2c2bff476a272f','https://www.zecat.com.ar/AR/es/api/json');">
         </td>
         <td align="center">
           <input type="hidden" id="color_678" value="000000">
           <div style="background-color:#000000;" class="color" data-toggle="tooltip" title="" data-original-title="Negro"></div>
         </td>
         <td id="price_678">$--</td>
         <td id="discount_678">--%</td>
         <td id="final_price_678">$--</td>
         <td id="subtotal_678">$--</td>
         <td align="center">
           <a id="deleteBtn_678" ec-uniqid="2fbb8bb9172224789ca6eb1ebc2c2bff476a272f" ec-urlapi="https://www.zecat.com.ar/AR/es/api/json" href="javascript:gtConfirm( '¿Está seguro de que desea eliminar este item?', 'ecCartDelete(678);' );"
         class="btn btn-primary btn-xs">
          <i class="fa fa-trash"></i> Borrar Item</a></td>
         </tr>
         <tr id="item_66">
         </tr>
          <tr>
           <td colspan="7"><strong id="total">Total</strong></td>
           <td><strong id="ec-cart-detail-total">$0.00</strong></td>
            <td>
            </td>
          </tr>
         </tbody>
       </table>      <small><small>*los precios no incluyen IVA</small></small>
       </div>
       <div class="panel-footer align-right">
         <a class="btn btn-default" href="https://www.zecat.com.ar/AR/es/products"><i class="fa fa-chevron-left"></i> Volver</a>

         <button class="btn btn-primary" urlapi="https://www.zecat.com.ar/AR/es/api/json" onclick="gtConfirm('¿Estás seguro de que deseas vaciar el carrito?', 'ecEmptyCart(1);' );" ><i class="fa fa-times"></i> Vaciar carrito</button>
</section> --}}



@endsection
