@extends('layouts.plantilla')

@section('aside')
  @include('../partials.aside')

@endsection

@section('content')
<section class="col-12 col-sm-12 col-md-9">
  <div class="row">
    <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde mt-3" style="">
      <img src="/storage/productosImg/{{ $producto->poster}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><p>{{ $producto->nombre }}</p></h5>
        <p class="card-text"><p>{{ $producto->descripcion }}</p></p>
        <form class="" action="/carrito/agregar" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$producto->id}}">
          <button type="submit" class="btn btn-primary" name="button">Agregar al Carrito</button>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
@endsection
