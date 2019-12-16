@extends('layouts.plantilla')
@section('carousel')
<section class="carouselMedia posi">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner alturaBanner bordeRedondo">
      <div class="carousel-item active">
        <img src="img/banner-fino1.png" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner-ar-nuevos-brazaletes-T407-T433.jpg" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner-ar-T468-T476.jpg" class="d-block w-100 h-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
@endsection
@section('aside')
  @include('../partials.aside')

@endsection
@section('content')
  <section class="col-12 col-sm-12 col-md-9 pt-5">
    <div class="row">
      @foreach ($productos as $producto)

        <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde pt-2" style=""><a href="/products/detalleProducto/{{ $producto->id }}" class="btn3">
          <img src="/storage/{{$producto->poster}}" class="card-img-top" alt="..." width="300" height="210">
          <div class="card-body">
            <h5 class="card-title"><p>{{ $producto->nombre }}</p></h5>
            {{-- <p class="card-text"><p>{{ $producto->descripcion }}</p></p> --}}
            <p class="card-text"><p>${{ $producto->precio }}</p></p>

            <form class="" action="/carrito/agregar" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$producto->id}}">
              <button type="submit" class="btn btn-primary" name="button">Agregar al Carrito</button><br>
              <input type="hidden" name="id" value="{{$producto->id}}">
              </form>
            {{-- <a href="/products/detalleProducto/{{ $producto->id }}" class="btn3">Ver más</a> --}}
          </div>
            </a>
        </div>

      @endforeach
    </div>
    <div>
        {{$productos->links()}}
    </div>
  </section>

</main>
@endsection
@section('banner')
  @include('../partials.banner')
@endsection
