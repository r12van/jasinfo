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

					<div class="row col-mb-50">
                        <div class="col-md-12 col-lg-9" style="margin-bottom: 150px">
                            @foreach ($tags as $tag)
                                <a href="{{ $tag->slug }}" class="button h-text-light border border-width-2 border-dark rounded button-shadow button-shadow-dark">{{ $tag->tag_loker }}</a>
                            @endforeach
                        </div>
						<div class="col-md-12">

						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->
@endsection
