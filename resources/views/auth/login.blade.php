<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Inicio de sesión del sistema" />
    <meta name="author" content="SakCode" />
    <title>Sistema de ventas - Login</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('assets/img/fondol.png'); /* Ruta relativa */
         
            
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            height: 100vh; /* Asegura que el body ocupe toda la altura de la ventana */
           
        }

        #layoutAuthentication {
            backdrop-filter: blur(5px); /* Aplica el efecto de desenfoque */
            background-color: rgba(86, 86, 86, 0.8); /* Fondo semi-transparente para el layout */
        }
    </style>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">SISTEMA DE VENTAS (OvalTech)</h3>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                    @foreach ($errors->all() as $item)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{$item}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endforeach
                                    @endif
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input autofocus autocomplete="off" value="invitado@gmail.com" class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Correo eléctronico</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" value="12345678" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Contraseña</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit"><a>Iniciar sesión</a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
