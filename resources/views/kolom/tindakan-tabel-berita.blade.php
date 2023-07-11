<div class="row">
    <a class="btn btn-md btn-info" href="/artikel?preview={{$id}}" target="_blank">Preview</a>
</div>
<div class="row">
    <a class="btn btn-md btn-primary" href="">Ubah Status</a>
</div>
<div class="row">
    <a class="btn btn-md btn-primary" href="">Edit</a>
</div>
<div class="row">
    <form action="/artikel/{{$id}}" method="post">
    @method('delete')
    @csrf
        <a class="btn btn-md btn-danger" onclick="if(confirm('Hapus berita ini?')) this.parentNode.submit();" style="cursor: pointer;">Delete</a>
    </form>
</div>