<div class="rightbar" id="sidebar">
	<div class="animated zoomInUp">
		<a href="{{url('/')}}"><img class="brand" src="EntreLigas.png" alt="" width="150" ></a>
		<div class="photofile">
			<img class="img-circle" src="{{asset(Session::get('image'))}}" alt="" width="80" height="80">
		</div>
		<div class="nametitle" align="center">
			<span class="upper">{{Session::get('name').' '.Session::get('lastname')}}</span><br>
			<span class="lowcasse">Perfil {{Session::get('role')}} </span>
			<hr>				
		</div>
		<div class="contentbar" >
			<ul>
				@if(Session::get('role_id')==1)
				<li>
					<a href="{{url('leagues_information')}}">
						<i class="fa fa-user"></i><span>Información</span>
					</a>
				</li>
				<li>
					<a href="{{url('emails')}}">
						<i class="fa fa-envelope" aria-hidden="true"></i><span>Mensajes</span>
					</a>
				</li>
				@endif
				@if(Session::get('role_id')!=1)
				<li>
					<a href="{{url('/templatePlayers')}}">
						<i class="fa fa-shield" aria-hidden="true">&nbsp;</i><span>Equipo</span>
					</a>
				</li>
				@endif
			</ul>
		</div>	
	</div>			
</div>