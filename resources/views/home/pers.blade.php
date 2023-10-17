
<div class="section dark">
    <div class="container">
        <h3 class="text-center">Siaran Pers</h3>
        <div id="oc-images2" class="owl-carousel image-carousel carousel-widget posts-md" data-margin="20" data-pagi="false" data-rewind="true" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">
            @foreach ($pers as $dataPers)
            <div class="oc-item">
                <div class="entry">
                    <div class="entry-image">
                        <a href="{{ route('artikel.show',['artikel'=>$dataPers->slug]) }}"><img src="{{ $dataPers->banner }}" alt="Image"></a>
                    </div>
                    <div class="entry-title title-xs text-transform-none">
                        <h4><a href="{{ route('artikel.show',['artikel'=>$dataPers->slug]) }}">{{ $dataPers->judul }}</a></h4>
                    </div>
                    <div class="entry-meta">
                        <ul>
                            <li><i class="uil uil-schedule"></i>{{ $dataPers->tanggal }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
