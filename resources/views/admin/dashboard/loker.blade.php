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
                            <a href="{{ route('tambahLoker') }}" class="pull-right btn btn-md btn-success">Tambah Lowongan</a>
                        </div>
                        <div class="box-body">
                            @if (session()->has("alert.success"))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-square"></i> {{session("alert.success")}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif
                            <div class="table-responsive" id="table-div">
                                <table id="tabelLoker" class="table table-bordered table-striped" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="10%">Tanggal</th>
                                            <th width="15%">Judul</th>
                                            <th width="40%">Isi</th>
                                            <th width="10%">Dokumen</th>
                                            <th width="10%">Tag</th>
                                            <th width="10%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lokers as $loker)
                                            <tr>
                                                <td>{{ $loker->id }}</td>
                                                <td class="text-right">{{ $loker->tanggal }}</td>
                                                <td>{{ $loker->judul }}</td>
                                                <td>{!! $loker->isi !!} ...</td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm btn-info" href="{{ asset($loker->dokumen) }}" target="_blank">Lihat Dokumen</a>
                                                </td>
                                                <td class="text-center">{{ $loker->tag_loker }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-info" href="{{ url('loker/'.$loker->slug) }}" target="_blank">Lihat</a>
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

@push('stack-body')
    <script>

        var tableLoker = $('#tabelLoker').DataTable({
            layout: {
                bottomEnd: {
                    paging: {
                        boundaryNumbers: true
                    }
                }
            },
            columnDefs: [{ orderable: false, targets: [0,2,3,4,5,6] }],
            order: [
                [1, 'desc']
            ]
        });

        tableLoker
            .on('order.dt search.dt', function () {
                var i = 1;

                tableLoker
                    .cells(null, 0, { search: 'applied', order: 'applied' })
                    .every(function (cell) {
                        this.data(i++);
                    });
            })
            .draw();
    </script>
@endpush
