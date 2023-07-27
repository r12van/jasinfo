{{-- <div class="row">
    <a class="btn btn-md btn-info" href="{{route('artikel.index',['preview' => $id])}}" target="_blank">Preview</a>
</div> --}}
<div class="row">
    <a class="btn btn-md btn-primary" href="{{route('gallery.edit',['gallery' => $id])}}" target="_blank">Edit</a>
</div>
<div class="row">
    <form action="{{route('gallery.destroy',['gallery'=>$id])}}" method="post">
    @method('delete')
    @csrf
        <a class="btn btn-md btn-danger" onclick="if(confirm('Hapus galeri ini?')) this.parentNode.submit();" style="cursor: pointer;">Delete</a>
    </form>
</div>