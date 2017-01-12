@include('submenu.principalmenu')
<!-- <script>
$( document ).click(function() {
  $( "#toggle" ).toggle( "slide" );
});
</script> -->
<script>
	$(function(){
    $('.btn-bar').on('click', function(){
        if( $('#sidebar').is(':visible') ) {
            $('#sidebar').animate({ 'width': '0px' }, 'slow', function(){
                $('#sidebar').hide();
            });
            $('#main-content').animate({ 'margin-left': '0px' }, 'slow');
        }
        else {
            $('#sidebar').show();
            $('#sidebar').animate({ 'width': '210px' }, 'slow');
            $('#main-content').animate({ 'margin-left': '210px' }, 'slow');
        }
    });
});
</script>
<style>
	 #main-content {
  margin-left: 210px;
    position :relative;
</style>
<header>@yield('submenu.principalmenu')</header>

	<div class="rightbar" id="sidebar">
		<img class="brand" src="EntreLigas.png" alt="" width="150">
		<div class="photofile">
			<img class="img-circle" src="player.jpg" alt="" width="80" height="80">			
		</div>
		<div class="nametitle" align="center">
			<span class="upper">Sergio Chaves</span><br>
			<span class="lowcasse">Perfil jugador </span>
			<hr>				
		</div>
		<div class="contentbar" >
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-user"></i><span>Información</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bar-chart" aria-hidden="true"></i><span>Estadísticas</span>
					</a>
				</li><li>
					<a href="#">
						<i class="fa fa-envelope" aria-hidden="true"></i><span>Mensajes</span>
					</a>
				</li><li>
					<a href="#">
						<i class="fa fa-shield" aria-hidden="true">&nbsp;</i><span>Equipo</span>
					</a>
				</li><li>
					<a href="#">
						<i class="fa fa-futbol-o" aria-hidden="true"></i><span>Fechas</span>
					</a>
				</li>	
			</ul>
			
		</div>			
	</div>
	
		<div class="col-lg-8 content-columnas">
			<div class="columnas" id="main-content">
				@extends ('estructura.publicaciones')	
			</div>
		</div>
		<div class="col-lg-4">
			<div class="leftbar">
				<h1>hola mundo</h1>
			</div>
		</div>





