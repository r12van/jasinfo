@extends('admin.layout.admin')

@section('kontainer')
<div class="content-wrapper">
    <div class="container-full">
    <section class="content">
    <div class="row">

      <div class="col-12">

		@php
			if(!isset($id_wilayah))
				$id_wilayah = old('wilayah');

			if(!isset($id_tipe))
				$id_tipe = old('tipe');
		@endphp

		@if (isset($editMode) && $editMode)
			<div class="alert alert-dark" role="alert">
				<h4 class="alert-heading text-center">Editor dalam Mode Edit</h4>
				<hr>
				<p class="mb-0">Perubahan yang anda lakukan baru akan muncul di tabel berita setelah tabel di refresh.</p>
			</div>
		@endif

		<form id="form-berita" @if (isset($editMode) && $editMode) action="{{route('artikel.update',['artikel' => $id])}}" @else action="{{route('artikel.store')}}"  @endif method="POST" enctype="multipart/form-data">
			@csrf
			@if (isset($editMode) && $editMode)
				@method('PATCH')
			@endif
			<div class="box">
				<div class="box-header with-border">
					@if (isset($editMode) && $editMode)
						<h3 class="box-title">Edit Berita</h3>
					@else
						<h3 class="box-title">Buat Berita Baru</h3>
					@endif
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
											<input class="form-control" type="text" placeholder="Masukan judul berita" id="judul" name="judul" value="{{(isset($judul)) ? $judul : old('judul')}}" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-search-input" class="col-sm-2 col-form-label">Summary</label>
										<div class="col-sm-10">
											<textarea class="form-control" type="text" placeholder="Ringkasan singkat mengenai berita. Text ini yang akan ditampilkan di thumbnail berita." id="summary" name="summary" maxlength="255">{{(isset($summary)) ? $summary : old('summary')}}</textarea>
										</div>
									</div>
									<div class="form-group row">
										<div class="row">
											<div class="col-md-6">

												<div class="form-group">
													<label>Wilayah</label>
													<select class="form-control" name="wilayah" value="">
														@foreach ($list_wilayah as $item)
															<option value="{{$item['id_wilayah']}}" @if($id_wilayah == $item['id_wilayah']) selected @endif>{{$item["nama_wilayah"]}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Tipe</label>
													<select class="form-control" name="tipe" value="{{(isset($tipe)) ? $tipe : old('tipe')}}">
														@foreach ($list_tipe as $item)
															<option value="{{$item['id_tipe']}}" @if($id_tipe == $item['id_tipe']) selected @endif>{{$item["nama_tipe"]}}</option>
														@endforeach
													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="example-date-input" >Date</label>
													<div class="col-sm-10">
													<input class="form-control" name="tanggal" type="date" value="{{(isset($tanggal)) ? $tanggal : now()->toDateString()}}" id="tanggal">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="file">Gambar Banner</label>
										<input type="file" class="form-control-file" id="file" name="banner" accept=".jpg,.jpeg,.png,.webp">
										<small class="form-text text-muted">1920 x 1080p resolusi minimal untuk carrousel</small>
										@if (isset($editMode) && $editMode)
											<small class="form-text text-muted">Biarkan jika tidak ingin mengganti gambar banner.</small>
										@endif
									</div>

									{{-- ck editor --}}
									<div class="box">
										<div class="box-header">
											<h4 class="box-title">Isi Berita<br>

											</h4>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
                                            <textarea id="editor-berita" name="isi" required class="my-editor form-control" cols="30" rows="10">{{(isset($isi)) ? $isi : old('isi')}}</textarea>
										</div>
									</div>

								</div>
								<!-- /.col -->
							</div>
					</form>
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

@endpush

@push('stack-body')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script> --}}
    <script src="{{asset('ckeditor5/build/ckeditor.js')}}"></script>
    <script>
        var ed = ClassicEditor
            .create( document.querySelector( '#editor-berita' ),{
				mediaEmbed:{
					previewsInData:true // ini penting untuk embed media dari youtube, dsb
				},
				simpleUpload:{
					uploadUrl : "{{ route('cke5-img.up') }}",
					headers: {
						'X-CSRF-TOKEN': '{{ csrf_token() }}',
					}
				}
			} )
            .catch( error => {
                console.error( error );
                // alert( error );
            } );
            CKEDITOR.config.width = '100%';
            CKEDITOR.config.height = 600;
            CKEDITOR.replace('#editor-berita', options);
			// ed.setData("testing");

			// var text = <?php
			// 	echo "Test";
			// ?>

			// ed.setData(text);
    </script>

	{{-- @isset($isi) --}}
		<script>
			// editor.setData("testing");
		</script>
	{{-- @endisset --}}
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

