<section id="slider" class="slider-element revslider-wrap slider-parallax min-vh-100 include-header">
    <div class="slider-inner">
        <div id="rev_slider_579_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="default-slider" style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
            <div id="rev_slider_579_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
                <ul class="">   <!-- SLIDE  -->
                    @foreach($carousel as $carousell)
                    <li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ $carousell->banner}}" data-delay="10000"  data-saveperformance="off"  data-title="Responsive &amp; Retina">
                    <!-- MAIN IMAGE -->
                        <img src="{{ $carousell->banner }}"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        
                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase mt-xl-5 h-1"
                            data-x="40"
                            data-y="150"
                            data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222; text-shadow: 0 0 5px #ffffff;font-size:30px;"></div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0 mt-xl-5"
                            data-x="37"
                            data-y="180"
                            data-transform_in="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
                            data-speed="600"
                            data-start="1700"
                            data-easing="easeOutCubic"
                            data-splitin="chars"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: rgb(252, 250, 250); line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">{{ $carousell->judul }} <a href="{{ route('artikel.show',['artikel' => $carousell->slug]) }}"><p class="h2">Klik disini</p></a></div>
                    </li>
                    @endforeach
                    
                    {{-- <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/main/s2-thumb.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Responsive &amp; Retina"> --}}
                    <!-- MAIN IMAGE -->
                        {{-- <img src="images/slider/rev/main/s2.jpg"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom"> --}}
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        {{-- <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                        data-x="40"
                        data-y="150"
                        data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="800"
                        data-start="1500"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: rgb(252, 250, 250);">Sebanyak 40 KK</div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                        data-x="37"
                        data-y="180"
                        data-transform_in="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1700"
                        data-easing="easeOutCubic"
                        data-splitin="chars"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">Harus Mengungsi</div> --}}
                    {{-- </li> --}}
                    
                    {{-- <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/main/s3-thumb.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Responsive &amp; Retina"> --}}
                    <!-- MAIN IMAGE -->
                        {{-- <img src="images/slider/rev/main/s3.jpg"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom"> --}}
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        {{-- <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                        data-x="80"
                        data-y="150"
                        data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="800"
                        data-start="1500"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222;">kebakaran dapat dipadamkan</div> --}}

                        {{-- <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                        data-x="80"
                        data-y="180"
                        data-transform_in="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1700"
                        data-easing="easeOutCubic"
                        data-splitin="chars"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">Dalam Waktu 30 menit</div> --}}
                    {{-- </li> --}}
                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</section>