@extends('layout.canvas-dashboard')

@push('stack-head')
    <style>
        .nav-link.active{
            background-color: var(--cnvs-themecolor) !important;
        }

         a .badge {
            position: absolute !important;
            display: block !important;
            top: 20px;
            left: 20px;
            color: #222;
            background-color: #FFF;
            padding: 5px;
            border-radius: 3px;
        }

        #item-galeri-container {
                margin: 0 auto;
                display: flex;
                flex-flow: row wrap;
            }
            .item-galeri {
                flex: 0 1 30%;
                margin: 10px 1em;
            }

       @media (max-width: 500px) {
            #item-galeri-container {
                padding: 8px;
            }
            .item-galeri {
                flex: 0 1 80%;
            }
        }
    </style>

    <link rel="stylesheet" href="{{asset('css/paginate.js.css')}}">

	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{asset('js/paginate.min.js')}}"></script>
@endpush

@section('kontainer')

        <section class="page-title bg-transparent mt-6">
			<div class="container">
				<div class="page-title-row">

                    @if (isset($keyword))
                        <div class="page-title-content"  id="pencarian">
                            <h1>Hasil Pencarian</h1>
                            <span><i>"{{$keyword}}"</i></span>
                        </div>
                    @else
                        <div class="page-title-content"  id="pencarian">
                            <h1>Pencarian</h1>
                            <span class="text-muted">Gunakan textbox dibawah untuk melakukan pencarian.</span>
                        </div>
                    @endif
					


				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

                    {{-- search text box selain di topnav --}}
                    <form action="{{route('pencarian')}}" method="get" class="m-0 w-100">
                        <div class="input-group mb-6">
                            <div class="input-group-text"><i class="uil uil-search"></i></div>
                            <input type="text" name="q" class="form-control" value="{{ (isset($keyword)) ? $keyword : "" }}" placeholder="Cari...">
                        </div>
                    </form>

                    @isset($keyword)
                        {{-- navigasi hasil pencarian --}}
                        <div class="grid-filter-wrap">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-berita-tab" data-bs-toggle="pill" data-bs-target="#pills-berita" type="button" role="tab" aria-controls="pills-berita" aria-selected="true">Artikel</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-galeri-tab" data-bs-toggle="pill" data-bs-target="#pills-galeri" type="button" role="tab" aria-controls="pills-galeri" aria-selected="false">Galeri</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-pengumuman-tab" data-bs-toggle="pill" data-bs-target="#pills-pengumuman" type="button" role="tab" aria-controls="pills-pengumuman" aria-selected="false">Pengumuman</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            {{-- start bagian berita --}}
                            {{-- isi berita dirender dibawah, di bagian pagination berita --}}
                            <div class="tab-pane fade show active" id="pills-berita" role="tabpanel" aria-labelledby="pills-berita-tab" tabindex="0">
                                @if(is_string($berita))
                                    <div class="p-5 mb-4 bg-body-tertiary rounded-3 text-center">
                                        <div class="container-fluid py-5">
                                            <strong><i>{{$berita . $keyword}}</i></strong>
                                        </div>
                                    </div>
                                @elseif (count($berita))
                                    <h3>Artikel Terkait</h3>
                                    <div id="item-berita-container"></div>
                                    <div id="berita-pagination-container"></div>
                                
                                @else
                                    <div class="p-5 mb-4 bg-body-tertiary rounded-3 text-center">
                                        <div class="container-fluid py-5">
                                            <strong><i>Tidak ditemukan artikel yang sesuai dengan kata pencarian.</i></strong>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
                            {{-- end bagian berita --}}

                            {{-- start bagian galeri --}}
                            {{-- isi galeri dirender dibawah, di bagian pagination galeri --}}
                            <div class="tab-pane fade" id="pills-galeri" role="tabpanel" aria-labelledby="pills-galeri-tab" tabindex="0">
                                @if(is_string($galeri))
                                    <div class="p-5 mb-4 bg-body-tertiary rounded-3 text-center">
                                        <div class="container-fluid py-5">
                                            <strong><i>{{$galeri . $keyword}}</i></strong>
                                        </div>
                                    </div>
                                @elseif (count($galeri))
                                    <div class="d-flex" id="item-galeri-container"> 
                                    </div>
                                    <div id="galeri-pagination-container">
                                    </div>
                                @else
                                    <div class="p-5 mb-4 bg-body-tertiary rounded-3 text-center">
                                        <div class="container-fluid py-5">
                                            <strong><i>Tidak ditemukan galeri yang sesuai dengan kata pencarian.</i></strong>
                                        </div>
                                    </div>
                                @endif
                                    
                                    
                            </div>
                            {{-- end bagian galeri --}}

                            {{-- start bagian pengumuman --}}
                            <div class="tab-pane fade" id="pills-pengumuman" role="tabpanel" aria-labelledby="pills-pengumuman-tab" tabindex="0">
                                
                                    <div class="p-5 mb-4 bg-body-tertiary rounded-3 text-center">
                                        <div class="container-fluid py-5">
                                            <strong><i>Tidak ditemukan pengumuman yang sesuai dengan kata pencarian.</i></strong>
                                        </div>
                                    </div>

                            </div>
                            {{-- end bagian pengumuman --}}
                        </div>
                    @endisset

				</div>
			</div>
		</section>
@endsection

