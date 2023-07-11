@extends('admin.layout.admin')

@section('kontainer')
<div class="content-wrapper">
    <div class="container-full">
    <section class="content">
    <div class="row">

      <div class="col-12">

       <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Berita</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <button type="button" class="waves-effect waves-light btn btn-rounded btn-primary mb-5" data-toggle="modal" data-target=".new-berita">Berita Baru</button>

              <div class="table-responsive">
                <table id="tabel-berita-all" class="table table-bordered table-striped" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Sumary</th>
                          <th>Isi</th>
                          <th>Wilayah</th>
                          <th>Tipe</th>
                          <th>Tanggal</th>
                          <th>Highlight</th>
                          <th>Banner</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  
                  <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Sumary</th>
                        <th>Isi</th>
                        <th>Wilayah</th>
                        <th>Tipe</th>
                        <th>Tanggal</th>
                        <th>Highlight</th>
                        <th>Banner</th>
                        <th>Aksi</th>
                      </tr>
                  </tfoot>
              </table>
              </div>
          </div>
          <!-- /.box-body -->
       </div>

        <!-- /.box -->      
      </div> 

      <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    </div>
</div>
@endsection

{{-- start Untuk datatable --}}
@push('stack-head')
{{-- datatable --}}
{{-- sumber : https://datatables.net/download/ --}}
    <link href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/datatables.min.css" rel="stylesheet"/>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/datatables.min.js"></script>
@endpush

@push('stack-body')

    <script>
        var tabelBerita = $("#tabel-berita-all");
        var tabelPublish = $("#tabel-berita-publish");
        var tabelHighlight = $("#tabel-berita-highlight");

        tabelBerita.DataTable({
                            processing : true,
                            serverSide : true,
                            ajax : {
                                url : "artikel?tabel='all'"
                            },
                            dom: 'Bfrtip',
                            buttons :[
                                'excelHtml5',
                                'csvHtml5',
                                'pdfHtml5'
                            ],
                            columns : [
                                {data:"DT_RowIndex",  title: "No", searchable:false, orderable:false},
                                {data : 'judul', title : "Judul"},
                                {data : 'summary', title : "Summary"},
                                {data : 'banner', title : "Banner"},
                                {data : 'nama_wilayah',name : 'tabel_wilayah.nama_wilayah', title : "Wilayah"},
                                {data : 'nama_tipe', name: 'tabel_tipe_berita.nama_tipe', title : "Tipe"},
                                {data : 'tanggal', title : "Tanggal"},
                                {data : 'highlight', title : "Highlight"},
                                {data : 'publish', title : "Publish"},
                                {title : "Tindakan", searchable:false, orderable:false},
                            ],
                            columnDefs: [
                              {targets: '_all',defaultContent : ''},
                              ],
        })

      
    </script>

@endpush

{{-- end Untuk datatable --}}