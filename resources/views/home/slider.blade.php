<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-autoplay="5000" data-speed="650" data-loop="true">
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
