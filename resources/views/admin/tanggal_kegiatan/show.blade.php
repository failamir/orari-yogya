@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tanggal_kegiatan {{ $tanggal_kegiatan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/tanggal_kegiatan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/tanggal_kegiatan/' . $tanggal_kegiatan->id . '/edit') }}" title="Edit Tanggal_kegiatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/tanggal_kegiatan', $tanggal_kegiatan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Tanggal_kegiatan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tanggal_kegiatan->id }}</td>
                                    </tr>
                                    <tr><th> Hari </th><td> {{ $tanggal_kegiatan->hari }} </td></tr><tr><th> Tanggal </th><td> {{ $tanggal_kegiatan->tanggal }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
