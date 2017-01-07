<!DOCTYPE html>
<html>
<head>
	@include('librerias')
 	
	<title>Demo profile</title>
</head>
<body>
<div class="row-fluid">
<!--No ocupar este div-->
	<div class="col-lg-1"></div>
<!--Sólo ocupar este div-->	
	<div class="col-lg-10 container">
		      @yield('submenu')
	</div>
<!--No ocupar este div-->
	<div class="col-lg-1"></div>
</div>


</body>
</html>