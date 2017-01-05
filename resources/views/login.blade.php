<html>
<head>
	@include('librerias')
	<style>
	body{
	  background-image:url('background.jpg');
	  background-repeat:repeat;
    background-size:10%;
	}
	</style>
</head>
<body>
<div class="login-box animated fadeInDown">
      <div class="login-logo">
        <a href="#" style="color:#ffffff"><b ><img src="{{asset('EntreLigas.png')}}" width="100%"/></b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Ingresa para iniciar tu sesión</p>
        <form action="{{ URL::to('login') }}" method="post" role="form" id="form" name="form">
          <div class="form-group has-feedback">
          	<label>Usuario</label>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">
            <span class="glyphicon  glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label>Contraseña</label>
            <input type="password" class="form-control" placeholder="Password" id="clave" name="clave">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fadeInDown">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                      <h4>
                        <i class="icon fa fa-ban"></i>
                        Datos Incorrectos
                      </h4>
                        {{ Session::get('error') }}
                    </div>
                        @endif
        </form>
          <div class="form-group has-feedback">
            <center><button class="btn btn-primary" id="submit"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;Iniciar sesión</button>&nbsp;&nbsp;<button class="btn btn-success" id="registrar"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Registrarse</button><br><br>
            		<a href="">¿Has olvidado la contraseña?</a>
            </center>
          </div>

      </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
</body>
</html>
<script>
$('#registrar').click(function(){
    window.open("{{URL::to('/register')}}","_self");
});
$('#submit').click(function(){
    $('#form').submit();
});

</script>