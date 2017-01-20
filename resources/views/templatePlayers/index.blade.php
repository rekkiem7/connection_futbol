@extends('template.default')
@section('content')
    <div class="col-md-10 columna-public animated zoomInUp"><br>
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Plantilla de Jugadores</strong></h3>
            </div>
            <div class="box-body">
                @if($teams_actives)
                    <div class="panel-group" id="accordion">
                        <?php $i=0;?>
                        @foreach($teams_actives as $team)

                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #CC0000;color:#fff;" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$team->teamTournamentId}}">
                                     <table><tr><td><img src="{{asset($team->escude)}}" class="img-circle" style="background-color: #fff" width="80" height="80"/></td><td style="text-align:center">&nbsp;&nbsp;<strong>{{$team->teamName}}</strong> - <strong>{{$team->leagueName}} {{$team->categoryName}}</strong> ( Campeonato de {{$team->formatLeagueName}} {{$team->formatName}} {{$team->year}})</td></tr></table></a>
                                </h4>
                            </div>
                            @if($i==0)
                            <div id="collapse{{$team->teamTournamentId}}" class="panel-collapse collapse in">
                            @else
                            <div id="collapse{{$team->teamTournamentId}}" class="panel-collapse collapse">
                            @endif
                                <div class="panel-body">
                                    @if($team->players)
                                    <div class="table-responsive">
                                        @if(count($team->players)<$team->places)
                                        <br>
                                        <div class="alert alert-danger">
                                            <i class="fa fa-warning"></i>&nbsp;&nbsp;<strong>¡Plantilla Incompleta!</strong>&nbsp;&nbsp;Sólo tienes <strong>{{count($team->players)}} jugadores inscritos </strong>, te faltan  <strong>{{$team->places - count($team->players)}} cupos</strong>
                                        </div>
                                        @endif
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <th>N°</th>
                                                <th>N° Camiseta</th>
                                                <th>Nombre</th>
                                                <th>Posición</th>
                                            </thead>
                                            <tbody>
                                                <?php $cont=1;?>
                                                @foreach($team->players as $players)
                                                <tr>
                                                    <td>{{$cont}}</td>
                                                    <td align="center">@if($players->number===null)<span class="pull-center badge bg-red"><i class="fa fa-warning"></i>&nbsp;&nbsp;Sin número</span> @else{{$players->number}}@endif</td>
                                                    <td>{{$players->name}} {{$players->lastname}} @if($players->captain==1)&nbsp;&nbsp;<span class="pull-center badge bg-blue"><i class="fa fa-user"></i>&nbsp;&nbsp;Capitán</span>@endif</td>
                                                    <td>
                                                        @if(count($players->positions)>0)
                                                            @foreach($players->positions as $positions)
                                                                @if($positions->id==1)
                                                                    <span class="pull-center badge bg-yellow"><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Arquero</span>
                                                                @endif
                                                                @if($positions->id==2)
                                                                    <span class="pull-center badge bg-blue"><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Defensa</span>
                                                                @endif
                                                                @if($positions->id==3)
                                                                    <span class="pull-center badge bg-green"><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Mediocampista</span>
                                                                @endif
                                                                @if($positions->id==4)
                                                                    <span class="pull-center badge bg-red"><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Delantero</span>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <span class="pull-center badge bg-red"><i class="fa fa-warning"></i>&nbsp;&nbsp;Sin posición</span>
                                                        @endif</td>
                                                </tr>
                                                <?php $cont++;?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <?php $i++;?>
                        @endforeach
                    </div>
                @else
                    <div class="col-lg-12">
                        <div class="alert alert-danger">
                            <i class="fa fa-warning"></i>&nbsp;&nbsp;<strong>¡Sin Equipo!</strong>&nbsp;&nbsp;No puedes ver la plantilla actual, ya que tu <strong>equipo no se encuentra actualmente registrado en ningún campeonato</strong>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop