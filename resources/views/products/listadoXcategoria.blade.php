@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">{{$cat->name}}</h2>
    <div class="spacer px-5">
      <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ver</th>
            {{-- <th>Editar</th> --}}
            {{-- <th>Eliminar</th>--}}
        </tr>
        </thead>
        <tbody>
            @foreach ($productosXcat as $key => $producto)
                <tr>

                <td>{{$producto->products->id}}</td>
                <td>{{$producto->products->nombre}}</td>
                <td><a href="/products/detalleProducto/{{$producto->id}}"><ion-icon name="eye"></ion-icon></a></td>
                {{-- <td><a href="/products/editarProducto/{{$producto->id}}"><ion-icon name="create"></ion-icon></a></td> --}}
                {{-- <td><a href="/products/eliminarProducto/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>--}}
                </tr>

            @endforeach
        <tr>

        </tr>
        </tbody>
    </table>
    <div>
        {{-- {{$productosXcat->links()}} --}}
    </div>

    </div>

@endsection
