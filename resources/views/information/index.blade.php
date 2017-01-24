@extends('template.default')
@section('content')
    <div class="col-lg-8 columna-public animated zoomInUp"><br>
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Información de Ligas</strong></h3>
            </div>
            <div class="box-body">
                @if($leagues)
                <div class="panel-group" id="accordion">
                    <?php $i=0;?>
                    @foreach($leagues as $l)
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #CC0000;color:#fff;" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$l->id}}">
                                        <table><tr><td><img src="{{asset($l->escude)}}" class="img-circle" style="background-color: #fff" width="40" height="40"/></td><td style="text-align:center">&nbsp;&nbsp;<strong>{{$l->name}}</strong></td></tr></table></a>
                                </h4>
                            </div>
                            @if($i==0)
                            <div id="collapse{{$l->id}}" class="panel-collapse collapse in">
                            @else
                            <div id="collapse{{$l->id}}" class="panel-collapse collapse">
                            @endif
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="category{{$l->id}}" class="control-label">Categoria:</label>
                                        <select id="category{{$l->id}}" class="form-control">
                                        @foreach($l->Category as $Category)
                                            <option value="{{$Category->id}}">{{$Category->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php $i++;?>
                   @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
@stop