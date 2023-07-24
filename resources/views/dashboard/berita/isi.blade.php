@extends('layout.dashboard')

@section('kontainer')
	
<section id="content" class="page-title bg-transparent mt-3">
			<div class="content-wrap">
				<div class="container">

					<div class="single-post mb-0">

						<!-- Single Post
						============================================= -->
						<div class="entry">

							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								<h2>{{$judul}}</h2>
							</div><!-- .entry-title end -->

							<!-- Entry Meta
							============================================= -->
							<div class="entry-meta">
								<ul>
									<li><i class="uil uil-schedule"></i>{{$tanggal}}</li>
									<li><a href="#"><i class="uil uil-user"></i>{{$penulis}}</a></li>
								</ul>
							</div><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							@if ($banner)
								<div class="entry-image mb-5">
									<a href="#"><img src="{{asset($banner)}}" alt="Blog Single"></a>
								</div><!-- .entry-image end -->
							@endif
							

							<!-- Entry Content
							============================================= -->
							<div class="entry-content mt-0">

								@if ($isi)
									{!! Illuminate\Mail\Markdown::parse($isi) !!}
								@endif
								<!-- Post Single - Content End -->

							</div>
						</div><!-- .entry end -->

					</div>

				</div>
			</div>
</section>

@endsection