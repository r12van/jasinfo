<div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-sm btn-info" href="{{route('artikel.index',['preview' => $id])}}" target="_blank">Preview</a>
    <a class="btn btn-sm btn-primary" href="{{route('artikel.edit',['artikel' => $id])}}" target="_blank">Edit</a>
    <form action="{{route('artikel.destroy',['artikel'=>$id])}}" method="post">
    @method('delete')
    @csrf
        <a class="btn btn-sm btn-danger" onclick="if(confirm('Hapus berita ini?')) this.parentNode.submit();" style="cursor: pointer;">Delete</a>
    </form>
</div>
