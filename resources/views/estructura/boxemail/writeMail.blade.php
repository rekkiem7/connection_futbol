<div class="col-md-8 columna-public animated zoomInUp"><br>
    <div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>Redactar correo</strong></h3>
    </div>
        <div class="box-body">
            {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
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
                <label for="league" class="control-label">Liga:</label>
                <select id="league" class="form-control" name="league" >
                </select>
            </div>
            <div class="form-group">
                <label for="category" class="control-label">Categoria:</label>
                <select id="category" class="form-control" name="category">
                </select>
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
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    $(function () {
        $(".textarea").wysihtml5();
    });
</script>
