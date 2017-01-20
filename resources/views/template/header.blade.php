<div class="mainmenu col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<ul>
			<li><a href="{{url('logout')}}"><p><i class="fa fa-power-off" title="Cerrar sesión"></i></p></a></li>
            <li><a href="{{url('/')}}"><p><i class="fa fa-home" title="Inicio"></i></p></a></li>
			<li class="pull-left"><a href="#" class="btn btn-danger btn-bar " >
				<span class="fa fa-bars " aria-hidden="true"></span>
			</a>		
			</li>
		</ul>
</div>
<script>
	$(function(){
    $('.btn-bar').on('click', function(){
        if( $('#sidebar').is(':visible') ) {
            $('#sidebar').animate({ 'width': '0px' }, 'fast', function(){
                $('#sidebar').hide();
            });
            $('#main-content').animate({ 'margin-left': '0%' }, 'slow');
        }
        else {
            $('#sidebar').show();
            $('#sidebar').animate({ 'width': '210px' }, 'fast');
            $('#main-content').animate({ 'margin-left': '20%' }, 'slow');
        }
    });
});
</script>