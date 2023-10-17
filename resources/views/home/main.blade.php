@extends('layouts.app')

@section('content')
    @include('home.slider')

		<!-- Content
		============================================= -->
		<section id="content">
            <div class="content-wrap">
                <div class="container">
                    @include('home.welcome')
                    <div class="line"></div>
                    @include('home.latest-news')
                    <div class="line"></div>
                </div>

                @include('home.statistics')
                @include('home.pers')
                @include('home.portofolio')
                <div class="section mt-0 border-0 mb-0" >
                    <div class="container">
                        <div class="heading-block text-center mb-0"></div>
                    </div>
                </div>
                @include('home.latest')
            </div>
		</section><!-- #content end -->
@endsection
