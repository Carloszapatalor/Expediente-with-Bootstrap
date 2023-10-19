{{-- Area de otra template --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>YOLOMA | Bienvenido </title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido al Expediente Clinico YOLOMA!</h1>
                                    </div>
                                    <x-validation-errors class="mb-4" />

                                    @if (session('status'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="user" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email"
                                                name="email" aria-describedby="emailHelp" value="{{old('email')}}"
                                                required autofocus autocomplete="username"
                                                placeholder="Ingresa tu correo">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                type="password" name="password" required autocomplete="current-password"
                                                placeholder="Ingresa tu contraseña">
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input"
                                                    id="remember_me">
                                                <label class="custom-control-label" for="remember_me">Recuerdame</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Iniciar
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Crear una Cuenta!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>