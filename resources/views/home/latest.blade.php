<div class="row mb-6 align-items-stretch">

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: var(--cnvs-themecolor);">
        <div>
            {{-- untuk Berita Kebakaran Terkini --}}
            <h3 class="text-uppercase" style="font-weight: 600;">Kebakaran</h3>
            @foreach ($kebakaran as $kebakarann)
            <p style="line-height: 1.8;">{{ $kebakarann->tanggal }} {{ $kebakarann->summary }}</p>
            <a href="{{ route('artikel.show',['artikel'=>$kebakarann->slug]) }}" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
            @endforeach
            <i class="bi-fire bg-icon"></i>
        </div>
    </div>

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
        <div>
            {{-- untuk Berita Penyelamatan Terkini --}}
            <h3 class="text-uppercase" style="font-weight: 600;">Penyelamatan</h3>
            @foreach ($penyelamatan as $penyelamatann)
            <p style="line-height: 1.8;">{{ $penyelamatann->tanggal }} {{ $penyelamatann->summary }}</p>
            <a href="{{ route('artikel.show',['artikel'=>$penyelamatann->slug]) }}" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
            @endforeach
            <i class="bi-flower1 bg-icon"></i>
        </div>
    </div>

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
        <div>
            {{-- untuk Berita Pencegahan Terkini --}}
            <h3 class="text-uppercase" style="font-weight: 600;">Pencegahan</h3>
            @foreach ($pencegahan as $pencegahann)
            <p style="line-height: 1.8;">{{ $pencegahann->tanggal }} {{ $pencegahann->summary }}</p>
            <a href="{{ route('artikel.show',['artikel'=>$pencegahann->slug]) }}" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
            @endforeach
            <i class="bi-people bg-icon"></i>
        </div>
    </div>

    <div class="clear"></div>

</div>
