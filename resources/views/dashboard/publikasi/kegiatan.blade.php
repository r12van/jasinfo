@extends('layout.canvas-dashboard')

@section('kontainer')

<section class="page-title bg-transparent">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1>Kegiatan</h1>
                
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

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img src="images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                <li><a href="#"><i class="uil uil-camera"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <iframe src="https://player.vimeo.com/video/87701971" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single-full.html">This is a Standard post with a Vimeo Video</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 16th Feb 2021</li>
                                <li><a href="blog-single-full.html#comments"><i class="uil uil-comments-alt"></i> 19</a></li>
                                <li><a href="#"><i class="uil uil-film"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem consectetur pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
                            <a href="blog-single-full.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/10.jpg" alt="Standard Post with Gallery"></a></div>
                                        <div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/20.jpg" alt="Standard Post with Gallery"></a></div>
                                        <div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/21.jpg" alt="Standard Post with Gallery"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 24th Feb 2021</li>
                                <li><a href="blog-single-small.html#comments"><i class="uil uil-comments-alt"></i> 21</a></li>
                                <li><a href="#"><i class="uil uil-images"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single-small.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/301161123&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single.html">This is an Embedded SoundCloud Post</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 28th Apr 2021</li>
                                <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 16</a></li>
                                <li><a href="#"><i class="uil uil-music"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/SZEflIVnhH8" allowfullscreen></iframe>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 30th Apr 2021</li>
                                <li><a href="blog-single-full.html#comments"><i class="uil uil-comments-alt"></i> 34</a></li>
                                <li><a href="#"><i class="uil uil-film"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single-full.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <div class="fslider" data-animation="fade" data-pagi="false" data-lightbox="gallery">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="images/blog/full/2.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/2.jpg" alt="Standard Post with Gallery"></a></div>
                                        <div class="slide"><a href="images/blog/full/3.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/3.jpg" alt="Standard Post with Gallery"></a></div>
                                        <div class="slide"><a href="images/blog/full/12.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/12.jpg" alt="Standard Post with Gallery"></a></div>
                                        <div class="slide"><a href="images/blog/full/13.jpg" data-lightbox="gallery-item"><img src="images/blog/grid/13.jpg" alt="Standard Post with Gallery"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single-thumbs.html">This is a Standard post with Fade Gallery</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 3rd Mar 2021</li>
                                <li><a href="blog-single-thumbs.html#comments"><i class="uil uil-comments-alt"></i> 21</a></li>
                                <li><a href="#"><i class="uil uil-images"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single-thumbs.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="images/blog/full/1.jpg" data-lightbox="image"><img src="images/blog/grid/1.jpg" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single.html">This is a Standard post with another Preview Image</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 5th May 2021</li>
                                <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 6</a></li>
                                <li><a href="#"><i class="uil uil-camera"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <iframe width="480" height="270" src="https://www.dailymotion.com/embed/video/x18murk" allowfullscreen></iframe>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single-full.html">This is a Standard post with a Dailymotion Video</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 11th May 2021</li>
                                <li><a href="blog-single-full.html#comments"><i class="uil uil-comments-alt"></i> 9</a></li>
                                <li><a href="#"><i class="uil uil-film"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            <a href="blog-single-full.html" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <ul class="pagination mt-5 pagination-circle justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#"><i class="uil uil-angle-left-b"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="uil uil-angle-right-b"></i></a></li>
            </ul>

        </div>
    </div>
</section>

@endsection