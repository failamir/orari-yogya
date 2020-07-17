@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Agenda {{ $agenda->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/agenda') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/agenda/' . $agenda->id . '/edit') }}" title="Edit Agenda"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/agenda', $agenda->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Agenda',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $agenda->id }}</td>
                                    </tr>
                                    <tr><th> Nama Agenda </th><td> {{ $agenda->nama_agenda }} </td></tr><tr><th> Deskripsi Agenda </th><td> {{ $agenda->deskripsi_agenda }} </td></tr><tr><th> Lokasi Agenda </th><td> {{ $agenda->lokasi_agenda }} </td></tr>
                                    <tr><tr><th>Gambar</th><td>
                                        @if($agenda->gambar)
                                        <img src="{{asset('storage/' . $agenda->gambar)}}" width="296px"/>
                                        @endif
                                        </td></tr>
                                        <tr><th> Tanggal Mulai </th><td> {{ $agenda->tanggal_mulai }} </td></tr>
                                        <tr><th> Jam Mulai </th><td> {{ $agenda->jam_mulai }} </td></tr>
                                        <tr><th> Tanggal selesai </th><td> {{ $agenda->tanggal_selesai }} </td></tr>
                                        <tr><th> Jam selesai </th><td> {{ $agenda->jam_selesai }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
