<div class="form-group{{ $errors->has('nama_perusahaan') ? 'has-error' : ''}}">
    {!! Form::label('nama_perusahaan', 'Nama Perusahaan', ['class' => 'control-label']) !!}
    {!! Form::text('nama_perusahaan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama_perusahaan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('deskripsi') ? 'has-error' : ''}}">
    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'control-label']) !!}
    {!! Form::textarea('deskripsi', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tentang') ? 'has-error' : ''}}">
    {!! Form::label('tentang', 'Tentang', ['class' => 'control-label']) !!}
    {!! Form::textarea('tentang', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tentang', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('visi') ? 'has-error' : ''}}">
    {!! Form::label('visi', 'Visi', ['class' => 'control-label']) !!}
    {!! Form::textarea('visi', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('visi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('misi') ? 'has-error' : ''}}">
    {!! Form::label('misi', 'Misi', ['class' => 'control-label']) !!}
    {!! Form::textarea('misi', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('misi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('juknis') ? 'has-error' : ''}}">
    {!! Form::label('juknis', 'PetunJuk Teknis', ['class' => 'control-label']) !!}
    <br>file sebelumnya <br><iframe src="{{ asset('storage/'.$landing->juknis) }}" class="embed-responsive-item" __idm_frm__="915"></iframe><br>
    {!! Form::file('juknis', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('juknis', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('izin') ? 'has-error' : ''}}">
    {!! Form::label('izin', 'Izin Special Call', ['class' => 'control-label']) !!}
    <br>file sebelumnya <br><iframe src="{{ asset('storage/'.$landing->izin) }}" class="embed-responsive-item" __idm_frm__="915"></iframe>
<br>
    {!! Form::file('izin', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('izin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
    {!! Form::textarea('alamat', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('telpon') ? 'has-error' : ''}}">
    {!! Form::label('telpon', 'Telpon', ['class' => 'control-label']) !!}
    {!! Form::text('telpon', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('telpon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('gambar_tentang') ? 'has-error' : ''}}">
    {!! Form::label('gambar_tentang', 'Gambar Tentang', ['class' => 'control-label']) !!}
    <br>gambar sebelumnya <img src="{{ asset('storage/'.$landing->gambar_tentang) }}"><br><br>
    {!! Form::file('gambar_tentang', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('gambar_tentang', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link_video') ? 'has-error' : ''}}">
    {!! Form::label('link_video', 'Link Video', ['class' => 'control-label']) !!}
    {!! Form::text('link_video', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('link_video', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
