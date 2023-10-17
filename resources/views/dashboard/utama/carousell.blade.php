<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-autoplay="5000" data-speed="650" data-loop="true">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                @foreach ($carousel as $carouselData)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">{{ $carouselData->judul }}</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"> {{ $carouselData->summary }} </p>
                        </div>
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