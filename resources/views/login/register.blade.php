<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Registro de usuario</title>



        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="icon" href="/img/logo-tienda-online.png">
        <meta name="theme-color" content="#7952b3">
        <!--js-->
        <script src="/js/jquery-3.6.0.min.js"></script>
        

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>

    
        <!-- Custom styles for this template -->
        <link href="/css/heros.css" rel="stylesheet">
        <link href="/css/style_itzae.css" rel="stylesheet">
    </head>
    <body>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <img class="bi me-2" width="80" height="25" role="img" src="/img/logo-tienda-online.png">
                    <h1>{{__('Registro de usuario') }}</h1>
                </a>
            </header>
            <div class="row align-items-center g-5 py-5">
                <div class="col-sm">
                    <figure class="figure">
                        <img src="/img/undraw_Selecting_team_re_ndkb.png" class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
                <div class="col-sm">
                <h2 class="">{{__('Ingresa tus datos.') }}</h2>
                <form action="{{ route('newRegister') }}" method="POST">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" placeholder="Nombre">
                            <label for="name">{{__('Nombre(s)') }}</label>
                            </div>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="text" name="apaterno" class="form-control @error('apaterno') is-invalid @enderror" value="{{ old('apaterno') }}" id="apaterno" placeholder="apellido paterno">
                            <label for="apaterno">{{__('Apellido paterno') }}</label>
                            </div>
                            @error('apaterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row g-2">
                            <div class="form-floating" id="mail">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="name@example.com" required>
                                <label for="email">{{__('E-mail') }}</label>
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <span id="sm-email" class="" role="alert" style="display:none;">
                                <strong id="sm-content"></strong>      
                            </span>
                    </div>
                    <br>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                <label for="password">{{__('Contraseña') }}</label>
                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <span id="sm-password" class="" role="alert" style="display:none;">
                                <strong id="sm-content"></strong>
                            </span>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="password" name="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror" id="confirmPassword" placeholder="Confirmar password">
                            <label for="confirmPassword">{{__('Confirmar contraseña') }}</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row g-2">
                            <div class="form-floating" id="fechaNacimiento">
                                <input type="date" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento') }}" id="fechaNacimiento" placeholder="aaaa-mm-dd"  required>
                                <label for="fechaNacimiento">{{__('Fecha de nacimiento') }}</label>
                            </div>
                            @error('fechaNacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" name="aceptaPolitica" type="checkbox" id="aceptaPolitica" value="remember-me" aria-label="..." required>
                        <p>
                        Declaro que soy mayor de edad, acepto los <a hrf="#" class="link-warning">Términos y Condiciones</a> 
                            y autorizo el uso de mis datos de acuerdo a la <a hrf="#" class="link-warning">Declaración de Privacidad.</a>
                        </p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark btn-lg">{{__('Registrar') }}</button>
                    </div>
                </form>
                </div>
            </div>

        </div>

        
       @include('footer')

        <script src="/js/popper.min.js">
        <script src="/js/bootstrap.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="/js/axios.min.js"></script>
        <script src="/js/httpJS/ValidateEmail.js"></script>
    </body>
</html>