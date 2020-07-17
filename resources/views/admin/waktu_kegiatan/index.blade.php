@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Waktu_kegiatan</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/waktu_kegiatan/create') }}" class="btn btn-success btn-sm" title="Add New Waktu_kegiatan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/waktu_kegiatan', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Id Tanggal</th><th>Mulai</th><th>Selesai</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($waktu_kegiatan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>
                                        <!-- {{ $item->id_tanggal }} -->
                                        <?php
$tmp = \App\Tanggal_kegiatan::find($item->id_tanggal);
?>
{{ $tmp->hari . ' ' . $tmp->tanggal }}
                                        </td><td>{{ $item->mulai }}</td><td>{{ $item->selesai }}</td>
                                        <td>
                                            <a href="{{ url('/admin/waktu_kegiatan/' . $item->id) }}" title="View Waktu_kegiatan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/waktu_kegiatan/' . $item->id . '/edit') }}" title="Edit Waktu_kegiatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/waktu_kegiatan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Waktu_kegiatan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $waktu_kegiatan->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
