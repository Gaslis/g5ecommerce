@extends('layouts.plantilla')
@section('content')
<h2 class="text-center py-4">Editar {{ $productoEditar->nombre }}</h2>
<div class="container-fluid">
<div class="row mt-5">
     <div class="col-lg-8 offset-lg-2 pb-4 ">
         {{-- Si hay errores los muestro aquí--}}
        @if (count($errors->all())>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        @endif
        <form action="/products/guardarProductoEditado/{{ $productoEditar->id }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                 <label for="nombreProducto">Nombre</label>
                 <input type="text" class="form-control" name="nombre" id="nombreProducto" value="{{ old('nombre', $productoEditar->nombre) }}">
             </div>
             <div class="form-group">
                 <label for="precioProducto">Precio</label>
                 <input type="number" class="form-control" name="precio" id="precioProducto" value="{{ old('precio', $productoEditar->precio) }}">
             </div>
             <div class="form-group">
                 <label for="descripcion">Descripcion</label>
                 <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ old('descripcion', $productoEditar->descripcion) }}">
             </div>
             <input type="hidden" name="id" value="{{ $categoriaEditada->id }}">
             <div class="form-group">
                 <label for="categorias">Categorias de los productos</label>
                 <select class="form-control" name="categoria_id" id="categoria">

                        <option value="{{$categoriaEditada->id }}" >{{$categoriaEditada->name }}</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                        @endforeach
                    </select>


                 {{-- </select> --}}
             </div>
             <div class="">
               <label for="">Subir poster del producto</label>
               <input type="file" name="poster" value="">
             </div>
             <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
     </div>
</div>
</div>
@endsection
