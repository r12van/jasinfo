@extends('layout.canvas-dashboard')

@section('kontainer')
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="single-post mb-0">

						<!-- Single Post
						============================================= -->
						<div class="entry">

							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								@if ($judul)
									<h2>{{$judul}}</h2>
								@else
									<h2>Judul Berita</h2>
								@endif
								
							</div><!-- .entry-title end -->

							<!-- Entry Meta
							============================================= -->
							<div class="entry-meta">
								<ul>
									@if ($tanggal)
										<li><i class="uil uil-schedule"></i>{{$tanggal}}</li>
									@else
										<li><i class="uil uil-schedule"></i>Tanggal Berita</li>
									@endif
									<li><a href="#"><i class="uil uil-user"></i>Admin</a></li>
								</ul>
							</div><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							<div class="entry-image mb-5">
								@if ($banner)
									<a href="#"><img src="{{$banner}}" alt="Blog Single"></a>
								@else
									<a href="#"><img src="images/sejarah/sejarah.png" alt="Blog Single"></a>
								@endif
							</div><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content mt-0">

								@if ($isi)
									{!! Illuminate\Mail\Markdown::parse($isi) !!}
								@else
									<p align="justify">Disini seharusnya isi berita anda berada, namun saat ini hanya ada placeholder. Resapi mantra lorem ipsum dibawah ini hingga anda mengerti.</p>

									<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet libero in libero vestibulum, ut ultricies odio elementum. Proin fringilla nulla non aliquam semper. Quisque at molestie dui. Sed varius eros ut ante sodales, vel pharetra nisl ultricies. Aenean ultrices blandit elit, eget sagittis nibh ultricies eget. Pellentesque convallis placerat commodo. Morbi imperdiet leo at libero sollicitudin, hendrerit viverra tortor pretium.</p>
									<p align="justify">Suspendisse at nisl sit amet justo dictum dictum. Nunc consequat auctor aliquet. Morbi nec vestibulum ligula. Pellentesque vitae orci id diam egestas tincidunt vel eget nunc. Fusce in orci non diam bibendum lacinia at id sapien. Donec euismod hendrerit sapien, a cursus neque. Etiam et ante ac sem porttitor semper. Morbi ante mi, scelerisque quis leo et, consequat pretium quam. Phasellus nec libero ullamcorper, sagittis libero eu, tempor diam. Curabitur leo ante, suscipit quis elementum a, tincidunt sed nunc. Etiam eget turpis eu diam convallis pretium nec eu diam.</p>
									<p align="justify">Fusce tortor diam, hendrerit vel sollicitudin vel, condimentum ut dui. Maecenas porttitor sem gravida, scelerisque quam sit amet, lacinia odio. Integer eget suscipit augue. Morbi sollicitudin augue vel ante suscipit molestie. Vivamus quis odio bibendum, euismod libero ut, feugiat leo. Fusce eget sagittis metus, sit amet facilisis lacus. Donec et lacus ac felis venenatis dictum.</p>
									<p align="justify">In egestas elementum tortor ut finibus. Fusce faucibus tortor eu porta sodales. Sed eu lacinia velit. Donec facilisis est quis ullamcorper varius. Aliquam imperdiet ligula at purus tempus, non aliquet risus bibendum. Proin pellentesque, nunc ut congue efficitur, lectus quam vulputate risus, sed maximus lorem lectus nec urna. Ut gravida vitae nibh viverra convallis. Duis sed malesuada dui, eget bibendum diam. Donec erat dui, luctus id ornare vel, lacinia vitae lacus. Nulla facilisi. Curabitur condimentum ex eros, a fringilla orci lacinia eu. Nullam sollicitudin, elit quis imperdiet interdum, turpis neque finibus enim, nec porttitor diam nisl lobortis est. Sed id rhoncus nulla. Integer luctus pretium arcu, nec fermentum nulla dictum vitae. Vivamus pretium auctor tellus sed accumsan.</p>
									<p align="justify">Curabitur lorem lectus, viverra et interdum et, feugiat nec tortor. Duis laoreet lobortis massa. Curabitur semper non massa id dictum. Nullam semper cursus venenatis. Ut facilisis justo eu turpis semper auctor. Vestibulum sagittis tincidunt maximus. Etiam gravida felis vitae ipsum interdum pharetra. Ut ut risus vitae nisi varius ullamcorper. Proin porttitor neque at fermentum consectetur. Morbi efficitur finibus varius. Quisque nec commodo mauris. Vivamus eget scelerisque dui. Duis eu est felis. Maecenas at vehicula quam. Fusce auctor velit sed felis vehicula, a faucibus diam ullamcorper.</p>
								@endif
                                
								<!-- Post Single - Content End -->

							</div>
						</div><!-- .entry end -->

					</div>

				</div>
			</div>
		</section>
@endsection