<div class="modal fade" id="usuario" tabindex="-1" aria-labelledby="usuarioLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioLabel">Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-sm">
          <form id="formUsuario">
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active yellow" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Datos de usuario</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link yellow" id="pills-profile-tab " data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Datos perspnales</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                @include('usuarios.formUsuario')
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-outline-warning me-md-2" type="button">Cancelar</button>
                  <button class="btn btn-dark" type="button" id="btnSiguiente">Siguiente</button>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                @include('usuarios.formDireccion')
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-outline-warning me-md-2" type="button">Atras</button>
                  <button class="btn btn-dark" type="button" id="btnUsuarioForm">Guardar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>