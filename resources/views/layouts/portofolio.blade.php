<div class="section mt-0 border-0 mb-0" >
    <div class="container">
        <div class="heading-block text-center mb-0">
            <h2>Foto Kegiatan</h2>
        </div>
    </div>
</div>

<!-- Portfolio Items
============================================= -->
<div id="portfolio" class="portfolio row g-0 portfolio-reveal grid-container">
    @foreach ($portofolio as $dataPorto)
    <article class="portfolio-item col-6 col-md-4 col-lg-3 pf-media pf-icons">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="portfolio-single.html">
                    <img src="{{ $dataPorto->banner }}" alt="Open Imagination">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                        <a href="{{ $dataPorto->banner }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                        <a href="{{ $dataPorto->banner }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="uil uil-ellipsis-h"></i></a>
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="{{-- route('artikel.show',['artikel' => $dataPorto->slug]) --}}">{{ $dataPorto->judul }}</a></h3>
                <span><a href="{{-- route('artikel.show',['artikel' => $dataPorto->slug]) --}}">{{ $dataPorto->tanggal }}</a></span>
            </div>
        </div>
    </article>
    @endforeach
</div>
