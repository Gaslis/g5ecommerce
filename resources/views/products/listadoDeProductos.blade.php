@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4"></h2>


    <div class="spacer px-5">
      <table class="table">
        @forelse ($productos as $key => $value)
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ver</th>
            {{-- <th>Editar</th>
            <th>Eliminar</th> --}}
        </tr>
        </thead>
        <tbody>


                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nombre}}</td>
                <td><a href="/products/detalleProducto/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
                {{-- <td><a href="/products/editarProducto/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
                <td><a href="/products/eliminarProducto/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
                </tr> --}}@empty
                <h2>No contamos con ese producto por el momento.</h2>

        </tr>
        </tbody>
          @endforelse
    </table>
    <div>
        {{-- {{$productos->links()}} --}}
        {{-- <a href="/products/agregrarProducto/" class="btn btn-primary">Agregar producto</a> --}}
    </div>

    </div>

@endsection
