<div class="mx-auto text-center" style="max-width: 900px;">
    <h2>Berita Terkini</h2>
</div>
<div class="row justify-content-center col-mb-50">
    @foreach ($latestnews as $berita)
    <div class="col-sm-6 col-lg-4">
        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
            <div class="fbox-icon">
                <a href="#"><i class="bi-card-text"></i></a>
            </div>
            <div class="fbox-content">
                <h3><a href="{{ route('artikel.show',['artikel'=>$berita->slug]) }}">{{ $berita->judul }}</a></h3>
                <p>{{ $berita->tanggal }} {{ $berita->summary }}</p>
                <a href="{{ route('artikel.show',['artikel'=>$berita->slug]) }}" class="sm-icon">read more</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
