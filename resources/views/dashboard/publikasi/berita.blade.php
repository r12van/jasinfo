@extends('layout.dashboard')

@section('kontainer')

<section class="page-title bg-transparent mt-5">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1>Berita</h1>
                
            </div>
        </div>
    </div>
</section><!-- .page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h2>Kebakaran</h2>
        </div>
        <div class="container">
            
            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">
                @foreach ($kebakaran as $kebakarann)
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="portfolio-image">
                                <a href="{{ route('artikel.show',['artikel' => $kebakarann->slug]) }}">
                                    <img src="{{ $kebakarann->banner }}" alt="Open Imagination">
                                </a>
                                <!-- Overlay: Start -->
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ $kebakarann->banner }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title=""><i class="uil uil-plus"></i></a>
                                        <a href="{{ route('artikel.show',['artikel' => $kebakarann->slug]) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                                <!-- Overlay: End -->
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="{{ route('artikel.show',['artikel' => $kebakarann->slug]) }}">{{ $kebakarann->judul }}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i>{{ $kebakarann->tanggal }}</li>
                                
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{ $kebakarann->summary }}</p>
                            <a href="{{ route('artikel.show',['artikel' => $kebakarann->slug]) }}" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <ul class="pagination mt-5 pagination-circle justify-content-center">
                {{ $kebakaran->appends(['penyelamatan' =>$penyelamatan->currentPage()]) }}
            </ul>
        </div>
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h2>Penyelamatan</h2>
        </div>
        <div class="container">
            <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">
                @foreach ($penyelamatan as $penyelamatann)
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="portfolio-image">
                                <a href="{{ route('artikel.show',['artikel' => $penyelamatann->slug]) }}">
                                    <img src="{{ $penyelamatann->banner }}" alt="Open Imagination">
                                </a>
                                <!-- Overlay: Start -->
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ $penyelamatann->banner }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title=""><i class="uil uil-plus"></i></a>
                                        <a href="{{ route('artikel.show',['artikel' => $penyelamatann->slug]) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                                <!-- Overlay: End -->
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="{{ route('artikel.show',['artikel' => $penyelamatann->slug]) }}">{{ $penyelamatann->judul }}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i>{{ $penyelamatann->tanggal }}</li>
                                
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{ $penyelamatann->summary }}</p>
                            <a href="{{ route('artikel.show',['artikel' => $penyelamatann->slug]) }}" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <ul class="pagination mt-5 pagination-circle justify-content-center">
                {{ $penyelamatan->appends(['kebakaran' =>$kebakaran->currentPage()]) }}
            </ul>

        </div>
    </div>
</section>

@endsection