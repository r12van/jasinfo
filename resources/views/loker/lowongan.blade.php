@extends('layouts.app')

@section('content')
<!-- Page Title
		============================================= -->
		<section class="page-title page-title-parallax parallax scroll-detect dark">
			<img src="images/about/parallax.jpg" class="parallax-bg">
			<div class="container">
				<div class="page-title-row">
					<div class="page-title-content">
						<h1>Lowongan Kerja</h1>
						<span>Pengumuman Lowongan Kerja Tenaga Ahli Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta</span>
					</div>
				</div>
			</div>
		</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-2">
                                <ul class="nav canvas-tabs tabs nav-tabs flex-column mb-3" id="canvas-side-tab" role="tablist">
                                @foreach ($tags as $tag)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ ($tag->id==1?'active':'') }}" id="canvas-tab-{{ $tag->slug }}" data-bs-toggle="pill" data-bs-target="#{{ $tag->slug }}" type="button" role="tab" aria-controls="canvas-{{ $tag->slug }}" aria-selected="true">{{$tag->tag_loker}}</button>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div id="canvas-side-tab-content" class="tab-content">
                                    @foreach ($tags as $tag)
                                    <div class="tab-pane fade show {{ ($tag->id==1?'active':'') }}" id="{{ $tag->slug }}" role="tabpanel" aria-labelledby="canvas-tab-{{ $tag->slug }}" tabindex="0">
                                        <div class="row g-4 mb-5">
                                        @foreach ($lokers as $loker)
                                            @if ($loker->id_tag==$tag->id)
                                                <article class="entry event col-xs-12 col-md-6 col-lg-4 mb-0">
                                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                                        <div class="col-md-8 p-4">
                                                            <div class="entry-meta no-separator mb-1 mt-0">
                                                                <ul>
                                                                    <li><a href="#" class="text-uppercase fw-medium">{{ date_format(date_create($loker->tanggal),"d M Y") }}</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="entry-title nott">
                                                                <h3><a href="{{ url('loker/'.$loker->link) }}">{{$loker->judul}}</a></h3>
                                                            </div>
                                                            <div class="entry-content my-3">
                                                                <div class="mb-0">
                                                                    {!! $loker->isi !!}
                                                                </div>
                                                            </div>

                                                            <div class="entry-meta no-separator">
                                                                <ul>
                                                                    <li><a href="#" class="fw-normal"><i class="uil uil-user"></i> {{$loker->tag_loker}}</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            @endif
                                        @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section><!-- #content end -->
@endsection
