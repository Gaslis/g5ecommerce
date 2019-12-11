@extends('layouts.plantilla')
@section('content')
  <div class="row rowClase py-5">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">

          <div class="row rowClase">
            <div class="col-50">
              <h3>Direcion de facturacion</h3>
              <label for="fname"><i class="fa fa-user"></i> Nombre completo</label>
              <input type="text" id="fname" name="firstname" class="typeText" placeholder="Norberto Garcia">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" class="typeText" placeholder="norbert@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Direccion</label>
              <input type="text" id="adr" name="address" placeholder="Monroe 5215" class="typeText">
              <label for="city"><i class="fa fa-institution"></i> Ciudad</label>
              <input type="text" id="city" name="city" class="typeText" placeholder="CABA">

              <div class="row rowClase">
                <div class="col-50">
                  <label for="state">Provincia</label>
                  <input type="text" id="state" class="typeText" name="state" placeholder="Bs As">
                </div>
                <div class="col-50">
                  <label for="zip">Codigo Postal</label>
                  <input type="text" id="zip" class="typeText" name="zip" placeholder="1645">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Tarjetas aceptadas</label>
              <div class="icon-container">
                <i class="fab fa-cc-visa" style="color:navy;"></i>
                <i class="fab fa-cc-amex" style="color:blue;"></i>
                <i class="fab fa-cc-mastercard" style="color:orange;"></i>
              </div>
              <label for="cname">Tarjeta</label>
              <input type="text" id="cname" name="cardname" placeholder="Norberto Garcia" class="typeText">
              <label for="ccnum">Numero de tarjeta</label>
              <input type="text" id="ccnum" class="typeText" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Mes Exp</label>
              <input type="text" id="expmonth" class="typeText" name="expmonth" placeholder="Septiembre">

              <div class="row rowClase">
                <div class="col-50">
                  <label for="expyear">Año Exp</label>
                  <input type="text" id="expyear" class="typeText" name="expyear" placeholder="2019">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" class="typeText" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Direccion de envio igual que facturacion
          </label>
          <input type="submit" value="Confirmar la compra" class="btnN">
        </form>
      </div>
    </div>

    {{-- <div class="col-25">
      <div class="container">
        <h4>Cart
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4</b>
          </span>
        </h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
    </div> --}}
  </div>
@endsection
