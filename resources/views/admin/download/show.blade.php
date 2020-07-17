@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Download {{ $download->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/download') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/download/' . $download->id . '/edit') }}" title="Edit Download"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/download', $download->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Download',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $download->id }}</td>
                                    </tr>
                                    <tr><th> Callsign </th><td> {{ $download->callsign }} </td></tr><tr><th> Checkin </th><td> {{ $download->checkin }} </td></tr><tr><th> Kategori </th><td> 
                                    <?php
$tmp = \App\Kategori::find($download->kategori);
?>
{{ $tmp->nama }}
                                    </td></tr>
                                    <tr><tr><th>File</th><td>
                                        @if($download->file)
                    <a href="{{asset('storage/' . $download->file)}}"> Buka</a>
                @endif
                                    </td></tr></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
