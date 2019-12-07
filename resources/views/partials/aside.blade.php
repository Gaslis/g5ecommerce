<main class="row pl-5 pr-5">
  <aside class="col-sm-2 col-md-2 mt-5">
    @foreach ($categorias as  $categoria)
      <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-secondary">
          <a href="/products/listadoXcategoria/{{ $categoria->id }}" class="btn">{{ $categoria->name }}</a>
        </button>
      </div>
    @endforeach
  </aside>
