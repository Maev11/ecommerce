<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
            <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="/css/headers.css" rel="stylesheet">
            <link rel="icon" href="/img/logo-tienda-online.png">
            <title>ecommerce-laravel</title>
        <!--Fuente de iconos -->
        <script src="https://kit.fontawesome.com/3415d5eee3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="{{ route('home') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" width="80" height="25" role="img" src="/img/logo-tienda-online-2.png">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Inicio</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link px-2 text-white">Sobre  nosotros</a></li>
                    </ul>

                    <div class="text-end">
                        @guest
                        <a type="button" class="btn btn-outline-light me-2" href="{{ route('login') }}">{{__('Iniciar sessión') }}</a>
                        <a type="button" class="btn btn-warning" href="{{ route('register') }}">{{__('Registrarme') }}</a>
                        @else
                        <button type="button" class="btn btn-warning me-2">
                            <i class="fas fa-shopping-cart"></i> {{__('Carrito') }}
                            <span class="badge bg-dark"><!--notificación de productos en el carrito---></span>
                        </button>
                        <div class="btn dropdown">
                            <button class="btn btn-outline-light dropdown-toggle " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="#"></a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('cuenta/'.Auth::user()->roles[0]->Nombre.'') }}"> 
                                    {{ __('Cuenta') }}</a> 
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="#"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="main"> 
                @yield('content')
            </div>
        </main>
        <!--se agrega el pie de pagina-->
            @include('footer')
        <!--fin de la sección de pie de pagina-->  
             
        <!--Scripts--->
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/axios.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/httpJS/search.js"></script>
    </body>
</html>