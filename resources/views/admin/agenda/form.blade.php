<div class="form-group{{ $errors->has('nama_agenda') ? 'has-error' : ''}}">
    {!! Form::label('nama_agenda', 'Nama Agenda', ['class' => 'control-label']) !!}
    {!! Form::text('nama_agenda', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama_agenda', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('deskripsi_agenda') ? 'has-error' : ''}}">
    {!! Form::label('deskripsi_agenda', 'Deskripsi Agenda', ['class' => 'control-label']) !!}
    {!! Form::textarea('deskripsi_agenda', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('deskripsi_agenda', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('lokasi_agenda') ? 'has-error' : ''}}">
    {!! Form::label('lokasi_agenda', 'Lokasi Agenda', ['class' => 'control-label']) !!}
    {!! Form::text('lokasi_agenda', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('lokasi_agenda', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tanggal_mulai') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_mulai', 'Tanggal Mulai', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal_mulai', null, ('required' == 'required') ? ['class' => 'form-control-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tanggal_mulai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('jam_mulai') ? 'has-error' : ''}}">
    {!! Form::label('jam_mulai', 'Jam Mulai', ['class' => 'control-label']) !!}
    {!! Form::input('time', 'jam_mulai', null, ('required' == 'required') ? ['class' => 'form-control-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jam_mulai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tanggal_selesai') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_selesai', 'Tanggal Selesai', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal_selesai', null, ('required' == 'required') ? ['class' => 'form-control-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tanggal_selesai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('jam_selesai') ? 'has-error' : ''}}">
    {!! Form::label('jam_selesai', 'Jam Selesai', ['class' => 'control-label']) !!}
    {!! Form::input('time', 'jam_selesai', null, ('required' == 'required') ? ['class' => 'form-control-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jam_selesai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('gambar') ? 'has-error' : ''}}">
    {!! Form::label('gambar', 'Gambar', ['class' => 'control-label']) !!}
    {!! Form::file('gambar', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
