@php
$hari = [
    'Senin' => 'Senin',
    'Selasa' => 'Selasa',
    'Rabu'  =>  'Rabu',
    'Kamis'  =>  'Kamis',
    'Jumat'  =>  'Jumat',
    'Sabtu'  =>  'Sabtu',
    'Ahad'  =>  'Ahad',
];
@endphp
<!--<div class="form-group{{ $errors->has('hari') ? 'has-error' : ''}}">-->
<!--    {!! Form::label('hari', 'Hari', ['class' => 'control-label']) !!}-->
<!--    {!! Form::select('hari', $hari, ['class' => 'form-control'],('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}-->
<!--    {!! $errors->first('hari', '<p class="help-block">:message</p>') !!}-->
<!--</div>-->
<div class="form-group{{ $errors->has('tanggal') ? 'has-error' : ''}}">
    {!! Form::label('tanggal', 'Tanggal', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal', null, ('required' == 'required') ? ['class' => 'form-control col-4', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
    klik icon untuk memudahkan mengisi
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
