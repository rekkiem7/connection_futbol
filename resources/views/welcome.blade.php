<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EntreLigas Online</title>
        @include('template.libraries')
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
                <div class="col-md-6 col-md-offset-3 animated fadeInDown">
                    <div class="login-logo">
                        <a href="#" style="color:#ffffff"><b ><img src="{{asset('EntreLigas.png')}}" width="40%"/></b></a>
                    </div>
                    <div class="box box-danger">
                        <div class="box-header with-border">
                          <h3 class="box-title">Iniciar Sesión</h3>
                        </div>
                        <div class="box-body">
                            <form class="form-horizontal" role="form" id="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Usuario</label>

                                    <div class="col-md-6">
                                        <input id="user" type="text" class="form-control" name="user" placeholder="Ingresa tu nombre de usuario" value="{{ old('user') }}" required autofocus>

                                        @if ($errors->has('user'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
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
                                            <i class="fa fa-warning"></i>&nbsp;&nbsp;<strong>¡Credenciales Incorrectas!</strong>&nbsp;&nbsp;{{Session::get('error')}}
                                        </div>
                                    </div>
                                @endif
                            </form>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <center><button type="button" class="btn btn-success" onclick="login();">
                                        Ingresar&nbsp;&nbsp;<i class="fa fa-key"></i>
                                    </button></center>
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
