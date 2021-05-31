@extends('layouts.app')
@section('content')
<!--sección del navegador de categorias y productos-->
    @include('categorias.navCategorias')
<!--end del navegador de categorias-->

<!--publicidad-->
    @include('publicidad.carrusel')
<!--end Publicidad-->

<!--produtos-->
<div class="container-fluid">
    @include('productos.indexProductos')    
</div>
<!--fin de productos-->
@endsection