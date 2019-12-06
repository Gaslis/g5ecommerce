<header>
  <nav class="col 12 navbar navbar-light p-3">
    <div class="col-3 col-sm-4 col-md-3">
      <a href="/home">
        <img src="/img/logo-graficar.png" alt="" class="logo">
        <img src="/img/logo-circulo.png" alt="" class="logoCirculo">
      </a>
    </div>
  <div class="col-5 col-sm-5 col-md-8 mb-3">
    <form class="pt-3" action="/products/buscarProducto" method="GET">
      <div class="input-group">
        <input type="text" class="form-control searchRedondo" name="busqueda" value="" placeholder="Encontra los productos que estas buscando...">
      <!-- <div class="input-group-prepend">
        <span class="input-group-text searchRedondo" id="addon-wrapping"><ion-icon name="search"></ion-icon></span>
      </div> Encontra los productos que estas buscando...-->
      </div>
    </form>
  </div>
  {{-- <div class="col-4 col-sm-3 col-md-1">
    <button type="submit" class="btn btn-primary botonMenu menuMedia">☰</button>

  </div> --}}
  <div class="dropdown col-4 col-sm-3 col-md-1">
  <button type="button" class="btn btn-primary dropdown-toggle botonMenu menuMedia" data-toggle="dropdown">
    ☰
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
  <a href="/carrito/index">
    <button type="submit" class="btn btn-primary botonChango"><ion-icon name="cart"></ion-icon></button>
  </a>
</div>
  </nav>
  <div class="row barraRoja py-1">
    <nav class="col-6 primerNav">
      <a href="mailto: info@graficar.com.ar"><ion-icon name="mail"></ion-icon> contacto@graficar.com</a>
      @if(Auth::id()===1){
        <a href="/administrarProducto"><ion-icon name=""></ion-icon>Administrar Productos</a>
      }@else{
      <a href="contacto-consulta.php"><ion-icon name="call"></ion-icon> (011) 15 4054 6753</a>}
      @endif
    </nav>
    <nav class="col-6 segundoNav">
        @auth
          <a href="/partials/perfil/{{ Auth::id() }}">{{Auth::user()->name}}  <ion-icon name="person"></ion-icon></a>
          <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        @else
          <a href="{{ route('login') }}">Ingresá  <ion-icon name="person"></ion-icon></a>
          <a href="{{ route('register') }}">Registrate  <ion-icon name="create"></ion-icon></a>
        @endauth
    </nav>
  </div>
</header>
