@extends('layouts.app')

@section('content')
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="row gx-5 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <main class="postcontent col-lg-9">

                    <div class="single-post mb-0">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry">

                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <h2>{{$berita->judul}} </h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="uil uil-schedule"></i>{{$berita->tanggal}}</li>
									<li><a href="#"><i class="uil uil-user"></i>{{$berita->penulis}}</a></li>
                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            @if ($berita->banner && $imageOrientation == 'landscape')
								<div class="entry-image">
									<a href="#"><img src="{{asset($berita->banner)}}" alt="{{ $berita->judul }}"></a>
								</div><!-- .entry-image end -->
							@endif

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content mt-0">

                                @if ($berita->isi)
									{!! Illuminate\Mail\Markdown::parse($berita->isi) !!}
								@endif
                                <!-- Post Single - Content End -->

                                <!-- Tag Cloud
                                ============================================= -->
                                <div class="tagcloud mb-5">
                                    <a href="#">general</a>
                                    <a href="#">information</a>
                                    <a href="#">media</a>
                                    <a href="#">press</a>
                                    <a href="#">gallery</a>
                                    <a href="#">illustration</a>
                                </div><!-- .tagcloud end -->

                                <!-- Post Single - Share
                                ============================================= -->
                                <div class="card border-default my-4">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                                            <div class="d-flex">
                                                <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>

                                                <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>

                                                <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>

                                                <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </a>

                                                <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                                                    <i class="fa-solid fa-rss"></i>
                                                    <i class="fa-solid fa-rss"></i>
                                                </a>

                                                <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <i class="fa-solid fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Post Single - Share End -->

                            </div>
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->
                        <div class="row text-center text-md-start justify-content-between my-5">
                            <div class="col-md-auto">
                                <a href="{{ route('artikel.show',['artikel'=>$prev->slug]) }}" class="d-inline-flex align-items-center text-dark h-text-color"><i class="uil uil-angle-left-b fs-3 me-1"></i><span> {{ substr($prev->judul, 0, 19) }}... </span></a>
                            </div>
                            <div class="col-md-auto">
                                <a href="{{ route('artikel.show',['artikel'=>$next->slug]) }}" class="d-inline-flex align-items-center text-dark h-text-color"><span> {{ substr($next->judul,0,19) }}... </span><i class="uil uil-angle-right-b fs-3 ms-1"></i></a>
                            </div>
                        </div><!-- .post-navigation end -->

                        <h4 class="fs-4 fw-medium">Recommended for you</h4>

                        <div class="related-posts row posts-md g-4">
                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row gx-4">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single" class="square square-lg" style="object-fit: cover; object-position: center;"></a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="entry-meta font-secondary fst-italic mt-0">
                                            <ul>
                                                <li><a href="#">Entertainment</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-title title-sm text-transform-none">
                                            <h3><a href="#">Best Ways to be more Creative</a></h3>
                                        </div>
                                        <div class="entry-meta font-secondary mt-2">
                                            <ul>
                                                <li>Posted 4 Days ago</li>
                                                <li><a href="#"><i class="uil uil-comments-alt"></i> 12</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row gx-4">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single" class="square square-lg" style="object-fit: cover; object-position: center;"></a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="entry-meta font-secondary fst-italic mt-0">
                                            <ul>
                                                <li><a href="#">Viral</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-title title-sm text-transform-none">
                                            <h3><a href="#">5 Interesting Viral Videos</a></h3>
                                        </div>
                                        <div class="entry-meta font-secondary mt-2">
                                            <ul>
                                                <li>Posted 2 weeks ago</li>
                                                <li><a href="#"><i class="uil uil-comments-alt"></i> 422</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </main><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <aside class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget">

                            <ul class="nav canvas-tabs tabs nav-tabs size-sm mb-3" id="canvas-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="canvas-tab-1" data-bs-toggle="pill" data-bs-target="#tab-1" type="button" role="tab" aria-controls="canvas-tab-1" aria-selected="true">Popular</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="canvas-tab-2" data-bs-toggle="pill" data-bs-target="#tab-2" type="button" role="tab" aria-controls="canvas-tab-2" aria-selected="false">Recents</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link uil uil-comments-alt" id="canvas-tab-3" data-bs-toggle="pill" data-bs-target="#tab-3" type="button" role="tab" aria-controls="canvas-tab-3" aria-selected="false"></button>
                                </li>
                            </ul>

                            <div id="canvas-TabContent" class="tab-content">

                                <div class="tab-pane show active" id="tab-1" role="tabpanel" aria-labelledby="canvas-tab-1" tabindex="0">
                                    <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><i class="uil uil-comments-alt"></i> 35 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><i class="uil uil-comments-alt"></i> 24 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><i class="uil uil-comments-alt"></i> 19 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2" role="tabpanel" aria-labelledby="canvas-tab-2" tabindex="0">
                                    <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>10th July 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>10th July 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>10th July 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3" role="tabpanel" aria-labelledby="canvas-tab-3" tabindex="0">
                                    <div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="widget">

                            <h4>Portfolio Carousel</h4>
                            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                                <div class="oc-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                                    <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc text-center pb-0">
                                            <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                                    <a href="images/blog/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="image"><i class="uil uil-plus"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc text-center pb-0">
                                            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="widget">

                            <h4>Tag Cloud</h4>
                            <div class="tagcloud">
                                <a href="#">general</a>
                                <a href="#">videos</a>
                                <a href="#">music</a>
                                <a href="#">media</a>
                                <a href="#">photography</a>
                                <a href="#">parallax</a>
                                <a href="#">ecommerce</a>
                                <a href="#">terms</a>
                                <a href="#">coupons</a>
                                <a href="#">modern</a>
                            </div>

                        </div>

                    </div>
                </aside><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection
