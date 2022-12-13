<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Título</strong>
            {!! Form::text('title', null, ['placeholder' => 'Digite o título', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Decrição</strong>
            {!! Form::text('description', null, ['placeholder' => 'Digite a descrição', 'class' => 'form-control', 'style'=>'height:150px']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>