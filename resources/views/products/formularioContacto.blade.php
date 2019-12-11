@extends('layouts.plantilla')
@section('content')
  <section class="limitesFormu pb-4">
    <h2 class="text-center">FORMULARIO DE CONTACTO</h2>
    <form class="" action="/products/formularioContacto/" method="post">
      @csrf
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control typeText" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control typeText" placeholder="Last name">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="email" class="form-control typeText" placeholder="Email">
        </div>
        <div class="col">
          <input type="number" class="form-control typeText" placeholder="Teléfono">
        </div>
      </div>
      <input class="form-control typeText form-control-lg" type="text" placeholder="Mensaje">
      <button type="submit" class="btn btn-primary botonFormulario">ENVIAR</button>
    </form>
  </section>
</main>
@endsection
