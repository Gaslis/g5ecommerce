@extends('layouts.plantilla')

@section('aside')
  @include('../partials.aside')

@endsection

@section('content')
<section class="col-12 col-sm-12 col-md-9">
  <div class="row">
    <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
      <img src="/storage/{{ $producto->poster}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><p>{{ $producto->nombre }}</p></h5>
        <p class="card-text"><p>{{ $producto->descripcion }}</p></p>
        <a href="" class="btn btn-primary">Agregar al carrito</a>
      {{-- <a href="{{route('products.editarProducto', $producto)}}" class="btn btn-primary">Editar</a>     /products/editarProducto/{{$producto->id }}--}}
    </div>
  </div>
</section>
</main>
@endsection
