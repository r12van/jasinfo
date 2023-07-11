@extends('admin.layout.admin')

@section('kontainer')
<div class="content-wrapper">
    <div class="container-full">
    <section class="content">
    <div class="row">

      <div class="col-12">

		<form id="form-berita" action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Buat Berita Baru</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					@if (session()->has("alert.success"))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						<i class="fas fa-check-square"></i> {{session("alert.success")}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
					@endif

					@if (session()->has("alert.warning"))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<i class="far fa-exclamation-triangle"></i> {{session("alert.warning")}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
					@endif

					@if (session()->has("alert.danger"))
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<i class="fas fa-exclamation-circle"></i> {{session("alert.danger")}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
					@endif

					

					<div class="row">
								<div class="col-12">
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Judul</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" placeholder="Masukan judul berita" id="judul" name="judul" value="{{old('judul')}}">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Sumary</label>
										<div class="col-sm-10">
											<textarea class="form-control" type="text" placeholder="Ringkasan singkat mengenai berita. Text ini yang akan ditampilkan di thumbnail berita." id="summary" name="summary" value="{{old('summary')}}"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Wilayah</label>
													<select class="form-control" name="wilayah" value="{{old('wilayah')}}">
														@foreach ($wilayah as $item)
															<option value="{{$item['id_wilayah']}}">{{$item["nama_wilayah"]}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Tipe</label>
													<select class="form-control" name="tipe" value="{{old('tipe')}}">
														@foreach ($tipe as $item)
															<option value="{{$item['id_tipe']}}">{{$item["nama_tipe"]}}</option>
														@endforeach
													</select>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label for="example-date-input" >Date</label>
													<div class="col-sm-10">
													<input class="form-control" name="tanggal" type="date" value="{{now()->toDateString()}}" id="tanggal">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="file">Gambar Banner</label>
										<input type="file" class="form-control-file" id="file" name="banner" accept=".jpg,.jpeg,.png,.webp">
										<small class="form-text text-muted  mb-3">1920 x 1080p resolusi minimal untuk carrousel</small>
									</div>

									{{-- ck editor --}}
									<div class="box">
										<div class="box-header">
											<h4 class="box-title">Isi Berita<br>

											</h4>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<textarea id="editor-berita" name="isi" value="{{old('isi')}}"></textarea>
										</div>
									</div>
									
								</div>
								<!-- /.col -->
							</div>
					
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<div class="row">
						<div class="col">
							<a class="btn btn-info" id="btn_previe" target="_blank">Preview</a>
						</div>
						<div class="col text-right">
							<button class="btn btn-primary" onclick="if(confirm('Selesai dan submit berita?')) $('#form-berita').submit()">Submit</button>
							<button class="btn btn-secondary" type="reset">Reset</button>
						</div>
					</div>
					
				</div>
			</div>
		</form>
        <!-- /.box -->      
      </div> 

      <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    </div>
</div>
@endsection

{{-- start ckeditor --}}
@push('stack-head')
    <script src="ckeditor5/build/ckeditor.js"></script>
@endpush

@push('stack-body')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor-berita' ),{
				mediaEmbed:{
					previewsInData:true // ini penting untuk embed media dari youtube, dsb
				},
				simpleUpload:{
					uploadUrl : "/upload/ck-img",
					headers:{
						'X-CSRF-TOKEN': 'CSRF-Token',
					}
				}
			} )
            .catch( error => {
                console.error( error );
                alert( error );
            } );
    </script>
@endpush
{{-- end ckeditor --}}

@push('stack-body')
    <script>
        var form = $("#form-berita")

        document.getElementById("btn_preview").addEventListener("click",function (e)
		{
			// e.preventDefault();

			document.getElementById("form-berita").target = "_blank"
			
            $.ajax({
				type:"POST",
				url: "/artikel?preview=1",
				data: form.serialize(),
			})
        })

        function submitBerita(){
			form.target = ""
        }
    </script>
@endpush