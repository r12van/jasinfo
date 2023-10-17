<div id="modal-preview-banner" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Preview Gambar Banner</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<img id="gambar-banner-modal-preview" alt="Banner">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary text-left" data-dismiss="modal">Simpan</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

@push('stack-body')
	<script>
		function modalPreviewBanner($gambar)
		{
			$("#gambar-banner-modal-preview").attr('src',$gambar);
		}
	</script>
@endpush