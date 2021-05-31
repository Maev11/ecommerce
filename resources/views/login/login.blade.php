<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Inicio de sessión</title>



        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">

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
    </head>
    <body>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-6 fw-bold lh-1 mb-3">Compras seguras desde donde te encuentres.</h1>
                    <figure class="figure">
                        <img src="/img/undraw_Booking_re_gw4j.png" class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>

                <div class="col-10 mx-auto col-lg-5">
                    <form class="p-5 border rounded-3 bg-light border-warning" id="login" action="{{ url('ingresar') }}" method="POST">
                    @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name="email" required value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror @error('db') is-invalid @enderror" id="email" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu usuario">
                            <label for="floatingInput">Usuario</label>
                        </div>
                        @error('email')
                            <span class="text-center" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror @error('db') is-invalid @enderror" id="password" placeholder="Password" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu contraseña">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        @error('password')
                            <span class="text-center" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--mesnaje de la autenticacion de la base de datos-->
                        @error('db')
                            <span class="text-center" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--fin del mensaje de autenticacion-->
                        <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" value="remember-me" id="remember" data-bs-toggle="tooltip" data-bs-placement="top" title="Guardar inicio de sesión"> Recordar mi usuario
                        </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark" type="submit">Ingresar</button>
                        <small class="text-muted">¿Olvidaste tu contraseña? <a href="#" class="link-warning">Aquí</a></small>
                        <hr class="my-4">
                        <small class="text-muted">¿No tienes una cuenta?,</small><a class="link-dark" href="register"> Registrarse</a>
                    </form>
                </div>
            </div>
        </div>

        <script src="/js/popper.min.js">
        <script src="/js/bootstrap.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>