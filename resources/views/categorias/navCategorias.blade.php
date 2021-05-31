<div class="b-example-divider"></div>

    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <div class="input-group mb-3">
                <button class="btn  btn-outline-dark  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Categorias') }}</button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach($Categoria as $cat)
                    <li><a class="dropdown-item " href="{{ url('categoria/'.$cat->id)}} ">{{$cat->NameCate}}</a></li>
                    @endforeach
                </ul>
                <input type="text" id="BuscarInicio" name="busqueda" class="form-control" aria-label="Text input with dropdown button" placeholder="¿Que estas buscando?">
                <button class="btn btn-dark" id="btnBuscar">Buscar</button>
            </div>
        </header>
    </div>

<div class="b-example-divider"></div>