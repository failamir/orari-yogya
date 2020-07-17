<div class="form-group{{ $errors->has('judul') ? 'has-error' : ''}}">
    {!! Form::label('judul', 'Judul', ['class' => 'control-label']) !!}
    {!! Form::text('judul', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('konten') ? 'has-error' : ''}}">
    {!! Form::label('konten', 'Konten', ['class' => 'control-label']) !!}
    {!! Form::textarea('konten', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('konten', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tanggal') ? 'has-error' : ''}}">
    {!! Form::label('tanggal', 'Tanggal', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal', null, ('required' == 'required') ? ['class' => 'form-control col-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
    klik icon untuk memudahkan mengisi
</div>
<div class="form-group{{ $errors->has('gambar') ? 'has-error' : ''}}">
    {!! Form::label('gambar', 'Gambar', ['class' => 'control-label']) !!}
    {!! Form::file('gambar', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
