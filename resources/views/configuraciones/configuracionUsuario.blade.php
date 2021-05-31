@extends('dashboard')
@section('content-tab')
<div class="container">
    <div class="py-4">
        <div class="row justify-content-between">
            <hr>
            <div class="col-8">
                <h3>Usuario</h3>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-outline-secondary" id="btnEditUser">
                    <i class="fas fa-user-edit"></i> Editar
                </button>
            </div>
        </div>
        <br>
        <div class="row g-2">
            <div class="d-flex position-relative">
                    <img id="perfil-img" src="/img/user.png" class="flex-shrink-0 me-3 rounded-circle" alt="..." width="180" height="180">
                <span class="border-start"></span>
                    <div class="container-sm py-5"> 
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputNombreUser" class="form-label">Nombre</label>
                                <input type="text" value="{{ isset($usuario->name)?$usuario->name:old('name')}}" class="form-control bg-dark" id="inputNombreUser" disabled> 
                            </div>
                            <div class="col-md-3">
                                <label for="input1Apellido" class="form-label">1° Apellido</label>
                                <input type="text" value="{{ isset($usuario->apaterno)?$usuario->apaterno:old('apaterno')}}" class="form-control bg-dark" id="input1Apellido" disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="input2Apellido" class="form-label">2° Apellido</label>
                                <input type="text" value="{{ isset($usuario->amaterno)?$usuario->amaterno:old('amaterno')}}" class="form-control bg-dark" id="input2Apellido" disabled>
                            </div>
                        </form>
                        <br>
                        <form class="row g-3">
                            <div class="col-md-3">
                                <label for="inputEdad" class="form-label">Edad</label>
                                <input type="date" value="{{ isset($usuario->fechaNacimiento)?$usuario->fechaNacimiento:old('fechaNacimiento')}}" class="form-control bg-dark" id="inputEdad" disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="inputGenero" class="form-label">Genero</label>
                                <input type="text" value="{{ isset($usuario->genero)?$usuario->genero:old('genero')}}" class="form-control bg-dark" id="inputGenero" disabled>
                            </div>
                        </form>                        
                    </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="row justify-content-between">
            <hr>
            <div class="col-8">
                <h3>Cuenta</h3>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-outline-secondary" id="btnEditEmail">
                    <i class="fas fa-at"></i> Editar
                </button>
            </div>
        </div>
        <br>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" value="{{ isset($usuario->email)?$usuario->email:old('email')}}" class="form-control bg-dark" id="inputEmail" disabled>
            </div>
            <div class="col-md-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control bg-dark" id="inputPassword" disabled>
            </div>
            <div class="col-md-3">
                <label for="inputTipoUsuario" class="form-label">Tipo de usuario</label>
                <input type="text" class="form-control bg-dark" id="inputTipoUsuario" disabled>
            </div>
        </form>
    </div>
    <div class="py-4">
        <div class="row justify-content-between">
            <hr>
            <div class="col-8">
                <h3>Dirección</h3>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-outline-secondary" id="btnEditDirecction">
                    <i class="fas fa-street-view"></i> Editar
                </button>
            </div>
        </div>
        <br>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputCol" class="form-label">Col</label>
                <input type="text" class="form-control bg-dark" id="inputCol">
            </div>
            <div class="col-md-3">
                <label for="inputNumero" class="form-label">#Número</label>
                <input type="number" class="form-control bg-dark" id="inputNumero">
            </div>
            <div class="col-md-3">
                <label for="inputCP" class="form-label">C.P.</label>
                <input type="text" class="form-control bg-dark" id="inputCP">
            </div>
            <div class="col-md-6">
                <label for="inputCalle" class="form-label">Calle o Callejón</label>
                <input type="text" class="form-control bg-dark" id="inputCalle">
            </div>
            <div class="col-md-3">
                <label for="inputLocalidad" class="form-label">localidad</label>
                <input type="text" class="form-control bg-dark" id="inputLocalidad">
            </div>
            <div class="col-md-3">
                <label for="inputEstado" class="form-label">Estado</label>
                <input type="text" class="form-control bg-dark" id="inputEstado">
            </div>
            <div class="col-md-12">
                <label for="inputReferencias" class="form-label">Referencias</label>
                <input type="text" class="form-control bg-dark" id="inputReferencias">
            </div>
        </form>
    </div>
    <div class="py-4">
        <div class="row justify-content-between">
            <hr>
            <div class="col-8">
                <h3>Banco</h3>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-outline-secondary" id="btnEditBanck">
                    <i class="fas fa-university"></i> Editar
                </button>
            </div>
        </div>
        <br>
    </dv>
</div>
@endsection