@if (isset($data) && !is_null($data))
<a data-id="{{$id}}" onclick="previewGaleri(this)">
    <div class="item-tabel-galeri" >
        <div class="d-block d-sm-none">
            <a style="cursor: pointer" class="btn btn-sm btn-primary" >Lihat</a>
        </div>
        <div class="d-none d-sm-block">
            
        </div>
    </div>
</a>
    
@else
    {{ - }}
@endif