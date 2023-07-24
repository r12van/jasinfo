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
							{{-- <div class="entry-title">
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
							@endif --}}
							@if ($banner)
								<div class="entry-image mb-5">
									<a href="#"><img src="{{asset($banner)}}" alt="Blog Single"></a>
								</div><!-- .entry-image end -->
							@endif
							

							<!-- Entry Content
							============================================= -->
							<div class="entry-content mt-0">

								<div>
									<h1 style="color: green">{{$judul}}</h1>
									<h3>{{$summary}}</h3>
									<embed src="{{ asset('document/pengumuman.pdf') }}" type="application/pdf" width="100%" height="800">

										{{-- <object
										data='{{ asset('document/pengumuman.pdf') }}'
										type="application/pdf"
										width="500"
										height="678"
									  >

									  <iframe src="{{ asset('document/pengumuman.pdf') }}" ></iframe> --}}
										
								</div>
								
								<!-- Post Single - Content End -->

							</div>
						</div><!-- .entry end -->

					</div>

				</div>
			</div>
</section>

@endsection