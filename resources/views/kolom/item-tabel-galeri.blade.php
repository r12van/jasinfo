@if (($j_gambar > 0) || ($j_video > 0))
    <div class="item-tabel-galeri" >
        <span class="row @if($j_gambar_h > 0) text-danger @endif">
            <i class="fas fa-image"></i> <span class="ml-2">@if($j_gambar_h > 0) {{ $j_gambar - $j_gambar_h ." / ".$j_gambar }} @else {{ $j_gambar }} @endif</span>
        </span>
        <span class="row">
            <i class="fas fa-play-circle"></i> <span class="ml-2">{{ $j_video }}</span>
        </span>
        <span class="row align-item-center">
            <a data-id="{{$id}}" class="btn btn-primary btn-md" onclick="previewGaleri(this)">Lihat Item</a>
        </span>
    </div>
@else
    {{ "Tidak ada data." }}
@endif