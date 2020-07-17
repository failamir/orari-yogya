<div class="form-group{{ $errors->has('callsign') ? 'has-error' : ''}}">
    {!! Form::label('callsign', 'Callsign', ['class' => 'control-label']) !!}
    {!! Form::text('callsign', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('callsign', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('checkin') ? 'has-error' : ''}}">
    {!! Form::label('checkin', 'Checkin', ['class' => 'control-label']) !!}
    <?php if($tanggal != null){ echo '<br>'. $tanggal;} ?>
    {!! Form::input('datetime-local', 'checkin', null, ('required' == 'required') ? ['class' => 'form-control col-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('checkin', '<p class="help-block">:message</p>') !!}
    klik icon untuk memudahkan mengisi
</div>

<div class="form-group{{ $errors->has('kategori') ? 'has-error' : ''}}">
    {!! Form::label('kategori', 'Kategori', ['class' => 'control-label']) !!}
    {{ Form::select('kategori', $katOptions, $selected, ['class'=>'form-control']) }}
    {!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
</div>
<!--<div class="form-group{{ $errors->has('counter') ? 'has-error' : ''}}">-->
<!--    {!! Form::label('counter', 'Counter', ['class' => 'control-label']) !!}-->
<!--    {!! Form::number('counter', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}-->
<!--    {!! $errors->first('counter', '<p class="help-block">:message</p>') !!}-->
<!--</div>-->
<div class="form-group{{ $errors->has('file') ? 'has-error' : ''}}">
    {!! Form::label('file', 'File', ['class' => 'control-label']) !!}
    {!! Form::file('file', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
