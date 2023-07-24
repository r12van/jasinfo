@extends('layout.dashboard')

@section('kontainer')

<section class="page-title bg-transparent mt-5">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1>Produk Hukum</h1>
                
            </div>
        </div>
    </div>
</section><!-- .page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            
            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">
                {{-- @foreach ($pers as $perss) --}}
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="portfolio-image">
                                <a href="/">
                                    <img type="application/pdf" src="document/image/UU28T2002.PNG" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="document/produk-hukum/UU28T2002.pdf" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title=""><i class="uil uil-plus"></i></a>
                                        <a href="document/produk-hukum/UU28T2002.pdf" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                                <!-- Overlay: End -->
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="document/produk-hukum/UU28T2002.pdf">UU Nomor 28 Tahun 2002</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i>18 Maret 2023</li>
                                
                            </ul>
                        </div>
                        {{-- <div class="entry-content">
                            <p>Summary Test</p>
                            <a href="/" class="more-link">Read More</a>
                        </div> --}}
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="portfolio-image">
                                <a href="/">
                                    <img type="application/pdf" src="document/image/SK(IKU)DT2018-2022.PNG" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="document/produk-hukum/SK(IKU)DT2018-2022.pdf" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title=""><i class="uil uil-plus"></i></a>
                                        <a href="document/produk-hukum/SK(IKU)DT2018-2022.pdf" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                                <!-- Overlay: End -->
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="document/produk-hukum/SK(IKU)DT2018-2022.pdf">SK Indikator Kinerja Utama Tahun 2018-2022</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i>18 Maret 2023</li>
                                
                            </ul>
                        </div>
                        {{-- <div class="entry-content">
                            <p>Summary Test</p>
                            <a href="/" class="more-link">Read More</a>
                        </div> --}}
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
            
            <ul class="pagination mt-5 pagination-circle justify-content-center">
                {{-- {{ $pers->links() }} --}}
            </ul>
        </div>
    </div>
</section>

@endsection