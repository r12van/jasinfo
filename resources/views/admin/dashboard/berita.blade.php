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

              <a type="button" class="waves-effect waves-light btn btn-rounded btn-primary mb-5" href="{{route('adminBuatBerita')}}" target="_blank">Berita Baru</a>
                <form id="tabel-berita" action="{{route('artikel.store',['update' => 'table'])}}" method="post">
                  @csrf

                  <div class="collapse" id="wait-div">
                    <div class="jumbotron text-center text-info">
                      <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      Memproses . . .
                    </div>
                  </div>

                    <div class="table-responsive" id="table-div">
                      <table id="tabel-berita-all" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Sumary</th>
                                <th>Banner</th>
                                <th>Wilayah</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Highlight</th>
                                <th>Publish</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>

                            <tfoot>
                              <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Sumary</th>
                                <th>Banner</th>
                                <th>Wilayah</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Highlight</th>
                                <th>Publish</th>
                                <th>Tindakan</th>
                              </tr>
                            </tfoot>
                        </table>
                    </div>
                  </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <button class="btn btn-primary align-self-right" type="submit">Simpan Perubahan</button>
          </div>
       </div>
      </form>


        <!-- /.box -->
      </div>

      <!-- /.col -->
    </div>
    <!-- /.row -->
    @include('admin.modal.preview-banner')
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
        var tabelPublish = $("#tabel-berita-publish");
        var tabelHighlight = $("#tabel-berita-highlight");

        var tabelBerita = $("#tabel-berita-all").DataTable({
                            processing : true,
                            serverSide : true,
                            paging:true,
                            pageLength:5,
                            lengthMenu:[
                              [5,10,25,-1],
                              [5,10,25,"All"]
                            ],
                            ajax : {
                                url : "artikel?tabel='all'"
                            },
                            dom: 'lfrtip',
                            columns : [
                                {data : "DT_RowIndex",  title: "No", searchable:false, orderable:false},
                                {data : 'judul', title : "Judul"},
                                {data : 'penulis', title : "Penulis"},
                                {data : 'summary', title : "Summary",
                                  render : function(data, type, row, meta){
                                      if(data.length > 30)
                                        return data.substring(0, 30)+"...";
                                      else
                                        return data;
                                  }},
                                {data : 'banner', title : "Banner", searchable:false, orderable:false},
                                {data : 'nama_wilayah',name : 'tabel_wilayah.nama_wilayah', title : "Wilayah"},
                                {data : 'nama_tipe', name: 'tabel_tipe_berita.nama_tipe', title : "Tipe"},
                                {data : 'tanggal', title : "Tanggal"},
                                {data : 'highlight', title : "Highlight"},
                                {data : 'publish', title : "Publish"},
                                {data : "tindakan", title : "Tindakan", searchable:false, orderable:false},
                            ],
                            order: [[7, 'desc']],
                            columnDefs: [
                              {targets: '_all',defaultContent : ''},
                              ],
                            drawCallback : function(){
                              var api = this.api();

                              api.column(8).data().each(function(value){
                                var s1 = value.substring(value.indexOf("-id="))
                                var s2 = s1.substring(s1.indexOf("id="), s1.indexOf('>'))
                                var id = s2.substring(s2.indexOf('"')+1,s2.lastIndexOf('"'))
                                console.log(id)

                                var target = $("input[name='highlight["+id+"]']")
                                if(target.length > 0)
                                {
                                  $("select[id='highlight-"+id+"'] option[value='"+target.val()+"']").prop('selected',true)
                                }
                                console.log(target.val())
                              })

                              api.column(9).data().each( function(value,index){
                                // console.log($('*').data('id'))
                                var s1 = value.substring(value.indexOf("-id="))
                                var s2 = s1.substring(s1.indexOf("id="), s1.indexOf('>'))
                                var id = s2.substring(s2.indexOf('"')+1,s2.lastIndexOf('"'))
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

        tabelBerita.on( 'draw', function ( e, settings, processing ) {
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

        function highlightChange(el){

            var id = $(el).data('id');
            var val = $(el).val()

            var target = $("input[name='highlight["+id+"]']")
            if(target.length)
              {
                target.val(val)
              }
            else
            {
              $("form").append("<input type='hidden' name='highlight["+id+"]' value='"+val+"'>")
            }


        }

        // magic untuk mengatasi submit hanya current page dan tidak semua input di tiap page
        // shouldwait, submiting, dan processing.dt jangan sampai lupa
        $("#tabel-berita").on("submit", function(e){
          $("#table-div").hide()
          $("#wait-div").collapse('show')

          e.preventDefault();

          // var form = this;

          // console.log(p_arr)
          // console.log(h_arr)

          // $.each(p_arr, function (index, value) {
          //   console.log(index)
          //   console.log(form)
          //    $(form).append($('<input>').attr('type','hidden').attr('name','publish['+index+']').val(value))
          // });

          // $.each(h_arr, function (index, value) {
          //   console.log(index)
          //    $(form).append($('<input>').attr('type','hidden').attr('name','highlight['+index+']').val(value))
          // });
          this.submit()

          // tabelBerita.page.len(-1)
          // // tabelBerita.draw()
          // e.preventDefault();

          // setInterval(() => {
          //   console.log(shouldWait)
          //   if(!shouldWait && !submiting)
          //   {
          //     var arr = tabelBerita.$('select').serializeArray()
          //     $("#hidden1").val(arr)
          //     submiting = true;
          //     // console.log(arr);
          //     this.submit()
          //   }
          // }, 1000);

        })

    </script>

@endpush

{{-- end Untuk datatable --}}
