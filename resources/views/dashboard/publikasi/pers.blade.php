@extends('layouts.app')

@section('content')

<section class="page-title bg-transparent mt-5">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1>Siaran Pers</h1>

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
                @foreach ($pers as $perss)
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="portfolio-image">
                                <a href="{{ route('artikel.show',['artikel' => $perss->slug]) }}">
                                    <img src="{{ $perss->banner }}" alt="Open Imagination">
                                </a>
                                <!-- Overlay: Start -->
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ $perss->banner }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title=""><i class="uil uil-plus"></i></a>
                                        <a href="{{ route('artikel.show',['artikel' => $perss->slug]) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                                <!-- Overlay: End -->
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="{{ route('artikel.show',['artikel' => $perss->slug]) }}">{{ $perss->judul }}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i>{{ $perss->tanggal }}</li>

                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{ $perss->summary }}</p>
                            <a href="{{ route('artikel.show',['artikel' => $perss->slug]) }}" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <ul class="pagination mt-5 pagination-circle justify-content-center">
                {{ $pers->links() }}
            </ul>
        </div>
    </div>
</section>

@endsection
