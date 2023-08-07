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
				<p class="mb-0">Perubahan yang anda lakukan baru akan muncul di tabel galeri setelah tabel di refresh.</p>
			</div>
		@endif


		<form id="form-galeri" @if (isset($editMode) && $editMode) action="{{route('gallery.update',['gallery' => $id])}}" @else action="{{route('galeri.store')}}"  @endif method="POST" enctype="multipart/form-data">
			@csrf
			@if (isset($editMode) && $editMode)
				@method('PATCH')
			@endif
			<div class="box">
				<div class="box-header with-border">
					@if (isset($editMode) && $editMode)
						<h3 class="box-title">Edit Galeri</h3>
					@else
						<h3 class="box-title">Buat Galeri Baru</h3>
					@endif
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					@if (session()->has('alert-success'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						<i class="fas fa-check-square"></i> {{session('alert-success')}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
					@endif

					@if (session()->has('alert-warning'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<i class="far fa-exclamation-triangle"></i> {{session('alert-warning')}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
					@endif

					@if (session()->has('alert-danger'))
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<i class="fas fa-exclamation-circle"></i> {{session('alert-danger')}}
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
											<input class="form-control" type="text" placeholder="Masukan judul galeri" id="judul" name="judul" value="{{(isset($judul)) ? $judul : old('judul')}}" autocomplete="off" required>
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

									<div class="form-group row">
										<label for="summary" class="col-sm-2 col-form-label">Summary</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="summary" id="summary" cols="30" rows="3" placeholder="(opsional) Tambahkan summary untuk galeri.">{{(isset($summary)) ? $summary : old('summary')}}</textarea>
										</div>
									</div>

									<div class="form-group row">
										<label for="artikel" class="col-sm-2 col-form-label">Artikel</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="artikel" id="artikel" cols="30" rows="10" placeholder="(opsional) Tambahkan artikel untuk galeri.">{{(isset($artikel)) ? $artikel : old('artikel')}}</textarea>
										</div>
									</div>

									<div class="card-body overflow-auto" style="max-height: 1000px">
										<div class="row">
											<div class="col-lg-6 mb-4">
												<label for="gambar-uploader-input">Gambar Galeri</label>
												<input type="file" name="gambar" title="Browse gambar" id="gambar-uploader-input" >
												<small>Hanya mendukung file gambar berupa : jpg, jpeg, png, dan webp.</small>
											</div>
											<div class="col-lg-6">
													<div class="form-group">
														<label for="example-date-input" >Video Eksternal</label>
														<div class="col-sm-10">
														<input class="form-control" type="text" placeholder="Url atau Id video" id="video">
														<a class="btn btn-md btn-primary" onclick="masukanKeVideo()">Tambah</a>
														</div>
														<small id="video-warning" class="text-danger" style="visibility: hidden"></small>
													</div>
													<div id="desc-list-video" style="visibility: hidden">
														<small>Klik <i class='fas fa-trash-alt'></i> untuk Menghapus</small>
														<ul id="url-list-video">
														</ul>
													</div>
													
											</div>
										</div>
									</div>

									<label for="card-sortir">Atur Urutan Penyajian Item</label><br>
									<small>Gunakan list dibawah ini untuk mengatur urutan penyajian item galeri untuk pengunjung ketika mereka mengklik thumbnail galeri.</small><br>
									<small>Tekan dan geser  <i class="fas fa-grip-lines"></i>  untuk mengganti urutan. Urutan paling atas disajikan pertama dan urutan paling bawah disajikan terakhir.</small>
									<div id="card-sortir" class="card-body overflow-auto bg-grey" style="max-height: 800px">
										<div id="urutan-sorter" class="urut-parent" style="visibility: hidden">
										</div>
										<div id="urutan-placeholder" class="jumbotron text-center">
											<strong>Tidak ada data yang dapat ditampilkan. Masukan gambar atau link video terlebih dahulu.</strong>
										</div>
									</div>
									
									@if (isset($editMode) && $editMode)
										<input type="hidden" name="basepath" value="{{$basepath}}">
									@endif
								</div>
								<!-- /.col -->
							</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<div class="row">
						
						<div class="col text-right">
							<a class="btn btn-primary" id="accept" onclick="if(confirm('Selesai dan submit galeri?')){ submitGaleri()}" aria-disabled="true">Submit</a>
						</div>
					</form>
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

@push('stack-head')
	<link rel="stylesheet" href="{{asset('filepond-4.28.2/dist/filepond.min.css')}}">
	<link rel="stylesheet" href="{{asset('filepond-plugin/filepond-plugin-image-preview-4.5.0/dist/filepond-plugin-image-preview.css')}}">
	<script src="{{asset('filepond-4.28.2/dist/filepond.min.js')}}"></script>
	<script src="{{asset('filepond-plugin/filepond-plugin-file-validate-type-1.2.8/dist/filepond-plugin-file-validate-type.min.js')}}"></script>
	<script src="{{asset('filepond-plugin/filepond-plugin-image-preview-4.5.0/dist/filepond-plugin-image-preview.min.js')}}"></script>
	<script src="{{asset('filepond-plugin/filepond-plugin-file-validate-size-2.2.0/dist/filepond-plugin-file-validate-size.min.js')}}"></script>
@endpush

@push('stack-body')
{{-- untuk sortir list --}}
	@vite('resources/js/sortable.js')
@endpush

@push('stack-body')
	<script>

		

		

		var listVideo = [];
		var listUrut = [];
		// var tempListUrut = [];

		var iconGambar = "<i class='far fa-image mx-1'></i>"
		var iconYoutube = "<i class='fab fa-youtube-square mx-1'></i>"

		var listElUrut = $("#urutan-sorter")
		var placeholderElUrut = $("#urutan-placeholder")

		


		// file uploader
		const inputElement = document.querySelector('#gambar-uploader-input');

		FilePond.registerPlugin(FilePondPluginFileValidateType)
		FilePond.registerPlugin(FilePondPluginFileValidateSize)
		FilePond.registerPlugin(FilePondPluginImagePreview)

		var fp = FilePond.create(inputElement,{
			labelIdle : 'Drag & Drop file gambar disini atau <span class="filepond--label-action"> Browse </span>',
			allowMultiple:true,
			allowFileTypeValidation: true,
			acceptedFileTypes : ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'],
			allowFileSizeValidation: true,
			maxFileSize: '5MB',
			labelMaxFileSizeExceeded: "Ukuran file melebihi 5 MB",
			labelMaxFileSize: "Max {filesize}",
			server:{
				url:"{{URL::to('/').'/upload/img'}}",
				timeout: 7000,
				process:{
					url:'/process',
					method: 'POST',
					headers:{
						'X-CSRF-TOKEN': '{{csrf_token()}}'
					},
					withCredentials: false,
					onerror: (response) => console.log(response.data)
				},
				revert:{
					url:'/revert',
					method: 'DELETE',
					headers:{
						'X-CSRF-TOKEN': '{{csrf_token()}}'
					},
					withCredentials: false,
					onerror: (response) => console.log(response.data)
				},
				load:{
					url:'/load',
					method: 'GET',
					headers:{
						'X-CSRF-TOKEN': '{{csrf_token()}}'
					},
					withCredentials: false,
					onerror: (response) => console.log(response.data)
				},
				restore:{
					url:'/restore',
					method: 'GET',
					headers:{
						'X-CSRF-TOKEN': '{{csrf_token()}}'
					},
					withCredentials: false,
					onerror: (response) => console.log(response.data)
				}
			},
			// onaddfilestart(file){
			// 	$('#accept').css("click-event","none");
			// },
			onaddfile(error,file){
				var id = file.id;
				var name = file.filename;
				console.log(error)
				$("#urutan-sorter").append(masukanKeUrut(iconGambar+name,id,'image',name,'image'))
				// $('#accept').attr("disabled",true);
			},
			onremovefile(error,file){
				triggerImageDelete(file.id)
			},
			onprocessfiles(){
				@php
					if(isset($editMode) && $editMode)
					{
						if(old('index') != null)
						{
							$before = "";
							foreach(old('index') as $key => $item)
							{
								if($key == 0)
									echo "aturUlang('".$item."');";
								else
									echo "aturUlang('".$item."','".$before."');";
								$before = $item;
							}
						}
						else
						{
							$before = "";
							foreach($data as $item)
							{
								$file = $item->file;
								if($item->tipe =="image")
									$file = basename($file);

								if($item->urut == 0)
									echo "aturUlang('".$file."');";
								else
									echo "aturUlang('".$file."','".$before."');";
								$before = $file;
							}
						}
						
					}
					else
					{
						if(old('index') != null)
						{
							$before = "";
							foreach(old('index') as $key => $item)
							{
								if($key == 0)
									echo "aturUlang('".$item."');";
								else
									echo "aturUlang('".$item."','".$before."');";
								$before = $item;
							}
						}
					}
					
					
				@endphp
			}
			
		});

		// @php 
			// 	if(old('index')!=null)
			// 	{
			// 			echo "files : [";
			// 				foreach(old('index') as $key => $item)
			// 				{
			// 					if(old('sumber')[$key] == "image")
			// 						echo "{source: '/".$item."', options : {type: 'limbo'}},";
								
			// 				}
			// 			echo "]";
			// 	}
				
			// @endphp

		// function

		function triggerVideoDelete(el)
		{
			keluarkanDariVideo(el)
			var id = $(el).attr('id');
			keluarkanDariUrut($('button[id='+id+']'))
		}

		function triggerUrutDelete(el)
		{
			var tipe = $(el).data('tipe')
			var id = $(el).attr('id')

			keluarkanDariUrut(el);
			if(tipe == 'video')
				keluarkanDariVideo($('div[id='+id+']'))
			else if(tipe == 'image')
				keluarkanDariGambar(id)


		}

		function triggerImageDelete(id)
		{
			keluarkanDariUrut($('button[id='+id+']'))
		}

		function keluarkanDariGambar(id)
		{
			fp.removeFile(id);
		}

		function masukanKeUrut(caption,id, tipe,name,sumber)
		{	
			listUrut.push({
				id: id,
				judul: caption
			});

			if(listElUrut.css('visibility') == 'hidden')
				listElUrut.css('visibility','visible')
			
			if(placeholderElUrut.css('visibility') == 'visible')
				placeholderElUrut.css('visibility','hidden')

			return '<div id="'+id+'" class="d-flex justify-content-between my-1 border border-light rounded urut-item" data-represent="'+name+'">'+
												'<div class="flex-shrink px-1"><i class="fas fa-grip-lines"></i></div>'+
												'<div class="flex-grow-1 px-2">'+caption+'</div>'+
												'<div class="flex-shrink px-1"><button type="button" id="'+id+'" data-tipe="'+tipe+'" data-name="'+name+'" data-sumber="'+sumber+'" data-pointer="true" onclick="triggerUrutDelete(this)" class="close"><span aria-hidden="true">&times;</span></button></div>'+
											'</div>'
		}

		function keluarkanDariUrut(el)
		{
			// tembak ke buttonnya, lalu pilih kakeknya
			var id = $(el).attr('id');
			var p1 = $(el).parent()
			var p2 = $(p1).parent()

			p2.remove()



			hapusDariArray(listUrut,id)

			if(listUrut.length < 1)
			{
				listElUrut.css('visibility','hidden')
				placeholderElUrut.css('visibility','visible')

			}
		}

		function masukanKeVideo(videoid = null)
		{

				$('#video-warning').css("visibility","hidden")

				if(videoid == null)
					videoid = $("#video").val();

				prosesLink(videoid)
				
		}

		function keluarkanDariVideo(el)
		{
			
			var id = $(el).attr('id')
			var p = $("li#"+id)


			$(el).remove();
			p.remove()

			hapusDariArray(listVideo,id);
			

			if(listVideo.length < 1)
				$("#desc-list-video").css("visibility","hidden")

		}

		

		function prosesLink(videoid)
		{
				/**
				 * 	Credit : Salman Arshad
				 *  Sumber : https://salman-w.blogspot.com/2010/01/retrieve-youtube-video-title.html
				 * */

				var videolink = videoid;
				var matches = videoid.match(/^https?:\/\/www\.youtube\.com\/.*[?&]v=([^&]+)/i) || videoid.match(/^https?:\/\/youtu\.be\/([^?]+)/i);
				if (matches) {
					videoid = matches[1];
				}
				else
				{
					$('#video-warning').html('Gagal menambahkan link! Pastikan link sesuai format URL atau ID video youtube.')
					$('#video-warning').css("visibility","visible")
					return;
				}
				if (videoid.match(/^[a-z0-9_-]{11}$/i) === null) {
					$('#video-warning').html('Gagal menambahkan link! Pastikan link sesuai format URL atau ID video youtube.')
					$('#video-warning').css("visibility","visible")
					return;
				}
				$.getJSON("https://www.googleapis.com/youtube/v3/videos", {
					key: "AIzaSyBRNTvLv0DEHKUmtXM8xmI_tZeAbWTgfLw",
					part: "snippet,statistics",
					id: videoid
				}, function(data) {
					if (data.items.length === 0) {
						$('#video-warning').html('Gagal mencapai link video! Pastikan link sudah benar dan video tidak di private.')
						$('#video-warning').css("visibility","visible")
						return;
					}
					// buat id untuk list
					var testid = $.now();

					// ambil judul
					var judul = data.items[0].snippet.title;


					// masukan ke list video
					var ul = $("#desc-list-video")
					if(ul.css("visibility") == "hidden")
						ul.css("visibility","visible");
					ul.append("<li id='"+testid+"' class='d-flex justify-content-between my-1 border border-light rounded'><div class='flex-grow-1 mx-1'><a href='"+videolink+"' target='_blank' >"+judul+"</a></div><div class='flex-shrink mx-1' style='cursor:pointer;' data-name='"+videolink+"' id='"+testid+"' onclick='triggerVideoDelete(this)'><i class='fas fa-trash-alt'></i></div></li>");
					$("#video").val('')

					// masukan ke array list video
					listVideo.push({
						id:testid,
						url:videolink
					});

					// masukan ke list urutan
					$("#urutan-sorter").append(masukanKeUrut(iconYoutube+judul,testid,'video',videoid,"youtube"))


				}).fail(function(jqXHR, textStatus, errorThrown) {
					$('#video-warning').html('Gagal mengambil informasi video! Terjadi kesalahan saat mengambil data video dari server tujuan.')
					$('#video-warning').css("visibility","visible")
					console.log("Kesalahan : ");
					console.log(jqXHR.responseText);
					console.log(errorThrown);
				});
		}

		function submitGaleri()
		{
			console.log("submitting")
			
			var arr = $("[data-pointer]")
			var galeri = []
			$.each(arr, function (index, value) { 
				var name = $(value).data('name')
				var tipe = $(value).data('tipe')
				var sumber = $(value).data('sumber')

					
				$('#form-galeri').append("<input type='hidden' name='index["+index+"]' value='"+name+"'>");
				$('#form-galeri').append("<input type='hidden' name='media["+index+"]' value='"+tipe+"'>");
				$('#form-galeri').append("<input type='hidden' name='sumber["+index+"]' value='"+sumber+"'>");

			});
			$('#form-galeri').submit()

		}

		function hapusDariArray(array, id)
		{
			var removeIndex = array.findIndex(item => item.id == id);


			if(removeIndex > -1)
				array.splice(removeIndex, 1);
		}

		function aturUlang(targetItemName, beforeItemName = null)
		{
			var parent = $("div.urut-parent");
			var target = $("div.urut-item[data-represent='"+targetItemName+"']");

			if(beforeItemName != null)
			{
				var previous = $("div.urut-item[data-represent='"+beforeItemName+"']");
				target.insertAfter(previous);
			}
			else
			{
				parent.append(target);
			}
		}

		// untuk edit atau kembali saat ada kesalahan saat submit
		@php 

			if(isset($editMode) && $editMode)
			{
				if(old('index') != null)
				{
					foreach(old('index') as $key => $item)
					{
						echo "console.log('index : '+'".$key."'+' Item : '+'".$item."');";
						if(old('sumber')[$key] == "image")
						{
							echo "fp.addFile('./tmp/".session('reference_folder')."/".$item."');";
						}
						else
						{
							if(old('sumber')[$key] == "youtube")
							echo "prosesLink('https://www.youtube.com/watch?v=".$item."');";
						}
						// echo "tempListUrut[".$key."] = '".$item."';";
					}
				}
				else
				{
					foreach($data as $item)
					{
						echo "console.log('index : '+'".$item->urut."'+' Item : '+'".basename($item->file)."');";
						if( $item->tipe == "image")
						{
							echo "fp.addFile('".asset($item->file)."');";
						}
						else
						{
							if($item->sumber == "youtube")
							echo "prosesLink('https://www.youtube.com/watch?v=".$item->file."');";
						}
						// echo "tempListUrut[".$key."] = '".$item."';";
					}
				}
				
			}
			elseif(old('index') != null)
			{
				foreach(old('index') as $key => $item)
				{
					echo "console.log('index : '+'".$key."'+' Item : '+'".$item."');";
					if(old('sumber')[$key] == "image")
					{
						echo "fp.addFile('./tmp/".session('reference_folder')."/".$item."');";
					}
					else
					{
						if(old('sumber')[$key] == "youtube")
						echo "prosesLink('https://www.youtube.com/watch?v=".$item."');";
					}
					// echo "tempListUrut[".$key."] = '".$item."';";
				}
			}
			
		
		@endphp

	// console.log($("div.urut-parent"));
	// console.log($("div.urut-item[data-represent='Capture.JPG']"));
		
				
	</script>
@endpush


