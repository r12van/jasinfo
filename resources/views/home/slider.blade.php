<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-sm-30 min-vh-lg-60 min-vh-md-100 include-header" data-autoplay="5000" data-speed="650" data-loop="true">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                @foreach ($carousel as $carouselData)
                <div class="swiper-slide dark">
                    <div class="container">
                        @if($carouselData->id_tipe!=8)
                        <div class="slider-caption slider-caption-center">
                            <h3 data-animate="fadeInUp" class="text-nowrap bd-highlight" style="background: #0006;">{{ $carouselData->judul }}</h3>
                            <p class="d-none d-sm-block bd-highlight" data-animate="fadeInUp" data-delay="200" style="background: #0006;"> {{ $carouselData->summary }}
                            <a href="{{ route('artikel.show',['artikel'=>$carouselData->slug]) }}" style="background: #0006;">Selanjutnya...</a>
                            </p>

                        </div>
                        @endif
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('{{ $carouselData->banner }}'); background-position: center top;"></div>
                </div>
                @endforeach
            </div>
            <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
            <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        </div>

    </div>
</section>
{{--
<section id="slider" class="slider-element boxed-slider">

    <div class="container">

        <div class="fslider" data-animation="fade">
            <div class="flexslider" styel="height:400px; !important">
                <div class="slider-wrap">
                    @foreach ($carousel as $carouselData)
                    <div class="slide" data-thumb="{{ $carouselData->banner }}">
                        <a href="#" class="d-block position-relative">
                            <img src="{{ $carouselData->banner }}" alt="{{ $carouselData->judul }}">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content justify-content-start align-items-end">
                                    <div class="h3 fw-light py-2 px-3 bg-light text-dark ms-3 mb-3 rounded">{{ $carouselData->judul }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</section> --}}
{{--
<section id="slider" class="slider-element boxed-slider">

			<div class="container">

				<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-animate-in="zoomIn" data-speed="450" data-animate-out="fadeOut">
                    @foreach ($carousel as $carouselData)

					<a href="#">
                        <img src="{{ $carouselData->banner }}" alt="{{ $carouselData->judul }}" style="max-height: 400px;">
                        @if($carouselData->id_tipe!=8)
                        <div class="bg-overlay">
                                <div class="bg-overlay-content justify-content-start align-items-end">
                                    <div class="h3 fw-light py-2 px-3 bg-light text-dark ms-3 mb-3 rounded">{{ $carouselData->judul }}</div>
                                </div>
                            </div>
                        @endif
                    </a>
                    @endforeach
				</div>

			</div>

		</section> --}}
