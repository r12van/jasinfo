@extends('layout.dashboard')

@section('kontainer')

<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="single-post mb-0">

                <!-- Single Post
                ============================================= -->
                <div class="entry">

                    <!-- Entry Title
                    ============================================= -->
                    <div class="entry-title">
                        <h2>Pemberdayaan Masyarakat</h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <div class="entry-meta">
                        <ul>
                            <li><i class="uil uil-schedule"></i> 1 Maret 2023</li>
                            <li><a href="#"><i class="uil uil-user"></i>Admin</a></li>
                        </ul>
                    </div><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <section id="content">
                        <div class="content-wrap">
                            <div class="container">
            
                                <div class="heading-block text-center border-bottom-0">
                                    <h1>We are currently Under Construction</h1>
                                    <span>Please check back again within Some Days as We're Pretty Close</span>
                                </div>
            
                                <div id="countdown-ex1" class="countdown countdown-large mx-auto mb-5" data-year="2024" style="max-width:700px;"></div>
            
                                <div class="clear"></div>
            
                                <div class="progress mt-5 mx-auto" style="height: 10px; max-width:600px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    </div>
                                </div>
            
                                <div class="divider divider-center divider-sm divider-margin-lg"><i class="bi-clock"></i></div>
            
                                <div class="subscribe-widget">
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
                                        <div class="input-group input-group-lg mx-auto" style="max-width:600px;">
                                            <div class="input-group-text"><i class="bi-envelope-plus"></i></div>
                                            <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                            <button class="btn btn-secondary" type="submit">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                    </section>
                </div><!-- .entry end -->

            </div>

        </div>
    </div>
</section>

@endsection