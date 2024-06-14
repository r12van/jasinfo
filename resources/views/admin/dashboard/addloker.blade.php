@extends('admin.layout.admin')

@section('kontainer')

<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <form id="tambah-loker" action="{{ route('simpanLoker') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text"
                                    placeholder="Judul lowongan" id="judul" name="judul"
                                    value="{{(isset($judul)) ? $judul : old('judul')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="date"id="tanggal" name="tanggal"
                                    value="{{(isset($tanggal)) ? $tanggal : old('tanggal')}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tag</label>
                            <select class="form-control" name="id_tag">
                                <option value="">Pilih Lowongan</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag['id'] }}" >{{$tag["tag_loker"]}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berkasDokumen" class="col-sm-2 col-form-label">Dokumen</label>
                            <div class="col-sm-12">
                                <input class="form-control datepicker" type="file"
                                    placeholder="dokumen lowongan" id="berkasDokumen" name="berkasDokumen"
                                    value="{{(isset($dokumen)) ? $dokumen : old('dokumen')}}" required type=".pdf">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="isi" class="col-sm-2 col-form-label">isi</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="isi" name=isi></textarea>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-info" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection

@push('stack-body')
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/qsbuvwsafnwnqsywu14ryv3qefqqsvp3fssjdqa6a5ex8wh4/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        editimage_upload_timeout: 60000,
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
    </script>
@endpush
