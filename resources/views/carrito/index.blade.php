@extends('layouts.plantilla')
@section('content')

  <div class="spacer px-5">
    <table class="table">
      <thead>
      <tr>
          <th>Id</th>
          <th>User id</th>
          <th>product_id</th>
          <th>precio_unitario</th>
          <th>cantidad</th>
      </tr>
      </thead>
      <tbody>

          @foreach ($carrito as $key => $value)
              <tr>
              <td>{{$carrito->id}}</td>
              <td>{{$carrito->user_id}}</td>
              <td>{{$carrito->product_id}}</td>
              <td>{{$carrito->precio_unitario}}</td>
              <td>{{$carrito->cantidad}}</td>
              </tr>

          @endforeach
      <tr>

      </tr>
      </tbody>
  </table>
  <div>

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
             <th width="10%">Color</th><th width="10%">Precio de Lista (unitario)</th>
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
         </td><td id="price_678">$--</td>
           <td id="discount_678">--%</td>
           <td id="final_price_678">$--</td>
           <td id="subtotal_678">$--</td>
           <td align="center">
         <a id="deleteBtn_678" ec-uniqid="2fbb8bb9172224789ca6eb1ebc2c2bff476a272f" ec-urlapi="https://www.zecat.com.ar/AR/es/api/json" href="javascript:gtConfirm( '¿Está seguro de que desea eliminar este item?', 'ecCartDelete(678);' );"
         class="btn btn-primary btn-xs">
         <i class="fa fa-trash"></i> Borrar Item</a></td>
         </tr><tr id="item_66">

         </tr><tr>
               <td colspan="7"><strong id="total">Total</strong></td>
               <td><strong id="ec-cart-detail-total">$0.00</strong></td>
               <td></td>
             </tr>
         </tbody>
       </table>      <small><small>*los precios no incluyen IVA</small></small>
       </div>
       <div class="panel-footer align-right">
         <a class="btn btn-default" href="https://www.zecat.com.ar/AR/es/products"><i class="fa fa-chevron-left"></i> Volver</a>

         <button class="btn btn-primary" urlapi="https://www.zecat.com.ar/AR/es/api/json" onclick="gtConfirm('¿Estás seguro de que deseas vaciar el carrito?', 'ecEmptyCart(1);' );" ><i class="fa fa-times"></i> Vaciar carrito</button> --}}
</section>
@endsection
