<style>
    #myCarousel{
        background-color: #000000;

    }

    .custom {
        width: 130px !important;
    }
    /*
    #myCarousel{
        width: 400px;
    }*/

</style>
<input type="hidden" name="url" id="url" value="{{url('/')}}"/>
<div class="col-md-8 columna-public animated zoomInUp"><br>
    <div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>Redactar correo</strong></h3>
    </div>
        <div class="box-body">

            <div class="form-group">
                <label for="email" class="control-label">Para:</label>
                <input id="email" type="email" class="form-control" name="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label">Asunto:</label>
                <input id="subject" type="text" class="form-control" name="subject" required >
            </div>
            <div class="form-group">
                <label for="tipo" class="control-label">Tipo Email:</label>
                <select id="tipo" class="form-control" name="tipo" required >
                    <option value="0">Normal</option>
                    <option value="1">Invitación al Capitán</option>
                    <option value="2">Invitación al Jugador</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-danger"  onclick="searchTeam();"><i class="fa fa-search"></i>&nbsp;&nbsp;Buscar Equipo</button>
            </div>
            <div id="preselection" name="preselection" style="display:none">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-futbol-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">LIGA</span>
                        <span class="info-box-number" id="name_league"></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                      <span class="progress-description" id="format_league">
                        Futbol
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><img src="{{asset('archives/teams/1/escude/1.png')}}" class="img-responsive" /></span>
                    <div class="info-box-content">
                        <span class="info-box-text">EQUIPO</span>
                        <span class="info-box-number">Real Madrid F.C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                          <span class="progress-description">

                          </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="body" class="control-label">Mensaje:</label>
                <textarea id="body" name="body" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                </textarea>
            </div>
            <div class="form-group">
                {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
            </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-default fade" id="leagueTeam">
    <div class="modal-dialog">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h4 class="modal-title">Ligas</h4>
            </div>
            <div class="modal-body" >
                <center>
                <div id="myCarousel" class="carousel slide" data-interval="false">
                    <!-- Indicators -->
                   <!-- <ol class="carousel-indicators">
                        @if($leagues)
                            @for($i=0;$i<count($leagues);$i++)
                                @if($i==0)
                                    <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
                                @endif
                            @endfor
                        @endif
                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @if($leagues)
                            @for($i=0;$i<count($leagues);$i++)
                                @if($i==0)
                                    <div class="item active">
                                        <img src="{{asset($leagues[$i]->escude)}}" class="img-responsive" title="{{$leagues[$i]->name}}" value="{{$leagues[$i]->id}}">
                                    </div>
                                @else
                                <div class="item">
                                    <img src="{{asset($leagues[$i]->escude)}}" class="img-responsive" title="{{$leagues[$i]->name}}" value="{{$leagues[$i]->id}}">
                                </div>
                                @endif
                            @endfor
                        @endif
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" onclick="informationLeague(0)">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" onclick="informationLeague(1)">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </center>
                <div id="infoLeague" name="infoLeague" class="animated zoomInUp">
                    <center><div id="nameLeague"><h3>{{$leagues[0]->name}}</h3></div>
                        <span class="pull-center badge bg-blue" id="formatLeague">Formato :{{$leagues[0]->FormatLeague->name}}</span> <span class="pull-center badge bg-green" id="numberPlayers">N° Jugadores : {{$leagues[0]->FormatLeague->numberPlayers}}</span>  <span class="pull-center badge bg-red" id="numberPlaces"> Cupos Totales por Equipo : {{$leagues[0]->FormatLeague->places}}</span><br><br>
                    </center>
                </div>
                <div id="category_div">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label for="category" class="control-label">Categoria:</label></div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><select class="form-control" id="category" name="category" onchange="select_category();">
                        @if($leagues[0]->CategoryLeague)
                            @foreach($leagues[0]->CategoryLeague as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        @else
                            <option value="0">Sin categoria</option>
                        @endif
                    </select>
                    </div><br><br>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label for="category" class="control-label">Campeonato:</label></div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div id="tournament">
                            @if($leagues[0]->CategoryLeague[0]->Tournament)
                                {{$leagues[0]->CategoryLeague[0]->Tournament->FormatTournament->name}}
                            @else
                                Sin campeonato activo
                            @endif
                        </div>
                    </div>
                </div>
            </div><br>
            <input type="hidden" name="league_selected" id="league_selected" value="{{$leagues[0]->id}}"/>
            <input type="hidden" name="nameleague_selected" id="nameleague_selected" value="{{$leagues[0]->name}}"/>
            <input type="hidden" name="category_selected" id="category_selected" value="{{$leagues[0]->CategoryLeague[0]->id}}"/>
            <input type="hidden" name="tournament_selected" id="tournament_selected" value="{{$leagues[0]->CategoryLeague[0]->Tournament->id}}"/>
            <center><button class="btn btn-primary pull-center" onclick="select_league()"><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Elegir</button></center><br>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><span class="fa fa-remove"></span> Cerrar</button>
            </div>
        </div>

    </div>
</div>

<div class="modal modal-default fade" id="Teams">
    <div class="modal-dialog">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h4 class="modal-title">Equipos</h4>
            </div>
            <div class="modal-body" id="team_body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><span class="fa fa-remove"></span> Cerrar</button>
            </div>
        </div>

    </div>
</div>
<script>
    var leagues=<?php echo json_encode($leagues)?>;
    function informationLeague(option) {
        var activeSlide = $('.active');

        var nextImage, prevImage;
        nextImage = activeSlide.find('img').attr('value');

        if (activeSlide.next().length) {
            nextImage = activeSlide.next().find('img').attr('value')
        } else {
            nextImage = $('.carousel-inner').children().first().find('img').attr('value');
        }

        if (activeSlide.prev().length) {
            prevImage = activeSlide.prev().find('img').attr('value')
        } else {
            prevImage = $('.carousel-inner').children().last().find('img').attr('value');
        }

        var leagues2=leagues;
        var name;var format;var players;var places;
        for(var i=0;i<leagues2.length;i++)
        {
            if(option==1) {
                if (leagues2[i]["id"] == nextImage) {
                    $('#league_selected').val(nextImage);
                    name=leagues2[i]["name"];
                    format=leagues2[i]["FormatLeague"]["name"];
                    players=leagues2[i]["FormatLeague"]["numberPlayers"];
                    places=leagues2[i]["FormatLeague"]["places"];
                    $('#category').empty();

                    if(leagues2[i]["CategoryLeague"].length>0)
                    {
                        $('#category_selected').val(leagues2[i]["CategoryLeague"][0]["id"]);
                        $('#nameleague_selected').val(leagues2[i]["name"]+'('+leagues2[i]["CategoryLeague"][0]["name"]+')');
                        for(var t=0;t<leagues2[i]["CategoryLeague"].length;t++)
                        {
                            $("#category").append(new Option(leagues2[i]["CategoryLeague"][t]["name"], leagues2[i]["CategoryLeague"][t]["id"]));
                        }
                    }else{
                        $("#category").append(new Option('Sin categoria', 0));
                        $('#category_selected').val(0);
                        $('#nameleague_selected').val(leagues2[i]["name"]);
                    }
                }
            }else{
                if (leagues2[i]["id"] == prevImage) {
                    $('#league_selected').val(prevImage);
                    $('#nameleague_selected').val(leagues2[i]["name");
                    name=leagues2[i]["name"];
                    format=leagues2[i]["FormatLeague"]["name"];
                    players=leagues2[i]["FormatLeague"]["numberPlayers"];
                    places=leagues2[i]["FormatLeague"]["places"];
                    $('#category').empty();
                    if(leagues2[i]["CategoryLeague"].length>0)
                    {
                        $('#category_selected').val(leagues2[i]["CategoryLeague"][0]["id"]);
                        $('#nameleague_selected').val(leagues2[i]["name"]+'('+leagues2[i]["CategoryLeague"][0]["name"]+')');
                        for(var t=0;t<leagues2[i]["CategoryLeague"].length;t++)
                        {

                            $("#category").append(new Option(leagues2[i]["CategoryLeague"][t]["name"], leagues2[i]["CategoryLeague"][t]["id"]));
                        }
                    }else{
                        $("#category").append(new Option('Sin categoria', 0));
                        $('#category_selected').val(0);
                        $('#nameleague_selected').val(leagues2[i]["name"]);
                    }
                }
            }
        }
        if(name!==undefined)
        {
            $('#nameLeague').html('<h3>'+name+'</h3>');
            $('#formatLeague').html('Formato : '+format);
            $('#numberPlayers').html('N° Jugadores : '+players);
            $('#numberPlaces').html('Cupos Totales por Equipo : '+places);
        }
    }
    function searchTeam()
    {
        $('#leagueTeam').appendTo("body").modal('show');
    }

    function select_category()
    {
        var c=$('#category').val();
        $('#category_selected').val(c);
    }

    function select_league()
    {
        var url=$('#url').val();
        $('#leagueTeam').modal('hide');
        var l=$('#league_selected').val();
        var c=$('#category_selected').val();
        var t=$('#tournament_selected').val();
        var teams=new Array();
        for(var i=0;i<leagues.length;i++)
        {
            if(leagues[i]["id"]==l)
            {
                if(leagues[i]["CategoryLeague"])
                {
                    for(var y=0;y<leagues[i]["CategoryLeague"].length;y++)
                    {
                        if(leagues[i]["CategoryLeague"][y]["id"]==c)
                        {
                            if(leagues[i]["CategoryLeague"][y]["Tournament"] && leagues[i]["CategoryLeague"][y]["Tournament"]["id"]==t)
                            {
                               if(leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"])
                               {
                                   var salida="<h4>Selecciona el equipo para realizar la invitación</h4>";
                                   salida+='<div class="table-responsive"><table><tr>';
                                   for(var z=0;z<leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"].length;z++)
                                   {
                                        salida+='<td style="padding-top:10px"><button class="btn btn-primary custom" onclick=select_team('+leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"][z]["id"]+',"'+encodeURIComponent(leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"][z]["name"])+'","'+encodeURIComponent(leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"][z]["escude"])+'",'+l+','+c+','+t+')><img src="'+url+'/'+leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"][z]["escude"]+'" width="25px" height="25px"><br>'+leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"][z]["name"].toUpperCase()+'</button>&nbsp;&nbsp;</td>';

                                        if((z+1)%4==0 && z!=leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"].length-1)
                                        {
                                            salida+='</tr><tr>';
                                        }

                                       if(z==leagues[i]["CategoryLeague"][y]["Tournament"]["Teams"].length-1)
                                       {
                                           salida+='</tr>';
                                       }
                                   }
                                   salida+='</table></div>'
                                   $('#team_body').html(salida);
                                   $('#Teams').appendTo("body").modal('show');
                               }
                            }
                        }
                    }
                }
            }
        }

    }

    function select_team(id,name,escude,league,category,tournament)
    {
        alert(id);
        name=decodeURIComponent(name);
        escude=decodeURIComponent(escude);
        
    }

    $(function () {
        CKEDITOR.replace('body');
    });
</script>
