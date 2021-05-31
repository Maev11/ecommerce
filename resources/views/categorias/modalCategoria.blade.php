<div class="modal fade" id="categoria" tabindex="-1" aria-labelledby="categoriaLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriaLabel">
          <i class="fas fa-sitemap nav-icon"></i>
          Categoria
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-sm">
          <form id="formCategoria">
            @csrf
            @include('categorias.formCategorias')
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-warning me-md-2" id="btnExitCategoria" type="button">Cancelar</button>
                <button class="btn btn-dark" type="button"  id="btnNewCategoria">Guardar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>