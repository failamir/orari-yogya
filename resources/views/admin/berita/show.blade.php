@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Detail Berita {{ $beritum->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/berita') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/berita/' . $beritum->id . '/edit') }}" title="Edit Beritum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/berita', $beritum->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Beritum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $beritum->id }}</td>
                                    </tr>
                                    <tr><th> Judul </th><td> {{ $beritum->judul }} </td></tr><tr><th> Konten </th><td width="300" height="200"> {{ $beritum->konten }} </td></tr><tr><th> Tanggal </th><td> {{ $beritum->tanggal }} </td></tr>
                                    <tr><tr><th>Gambar</th><td>
                                        @if($beritum->gambar)
                  <img src="{{asset('storage/' . $beritum->gambar)}}" width="296px"/>
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
