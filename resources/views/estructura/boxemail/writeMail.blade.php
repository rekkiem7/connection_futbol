<style>
#myCarousel{
    width: 400px;
}
</style>
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

<div class="modal modal-default fade" id="leagueTeam">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Equipos</h4>
            </div>
            <div class="modal-body" >
                <center>
                <div id="myCarousel" class="carousel slide" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @if($leagues)
                            @for($i=0;$i<count($leagues);$i++)
                                @if($i==0)
                                    <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
                                @endif
                            @endfor
                        @endif
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @if($leagues)
                            @for($i=0;$i<count($leagues);$i++)
                                @if($i==0)
                                    <div class="item active">
                                        <img src="{{asset($leagues[$i]->escude)}}" alt="Chania">
                                    </div>
                                @else
                                <div class="item">
                                    <img src="{{asset($leagues[$i]->escude)}}" alt="Chania">
                                </div>
                                @endif
                            @endfor
                        @endif
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><span class="fa fa-remove"></span> Cerrar</button>
            </div>
        </div>

    </div>
</div>
<script>
    function searchTeam()
    {
        $('#leagueTeam').appendTo("body").modal('show');
    }

    $(function () {
        CKEDITOR.replace('body');
    });
</script>
