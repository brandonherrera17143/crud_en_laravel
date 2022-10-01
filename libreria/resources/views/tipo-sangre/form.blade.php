<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sangre') }}
            {{ Form::text('sangre', $tipoSangre->sangre, ['class' => 'form-control' . ($errors->has('sangre') ? ' is-invalid' : ''), 'placeholder' => 'Sangre']) }}
            {!! $errors->first('sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>