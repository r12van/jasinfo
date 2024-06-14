@extends('layouts.app')

@section('content')
<!-- Page Title
		============================================= -->
		<section class="page-title page-title-parallax parallax scroll-detect dark">
			<img src="../images/about/parallax.jpg" class="parallax-bg">
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
                    <div class="row col-mb-50">
                        <div class="col-md-12">
                            @foreach ($lokers as $loker)
                                <div class="fancy-title title-bottom-border">
                                    <h3 style="padding-top: 150px; margin-top: -150px;">{{ $loker->judul }}</h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="uil uil-schedule"></i> {{ date_format(date_create($loker->tanggal),"d M Y") }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-0">
                                    {!! $loker->isi !!}
                                    <p>
                                        <object data="/{{$loker->dokumen}}" type="application/pdf" width="100%" height="800px">
                                            <p>File PDF tidak bisa dilihat, silahkan <a href="/{{$loker->dokumen}}">Unduh</a> untuk melihat dokumen.</p>
                                        </object>
                                    </p>
                                </div>
                            @endforeach





				</div>
			</div>
		</section><!-- #content end -->
@endsection
