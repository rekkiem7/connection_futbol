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

		<div>@include('estructura.sidebar')</div>
	
		<div class="content-columnas">
			<div class="columnas" id="main-content">
				@extends ('estructura.publicaciones')	
			</div>
		</div>
		




