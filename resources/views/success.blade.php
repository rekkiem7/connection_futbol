<html>
<head>
@include('template.libraries')
</head>
<body>
<div class="container">
   <div class="row">
       <div class="col col-md-6 col-md-offset-3"   >
           <div class="panel panel-default">
             <div class="panel-heading"><h3 class="panel-title">Registro Exitoso</h3></div>
             <div class="panel-body">
               <h4>Ahora puedes ingresar a EntreLigas FC, con tu usuario y contraseña indicados en el registro</h4>
             </div>
             <div class="panel-footer">
                 <a href="{{ url('/') }}" class="btn btn-primary btn-xs">Iniciar Sesión</a>
               </div>
           </div>
        </div>
   </div>
</div>
</body>
</html>