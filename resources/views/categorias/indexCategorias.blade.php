
@extends('dashboard')
@section('content-tab')
<div class="table-responsive-sm">
    <table class="table table-dark table-striped" id="tableCategorias">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $cate)
            <tr id="{{$cate->id}}">
                <td><i class="fas fa-puzzle-piece"></i></td>
				<td class="NameCate">{{$cate->NameCate}}</td>
		        <td style="width:370px" class="Description">{{$cate->Description}}</td>
		        <td>
				    <button type="button" class="btn btn-success btn-sm EditarCat" id="{{$cate->id}}"><i class="far fa-edit"></i></button>
				    <button type="button" class="btn btn-secondary btn-sm EliminarCat" id="{{$cate->id}}" ><i class="far fa-trash-alt"></i></button>
				</td>
				<td class="Status">
					@if($cate->Status == 1)
						<label class="col-form-label-sm" for="Status">Activo</label>
					@else
						<label class="col-form-label-sm" for="Status">Inactivo</label>
					@endif
				</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('content-tab')