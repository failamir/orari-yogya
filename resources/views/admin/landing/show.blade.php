@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Landing Page</div>
                    <div class="card-body">

                        <!-- <a href="{{ url('/admin/landing') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> -->
                        <a href="{{ url('/admin/landing/' . $landing->id . '/edit') }}" title="Edit Landing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/landing', $landing->id],
                            'style' => 'display:inline'
                        ]) !!}
                            <!-- {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Landing',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!} -->
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <!-- <th>ID</th><td>{{ $landing->id }}</td> -->
                                    </tr>
                                    <tr><th> Nama Perusahaan </th><td> {{ $landing->nama_perusahaan }} </td></tr><tr><th> Deskripsi </th><td> {{ $landing->deskripsi }} </td></tr><tr><th> Tentang </th><td> {{ $landing->tentang }} </td></tr>
                                    <tr><tr><th>
                                        Visi
                                    </th><td>
                                        {{ $landing->visi }}
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Misi
                                    </th><td>
                                        {{ $landing->misi }}
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Petunjuk Teknis
                                    </th><td>
                                    <!--<a href="{{ asset('storage/'.$landing->juknis) }}">Buka-->
                                    status : <?php if($landing->status_juknis == 'unpublish' or $landing->status_juknis == null){ ?>
                                            <a href="{{ url('/admin/landing/publish_juknis/' . $landing->id) }}" title="View item"><button class="btn btn-warning btn-sm">UnPublish</button></a>
                                            klik untuk publish
                                            <?php }else{ ?>
                                            <a href="{{ url('/admin/landing/unpublish_juknis/' . $landing->id) }}" title="View item"><button class="btn btn-success btn-sm">Publish</button></a>
                                            klik untuk unpublish
                                            <?php } ?> <br>
                                    <iframe src="{{ asset('storage/'.$landing->juknis) }}" class="embed-responsive-item" __idm_frm__="915"></iframe>
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Izin Special Call
                                    </th><td>
                                        status : <?php if($landing->status_izin == 'unpublish' or $landing->status_izin == null){ ?>
                                            <a href="{{ url('/admin/landing/publish_izin/' . $landing->id) }}" title="View item"><button class="btn btn-warning btn-sm">UnPublish</button></a>
                                            klik untuk publish
                                            <?php }else{ ?>
                                            <a href="{{ url('/admin/landing/unpublish_izin/' . $landing->id) }}" title="View item"><button class="btn btn-success btn-sm">Publish</button></a>
                                            klik untuk unpublish
                                            <?php } ?> <br>
                                    <!--<a href="{{ asset('storage/'.$landing->izin) }}">Buka-->
                                    <iframe src="{{ asset('storage/'.$landing->izin) }}" class="embed-responsive-item" __idm_frm__="915"></iframe>
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Alamat
                                    </th><td>
                                        {{ $landing->alamat }}
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Email
                                    </th><td>
                                        {{ $landing->email }}
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Telpon
                                    </th><td>
                                        {{ $landing->telpon }}
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Gambar bagian Tentang
                                    </th><td>
                                        <img src="{{ asset('storage/'.$landing->gambar_tentang) }}">
                                    </td></tr></tr>
                                    <tr><tr><th>
                                        Link Video Profil
                                    </th><td>
                                        <a href="{{ $landing->link_video }}">{{ $landing->link_video }}
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
