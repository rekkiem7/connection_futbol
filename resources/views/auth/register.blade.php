<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EntreLigas FC</title>

    <!-- Fonts -->

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
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerUser') }}">
                        {{ csrf_field() }}
                        <div class="col-lg-7 col-lg-offset-3 col-md-7 col-md-offset-3 col-sm-7 col-sm-offset-3 col-xs-12">
                        <input type="hidden" name="type" id="type" value="{{$type}}">
                            @if($team)
                                <input type="hidden" name="team_id" id="team_id" value="{{$team->id}}"/>
                                <div class="info-box bg-aqua">
                                    <span class="info-box-icon"><img src="{{asset($team->escude)}}"></span>
                                    <div class="info-box-content">
                                      <span class="info-box-text">Equipo</span>
                                      <span class="info-box-number">{{$team->name}}</span>

                                      <div class="progress">
                                        <div class="progress-bar" style="width: 100%"></div>
                                      </div>
                                          <span class="progress-description">
                                            @if($league)
                                                <input type="hidden" name="league_id" id="league_id" value="{{$league->id}}"/>
                                                {{$league->name}}
                                                @if($category)
                                                &nbsp;&nbsp;({{$category->name}})
                                                <input type="hidden" name="category_id" id="category_id" value="{{$category->id}}"/>
                                                @endif
                                            @endif
                                          </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                            @endif
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Ingresa tu apellido" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">R.U.T</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control" placeholder="Ingresa tu R.U.T (Ejemplo: 1119789-1)"name="rut" value="{{ old('rut') }}" required autofocus>

                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="cellphone" type="text" class="form-control" placeholder="Ingresa tu celular (Ejemplo: 78845687)" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                                @if ($errors->has('cellphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="Ingresa tu email (Ejemplo: email@dominio.com)" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name_user') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="name_user" type="text" class="form-control" name="name_user" value="{{ old('name_user') }}" placeholder="Ingresa tu nombre de usuario" required autofocus>

                                @if ($errors->has('name_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_user') }}</strong>
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
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar <i class="fa fa-user"></i>
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $('#rut').Rut();
</script>
