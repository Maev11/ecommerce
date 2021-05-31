<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoria">
  nueva categoria
</button>

<!-- Modal -->
<div class="modal fade" id="categoria" tabindex="-1" aria-labelledby="categoriaLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriaLabel">Categorias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-sm">
            <form>
                @include('categorias.formCategorias')
            </form>
        </div>
      </div>
    </div>
  </div>
</div>