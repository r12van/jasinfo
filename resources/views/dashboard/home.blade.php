@extends('layouts.app')

@section('content')
    @include('dashboard.utama.carousell')

<!-- Content
============================================= -->
    <section id="content">
    <div class="content-wrap">
        @include('dashboard.utama.berita-terkini')

        <div class="clear"></div>

        {{-- <div class="section parallax dark mb-0 border-bottom-0">
            <img src="images/parallax/7.jpg" class="parallax-bg">

            <div class="container">

                <div class="heading-block text-center">
                    <h2>Canvas: We know you want it!</h2>
                    <span>Built with passion &amp; intuitiveness in mind. Canvas is a masterclass piece of work presented to you.</span>
                </div>

                <div style="position: relative; margin-bottom: -60px;" data-height-xl="415" data-height-lg="342" data-height-md="262" data-height-sm="160" data-height-xs="102">
                    <img src="images/services/chrome.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" alt="Chrome">
                    <img src="images/services/ipad3.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="300" alt="iPad">
                </div>

            </div>
        </div> --}}

        @include('dashboard.utama.statistik-berita')



        @include('dashboard.utama.siaran-pers')

        @include('dashboard.utama.foto-kegiatan')


        <div class="section mt-0 border-0 mb-0" >
            <div class="container">

                <div class="heading-block text-center mb-0">
                    {{-- <h2>Foto Kegiatan</h2> --}}
                </div>

            </div>
        </div>

        {{-- <div class="section dark my-0 border-0" style="height: 500px; padding: 145px 0;">

            <div class="container">

                <div class="slider-caption slider-caption-center" style="position: relative;">
                    <div data-animate="fadeInUp">
                        <h2 style="font-size: 42px;">Beautiful HTML5 Videos</h2>
                        <p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                        <a href="#" class="button button-border button-rounded button-white button-light button-large ms-0 mb-0 d-none d-md-inline-block" style="margin-top: 20px;">Show More</a>
                    </div>
                </div>

            </div>

            <div class="video-wrap no-placeholder">
                <video poster="images/videos/messiermarathon.jpg" preload="none" loop autoplay muted playsinline>
                    <source src='images/videos/messiermarathon.mp4' type='video/mp4'>
                    <source src='images/videos/messiermarathon.webm' type='video/webm'>
                </video>
                <div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
            </div>

        </div> --}}

        @include('dashboard.utama.role-berita')

    </div>
    </section><!-- #content end -->
    <div id="gotoTop" class="uil uil-angle-up"></div>
@endsection
