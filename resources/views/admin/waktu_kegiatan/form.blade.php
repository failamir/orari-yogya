<div class="form-group{{ $errors->has('id_tanggal') ? 'has-error' : ''}}">
    {!! Form::label('id_tanggal', 'Id Tanggal', ['class' => 'control-label']) !!}
    {!! Form::select('id_tanggal', $tanOptions, $selected, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_tanggal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('mulai') ? 'has-error' : ''}}">
    {!! Form::label('mulai', 'Mulai', ['class' => 'control-label']) !!}
    {!! Form::input('time', 'mulai', null, ('required' == 'required') ? ['class' => 'form-control col-2', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('mulai', '<p class="help-block">:message</p>') !!}
    klik icon untuk memudahkan mengisi
</div>
<div class="form-group{{ $errors->has('selesai') ? 'has-error' : ''}}">
    {!! Form::label('selesai', 'Selesai', ['class' => 'control-label']) !!}
    {!! Form::input('time', 'selesai', null, ('required' == 'required') ? ['class' => 'form-control col-2', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('selesai', '<p class="help-block">:message</p>') !!}
    klik icon untuk memudahkan mengisi
</div>
<div class="form-group{{ $errors->has('detail') ? 'has-error' : ''}}">
    {!! Form::label('detail', 'Detail', ['class' => 'control-label']) !!}
    {!! Form::text('detail', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
