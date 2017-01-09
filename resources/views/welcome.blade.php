<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('librerias')
        <style>
        body{
        background-image:url('futbol.jpg');
        background-repeat:repeat;
        background-size:15%;
        }
        </style>
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animated fadeInDown">
                    <div class="login-logo">
                        <a href="#" style="color:#ffffff"><b ><img src="{{asset('EntreLigas.png')}}" width="40%"/></b></a>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Iniciar Sesión</div>
                        <div class="panel-body">

                            <form class="form-horizontal" role="form" id="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Ingresa tu email (Ejemplo: email@dominio.com)" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" placeholder="Ingresa tu contraseña secreta" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                @if(Session::get('error'))
                                    <div class="col-lg-6 col-lg-offset-4">
                                        <div class="alert alert-danger">
                                            <strong>¡Credenciales Incorrectas!</strong>&nbsp;&nbsp;{{Session::get('error')}}
                                        </div>
                                    </div>
                                @endif
                            </form>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="button" class="btn btn-success" onclick="login();">
                                        Ingresar&nbsp;&nbsp;<i class="fa fa-key"></i>
                                    </button>
                                     <button class="btn btn-primary" onclick="register();">Registrarse&nbsp;&nbsp;<i class="fa fa-user"></i></button><br><br>
                                   <strong>¡Ingresa con tus Redes Sociales!</strong><br>
                                    <a class="btn  btn-social btn-block btn-facebook" href="{{url('auth/facebook')}}">
                                    <i class="fa fa-facebook"></i>Facebook
                                  </a><!--&nbsp;<a class="btn  btn-social  btn-twitter" href="{{url('auth/facebook')}}">
                                    <i class="fa fa-twitter"></i>Twitter
                                  </a>&nbsp;
                                  <a class="btn  btn-social btn-google" href="{{url('auth/facebook')}}">
                                    <i class="fa fa-google"></i>Google
                                  </a>-->
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                   <center> <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        ¿Olvidaste la contraseña?
                                    </a></center><br>
                                    
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
<script>
    function register(){
        window.open("{{URL::to('/register')}}","_self");
    }
    function login(){
        $('#form').submit();
    }
</script>
