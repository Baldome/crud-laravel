<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<style>
    @font-face {
        font-family: 'Andalia';
        src: url('{{ asset('font/Andalia.ttf') }}');
    }

    .title1 {
        font-family: 'BOOMSTER.otf';
        font-size: 35pt;
        color: black;
        text-shadow: 0.1em 0.1em 0.5em wheat;
    }

    .img-fondo {
        background: url('{{ asset('img/log_principal_pcymt_jucu.jpg') }}');
        background-repeat: no-repeat;
        background-size: 100vw 100vh;
        z-index: -3;
        background-attachment: fixed;
        background-color: rgba(255, 255, 255, 0.3);
    }
</style>

<body class="hold-transition login-page img-fondo">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b class="title1 animated heartBeat delay-1s">Registro de usuario al sistema</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingrese sus datos</p>

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/admin/usuarios') }}" method="post">
                            @csrf {{-- Guarda los datos para y genera un token  --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre del Usuario</label>
                                        <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                                            required>
                                        @error('name')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                                            required>
                                        @error('email')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                        @error('password')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="repetpassword">Repetir Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ url('/admin/usuarios', []) }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2 pr-2"></i>Guardar
                                        Registro</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
