@extends('admin.layout.admin')

@section('kontainer')
<div class="content-wrapper">
    <div class="container-full">
    <section class="content">
    <div class="row">

      <div class="col-12">

       <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Galeri</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

              @if (session()->has("alert.success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-square"></i> {!! session("alert.success") !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
              @endif

              @if (session()->has("alert.warning"))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="far fa-exclamation-triangle"></i> {!! session("alert.warning") !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
              @endif

              @if (session()->has("alert.danger"))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle"></i> {!! session("alert.danger") !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
              @endif

              <a type="button" class="waves-effect waves-light btn btn-rounded btn-primary mb-5" href="{{route('galeri.editor')}}" target="_blank">gallery Baru</a>
                <form id="tabel-gallery" action="{{route('gallery.store',['update' => 'table'])}}" method="post">
                    @csrf

                    <div class="collapse" id="wait-div">
                    <div class="jumbotron text-center text-info">
                      <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      Memproses . . .
                    </div>
                  </div>

                    <div class="table-responsive" id="tabel-div">
                      <table id="tabel-gallery-all" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengupload</th>
                                <th>Artikel</th>
                                <th>Isi</th>
                                <th>Wilayah</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Publish</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengupload</th>
                                <th>Artikel</th>
                                <th>Isi</th>
                                <th>Wilayah</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Publish</th>
                                <th>Tindakan</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </form>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <button class="btn btn-primary align-self-right" onclick="$('#tabel-gallery').submit()">Simpan Perubahan</button>
          </div>
       </div>

        <!-- /.box -->      
      </div> 

      <!-- /.col -->
    </div>
    <!-- /.row -->
    @include('admin.modal.preview-galeri')
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
        var tabelgallery = $("#tabel-gallery-all");
        var tabelPublish = $("#tabel-gallery-publish");
        var tabelHighlight = $("#tabel-gallery-highlight");

        tabelgallery.DataTable({
                            processing : true,
                            serverSide : true,
                            ajax : {
                                url : "{{route('gallery.index',['tabel',true])}}"
                            },
                            dom: 'frtip',
                            
                            columns : [
                                {data : "DT_RowIndex",  title: "No", searchable:false, orderable:false},
                                {data : 'judul', title : "Judul"},
                                {data : 'pengupload', title : "Pengupload"},
                                {data : 'artikel', title : "Artikel", 
                                  render : function(data, type, row, meta){
                                    if(data !== null)
                                    {
                                      if(data.length > 30)
                                        return data.substring(0, 30)+"...";
                                      else
                                        return data;
                                    }
                                      
                                  }},
                                {data : 'item', title : "Isi", searchable:false, orderable:false},
                                {data : 'nama_wilayah',name : 'tabel_wilayah.nama_wilayah', title : "Wilayah"},
                                {data : 'nama_tipe', name: 'tabel_tipe_galeri.nama_tipe', title : "Tipe"},
                                {data : 'tanggal', title : "Tanggal"},
                                {data : 'publish', title : "Publish"},
                                {data : "tindakan", title : "Tindakan", searchable:false, orderable:false},
                            ],
                            columnDefs: [
                              {targets: '_all',defaultContent : ''},
                              ],
                              drawCallback : function(){
                              var api = this.api();

                              api.column(8).data().each( function(value,index){
                                // console.log($('*').data('id'))
                                var s1 = value.substring(value.indexOf('id="'))
                                var s2 = s1.substring(s1.indexOf("id="), s1.indexOf('name'))
                                var id = s2.substring(s2.indexOf('-')+1,s2.lastIndexOf('"'))
                                console.log(id)

                                var target = $("input[name='publish["+id+"]']")
                                if(target.length > 0)
                                {
                                  if(target.val() == 'true')
                                    $("input[id='publish-"+id+"']").prop('checked', true)
                                  else
                                    $("input[id='publish-"+id+"']").prop('checked', false)
                                }
                                console.log(target.val())
                              })

                            }
        })

        var shouldWait = false;
        var submiting = false;

          tabelgallery.on( 'draw', function ( e, settings, processing ) {
          shouldWait = processing;
        })

          var p_arr = []
          var h_arr = []

          function publishChange(el){
            var id = $(el).data('id');
            var val = $(el).prop('checked')

            var target = $("input[name='publish["+id+"]']")
            if(target.length)
              {
                target.val(val)
              }
            else
            {
              $("form").append("<input type='hidden' name='publish["+id+"]' value='"+val+"'>")
            }

          }

        function checkboxPublish(status, id){

          console.log("publish change : "+status);
          $.ajax({
               type:'PATCH',
               url:'/gallery/'+id,
               data:{
                  '_token' : '<?php echo csrf_token() ?>',
                  'set-status' : "publish",
                  'value' : status
               },
               success:function() {
                    
                    tabelgallery.ajax.reload(null, false);
                    
               }
            });
        }

        $("#tabel-gallery").on("submit", function(e){
          $('#tabel-div').hide();
          $('#wait-div').collapse('show')

          e.preventDefault();
          this.submit();
        })
      
    </script>

@endpush

{{-- end Untuk datatable --}}

