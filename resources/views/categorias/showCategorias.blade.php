@extends('layouts.app')
@section('content')
	<!--sección del navegador de categorias y productos-->
		@include('categorias.navCategorias')
	<!--end del navegador de categorias-->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
				<li class="breadcrumb-item active" aria-current="page">Categorias</li>
				<li class="breadcrumb-item active" aria-current="page">{{$nameCategoria->NameCate}}</li>
			</ol>
		</nav>
		<div class="card text-center">
			<div class="card-body">
				<h5 class="card-title">{{$nameCategoria->NameCate}}</h5>
				<p class="card-text">{{$nameCategoria->Description}}</p>
			</div>
		</div>
		<br>
		@include('productos.indexProductos') 
	</div>
@endsection