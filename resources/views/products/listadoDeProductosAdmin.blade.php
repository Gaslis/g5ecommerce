@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">Editar productos</h2>


    <div class="spacer px-5 mb-5">
      <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($productos as $key => $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nombre}}</td>
                <td><a href="/products/detalleProducto/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
                <td><a href="/products/editarProducto/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
                <td><a href="/products/eliminarProducto/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
                </tr>

            @endforeach
        <tr>

        </tr>
        </tbody>
      </table>
      <div>
          {{$productos->links()}}
          <a href="/products/agregrarProducto/" class="btn btn-primary">Agregar producto</a>
      </div>
      <div class="pt-4" style="width: 100%">
        <canvas id="linechart" width="300" height="300"></canvas>

      </div>
      <div class="" style="width: 100%">
        <canvas id="linechart2" width="300" height="300"></canvas>

      </div>
    </div>
<script type="text/javascript">
    var productos= @json($productos);
</script>
@endsection
