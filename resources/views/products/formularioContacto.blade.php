@extends('layouts.plantilla')
@section('content')
  <section class="limitesFormu">
    <h1 class="h1-faq">FORMULARIO DE CONTACTO</h1>
    <form>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="col">
          <input type="number" class="form-control" placeholder="Teléfono">
        </div>
      </div>
      <input class="form-control form-control-lg" type="text" placeholder="Mensaje">
      <button type="submit" class="btn btn-primary-login botonFormulario">ENVIAR</button>
    </form>
  </section>
</main>
@endsection
