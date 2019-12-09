@extends('layouts.plantilla')

@section('content')
  <section class="esiloPerfil">
    <h2 class="h1-faq">Mis datos</h2>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6">
        <div class="media mx-3">
          <div class="media-body">
            @if (count($errors->all())>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}} </li>
                    @endforeach
                </ul>
            @endif
            <form action="/partials/guardarUsuarioEditado/{{ $usuarioEditar->id }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                 <label for="nombre">Nombre</label>
                 <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $usuarioEditar->name) }}">
             </div>
            {{-- <h3>Nombre</h3>
            <p>{{ $user->name }}</p> --}}
            {{-- <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido', $usuarioEditar->apellido) }}">
            </div> --}}
            {{-- <h3>Apellido</h3>
            <p></p> --}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $usuarioEditar->email) }}">
            </div>
            {{-- <h3>Email</h3>
            <p>{{ $user->email }}</p> --}}
            {{-- <h3>¿Quiere subir una foto?</h3> --}}

            <a href="/partials/perfil/{{ Auth::id() }}">Volver</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
          <img src="/storage/avatares/{{$usuarioEditar->profile}}" class=" circle" alt="">
          <div class="">
            <input type="file" name="image" value="">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
      </form>

    </div>
  </section>

@endsection
