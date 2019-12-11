<header>
  <nav class="col 12 navbar navbar-light p-3">
    <div class=" col-sm-4 col-md-3">
      <a href="/home">
        <img src="/img/logo-graficar.png" alt="" class="logo">
        {{-- <img src="/img/logo-circulo.png" alt="" class="logoCirculo">col-3 --}}
      </a>
    </div>
  <div class="col-6 col-sm-5 col-md-7 mb-3">
    <form class="pt-3" action="/products/buscarProducto" method="GET">
      <div class="input-group">
        <input type="text" class="form-control searchRedondo" name="busqueda" value="" placeholder="Encontra los productos que estas buscando...">
      <!-- <div class="input-group-prepend">
        <span class="input-group-text searchRedondo" id="addon-wrapping"><ion-icon name="search"></ion-icon></span>
      </div> Encontra los productos que estas buscando...-->
      </div>
    </form>
  </div>
  <div class="dropdown col-6 col-sm-3 col-md-2">
  <button type="button" class="btn btn-primary dropdown-toggle botonMenu menuMedia" data-toggle="dropdown">
    ☰
  </button>
  <div class="dropdown-menu">
    @auth
      <a href="/partials/perfil/{{ Auth::id() }}">{{Auth::user()->name}}  <ion-icon name="person"></ion-icon></a>

    @else
      <a href="{{ route('login') }}">Ingresá  <ion-icon name="person"></ion-icon></a>

    @endauth
    @auth

      <a class="" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    @else

      <a href="{{ route('register') }}">Registrate  <ion-icon name="create"></ion-icon></a>
    @endauth
    {{-- @foreach ($categorias as  $categoria)
    <a class="dropdown-item" href="/products/listadoXcategoria/{{ $categoria->id }}">{{ $categoria->name }}</a>
    @endforeach --}}
  </div>
  @auth
    <a href="/carrito/index/">
      <button type="submit" class="btn botonChango"><ion-icon name="cart"></ion-icon><span class="badge badge-light">
        {{$carts->sum('cantidad')}}
      </span>
        <span class="sr-only badge">unread messages</span>
      </button>
      {{-- <button type="submit" class="btn botonChango"><ion-icon name="cart"></ion-icon></button> --}}
    </a>
    @else
      <a href="/home">
        <button type="submit" class="btn botonChango"><ion-icon name="cart"></ion-icon></button>
      </a>
    @endauth
</div>
  </nav>
  <div class="row barraRoja py-1">
    <nav class="col-6 primerNav">
      <a href="mailto: info@graficar.com.ar"><ion-icon name="mail"></ion-icon> contacto@graficar.com</a>
      @if(Auth::id()===1)
        <a href="/administrarProducto"><ion-icon name=""></ion-icon>Administrar Productos</a>
      @else
      <a href="/products/formularioContacto"><ion-icon name="call"></ion-icon> (011) 15 4054 6753</a>}
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
