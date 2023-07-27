<div id="modal-preview-galeri" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Preview Galeri</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<div id="loading-preview" style="visibility: hidden">

					</div>
					<div id="preview-div" style="visibility: hidden">
						
					</div>
					<div id="previwe-err" class="jumbotron" style="visibility: hidden">
						
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary text-left" data-dismiss="modal">Tutup</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

@push('stack-body')
    <script>
      function previewGaleri(el)
      {
        var id = $(el).data('id');

        var spinner = $("div#loading-preview");
        var preview = $("div#preview-div");
        var previewErr = $("div#preview-err");
        previewErr.css("visibility","hidden");
        preview.css("visibility","hidden");
        spinner.css("visibility","visible");

        $.ajax({
          type: "GET",
          url: "{{route('gallery.index',['preview','"+id+"'])}}",
          success: function (response) {
            spinner.css("visibility","hidden");
            preview.css("visibility","visible");
          },
          error: function (response){
            previewErr.HTML("<strong>Gagal menampilkan preview galeri :</strong> "+response);
            spinner.css("visibility","hidden");
            previewErr.css("visibility","visible");
          }
        });
      }
    </script>
@endpush