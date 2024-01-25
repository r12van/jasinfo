@extends('layouts.app')

@section('content')


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
                        <h2>Laporan Kinerja Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta</h2>
                        <h3>&nbsp;</h3>
                    </div><!-- .entry-title end -->
                    <div class="row entry-image mb-10">
                        <div class="fancy-title title-border">
                            <h3>Laporan Kegiatan Tahun 2021</h3>
                        </div>
                        <div id="lkip2021" style="height: 600px;"></div>
                        <p>If unable to display PDF file. <a href="{{ asset('document/lkip/LKIPDinasGulkarmatTahun2021opt.pdf') }}">Download</a> instead.</p>
                    </div>


                    <div class="row entry-image mb-10">
                        <div class="fancy-title title-border">
                            <h3>Laporan Kegiatan Tahun 2022</h3>
                        </div>
                        <div id="lkip2022" style="height: 600px;"></div>
                        <p>If unable to display PDF file. <a href="{{ asset('document/lkip/LKIPDinasGulkarmatTahun2022opt.pdf') }}">Download</a> instead.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script-stack')
    <script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
    <script type="text/javascript">
    document.addEventListener("adobe_dc_view_sdk.ready", function(){
        var adobeDCView = new AdobeDC.View({clientId: "8bd422f3a05d4b35a3b682755fc51998", divId: "lkip2021"});
        adobeDCView.previewFile({
        content:{ location:
            { url: "{{ asset('document/lkip/LKIPDinasGulkarmatTahun2021opt.pdf') }}"}},
        metaData:{fileName: "LKIP Tahun 2021.pdf"}
        },
        {
        embedMode: "SIZED_CONTAINER"
        });
    });
    document.addEventListener("adobe_dc_view_sdk.ready", function(){
        var adobeDCView = new AdobeDC.View({clientId: "8bd422f3a05d4b35a3b682755fc51998", divId: "lkip2022"});
        adobeDCView.previewFile({
        content:{ location:
            { url: "{{ asset('document/lkip/LKIPDinasGulkarmatTahun2022opt.pdf') }}"}},
        metaData:{fileName: "LKIP Tahun 2022.pdf"}
        },
        {
        embedMode: "SIZED_CONTAINER"
        });
    });
    </script>
@endpush
