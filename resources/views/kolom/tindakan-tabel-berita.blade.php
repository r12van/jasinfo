<div class="row">
    <a class="btn btn-md btn-info" href="{{route('artikel.index',['preview' => $id])}}" target="_blank">Preview</a>
</div>
<div class="row">
    <a class="btn btn-md btn-primary" href="{{route('artikel.edit',['artikel' => $id])}}" target="_blank">Edit</a>
</div>
<div class="row">
    <form action="{{route('artikel.destroy',['artikel'=>$id])}}" method="post">
    @method('delete')
    @csrf
        <a class="btn btn-md btn-danger" onclick="if(confirm('Hapus berita ini?')) this.parentNode.submit();" style="cursor: pointer;">Delete</a>
    </form>
</div>