{{-- pagination berita --}}
@push('stack-body')
    <script>
        function beritaRendering(data){
            var html = "";

            $.each(data, function (index, value){
                html+= '<div class="entry col-12" style="left: 0%; top: 0px;">'+
                                '<div class="grid-inner row g-0">'+
                                    '<div class="col-md-4">'+
                                        '<div class="entry-image">'+
                                            '<img src='+value.banner+' alt="Gambar Artikel">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-8 ps-md-4">'+
                                        '<div class="entry-title title-sm">'+
                                            '<h2><a href='+value.link+'>'+value.judul+'</a></h2>'+
                                        '</div>'+
                                        '<div class="entry-meta">'+
                                            '<ul>'+
                                                '<li><i class="uil uil-schedule"></i>'+value.tanggal+'</li>'+
                                                '<li><a href="#"><i class="uil uil-user"></i>'+value.penulis+'</a></li>'+
                                                '<li><i class="uil uil-label-alt"></i>'+value.tipe+'</li>'+
                                                '<li><a href="blog-single.html#comments"><i class="uil uil-location-pin-alt"></i>'+value.wilayah+'</a></li>'+
                                            '</ul>'+
                                        '</div>'+
                                        '<div class="entry-content">'+
                                            '<p>'+value.summary+'</p>'+
                                            '<a href='+value.link+' class="more-link">Read More</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
            })

            return html;
        }

        @if(!is_string($berita) && count($berita))
            $("#berita-pagination-container").pagination({
                dataSource : [
                    @foreach($berita as $b)
                        {banner : '{{asset($b->banner)}}', link : '{{$b->slug}}', judul : '{{$b->judul}}', tanggal : '{{$b->tanggal}}', penulis : '{{$b->penulis}}', tipe : '{{\App\Models\TipeBerita::find($b->id_tipe)->nama_tipe}}', wilayah : '{{\App\Models\Wilayah::find($b->id_wilayah)->nama_wilayah}}', summary : '{{$b->summary}}' },

                    @endforeach
                ],
                callback: function(data,pagination){
                    var html = beritaRendering(data);
                    $("#item-berita-container").html(html)
                },
                pageSize : 6
            })
        @endif
    </script>
@endpush

{{-- pagination galeri --}}
@push('stack-body')
    <script>
        function galeriRendering(data){
            var html = "";

            $.each(data, function (index, value) { 
                html+= '<div class="item-galeri card col-lg-4 col-sm-6 mb-4">'+
                            '<div class="card-body">'+
                                '<div class="product-image">'+
                                    '<a href='+value.slug+'>';
                                    if(value.imgTipe == "image")
                                    {
                                       html+= '<img src="'+value.img+'" alt="Image 1">';
                                    }
                                    else
                                    {
                                        html+= '<img src="'+value.img+'" alt="Video Thumbnail 1">'
                                    }   
                html+=                  '<span class="badge">'+value.tipe+'</span>'+
                                    '</a>'+
                                '</div>'+
                                '<div class="product-desc">'+
                                    '<h3><a href='+value.slug+'></a>'+value.judul+'</h3>'+
                                    '<p>'+value.summary+'</p>'+
                                '</div>'+
                            '</div>'+
                            '<div class="card-footer">'+
                                value.tanggal+
                            '</div>'+
                        '</div>';
            });
            
            return html;
        }
        @if(!is_string($galeri) && count($galeri))
        $("#galeri-pagination-container").pagination({
            dataSource : [
                @foreach($galeri as $g)
                    @php
                        $item_pertama = json_decode($g->data)[0];
                        $img_tipe = $item_pertama->tipe;
                        $img_sumber = $item_pertama->sumber;
                        if($img_tipe == "image")
                            $img = asset($item_pertama->file);
                        elseif($img_tipe == "video")
                        {
                            if($img_sumber == "youtube")
                                $img = "http://img.youtube.com/vi/".$item_pertama->file."/0.jpg";
                        }
                    @endphp
                    {slug:'{{$g->slug}}', img: '{{$img}}', imgTipe : '{{$img_tipe}}', tanggal: '{{$g->tanggal}}', judul: '{{$g->judul}}', tipe:'{{\App\Models\TipeGaleri::find($g->id_tipe)->nama_tipe}}', wilayah : '{{\App\Models\Wilayah::find($g->id_wilayah)->nama_wilayah}}',summary:'{{$g->summary}}'},
                @endforeach
                ],
            callback: function(data,pagination){
                var html = galeriRendering(data);
                $("#item-galeri-container").html(html)
            },
            pageSize:6,
            pageClassName : "page-item",
            ulClassName : "pagination pagination-inside-transparent",

        });
        @endif
        
        
    </script>
@endpush

{{-- @push('stack-body')
    <script>
        var divList =   document.querySelectorAll("div.div-collapse");

           window.addEventListener("load", function(){
            divList.forEach(item => new bootstrap.Collapse(item))
            bootstrap.Collapse.getInstance('#div-berita').show()
           })
        
       
        function gantiFilter(el)
        {
            var links = document.querySelectorAll("li.li-pencarian");
           
            links.forEach(anchor => {
                anchor.classList.remove("activeFilter");
            })

            divList.forEach(node =>{
                if(node.id == el.dataset.kolapse)
                    bootstrap.Collapse.getInstance("#"+node.id).show();
                else
                    bootstrap.Collapse.getInstance("#"+node.id).hide();
            });

            
            el.parentElement.classList.add("activeFilter")

        }
    </script>
@endpush --}}
