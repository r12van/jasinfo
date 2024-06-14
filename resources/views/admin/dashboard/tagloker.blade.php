@extends('admin.layout.admin')

@section('kontainer')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tabel Lowongan</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive" id="table-div">
                                <table id="tabel-tag" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="10%">Slug</th>
                                            <th width="15%">Nama</th>
                                            <th width="10%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tags as $tag)
                                            <tr>
                                                <td>{{ $tag->id }}</td>
                                                <td>{{ $tag->slug }}</td>
                                                <td>{{ $tag->tag_loker }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-info" href="{{ url('tag/'.$tag->slug) }}" target="_blank">Lihat</a>
                                                        <a class="btn btn-sm btn-primary" href="#" target="_blank">Ubah</a>
                                                        <a class="btn btn-sm btn-danger" href="#" target="_blank">Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection
