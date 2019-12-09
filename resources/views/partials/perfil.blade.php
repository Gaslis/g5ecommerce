@extends('layouts.plantilla')

@section('content')
  <section class="esiloPerfil">
    <h2 class="h1-faq">Mis datos</h2>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6">
        <div class="media mx-3">
          <div class="media-body">
            <h3>Nombre</h3>
            <p>{{ $user->name }}</p>
            <h3>Apellido</h3>
            <p></p>
            <h3>Email</h3>
            <p>{{ $user->email }}</p>
            {{-- <h3>¿Quiere subir una foto?</h3> --}}
            <a href="/home">Volver</a>
            <a href="/partials/perfilEditar/{{ Auth::id() }}">Editar Perfil</a>
          </div>
        </div>
                      {{-- <form class="" action="perfil.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="image" value="">
                        <input type="submit" name="" value="Enviar">
                      </form> --}}
      </div>
      <div class="col-12 col-sm-6 col-md-6">
        <img src="/storage/avatares/{{$user->profile}}" class=" circle" alt="">

      </div>

    </div>
  </section>

@endsection
