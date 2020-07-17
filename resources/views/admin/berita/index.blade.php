@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Berita</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/berita/create') }}" class="btn btn-success btn-sm" title="Add New item">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/berita', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Judul</th><th>Konten</th><th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($berita as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td><td width="600">@if($item->gambar)
                  <img src="{{asset('storage/' . $item->gambar)}}" width="296px"/>
                  @elseif($item->gambar == null)
                  <img src="{{asset('storage/img_berita/default.png')}}" width="296px"/>
                @endif</td><td>{{ $item->tanggal }}</td>
                <td>
                    <?php if($item->status == 'unpublish' or $item->status == null){ ?>
                                            <a href="{{ url('/admin/berita/publish/' . $item->id) }}" title="View item"><button class="btn btn-warning btn-sm">UnPublish</button></a>
                                            <?php }else{ ?>
                                            <a href="{{ url('/admin/berita/unpublish/' . $item->id) }}" title="View item"><button class="btn btn-success btn-sm">Publish</button></a>
                                            <?php } ?>
                </td>
                                        <td>
                                            <a href="{{ url('/admin/berita/' . $item->id) }}" title="View item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/berita/' . $item->id . '/edit') }}" title="Edit item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/berita', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete item',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $berita->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
