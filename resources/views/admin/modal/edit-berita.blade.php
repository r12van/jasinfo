<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Edit berita</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="box-body">
						<div class="row">
						  <div class="col-12">
							  <div class="form-group row">
								<label for="example-text-input" class="col-sm-2 col-form-label">Judul</label>
								<div class="col-sm-10">
								  <input class="form-control" type="text" value="" id="judul">
								</div>
							  </div>
							  <div class="form-group row">
								<label for="example-search-input" class="col-sm-2 col-form-label">Sumary</label>
								<div class="col-sm-10">
								   <input class="form-control" type="text" value="" id="summary">
								</div>
							  </div>
							  <div class="form-group row">
								<div class="row">
									<div class="col-md-6">
									  <div class="form-group">
										<label>Wilayah</label>
										<select class="form-control">
										  <option>Jakarta Pusat</option>
										  <option>Jakarta Barat</option>
										  <option>Jakarta Utara</option>
										  <option>Jakarta Selatan</option>
										  <option>Jakarta Timur</option>
										  <option>Kepulauan Seribu</option>
										</select>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="form-group">
										<label>Tipe</label>
										<select class="form-control">
										  <option>Kebakaran</option>
										  <option>Penyelamatan</option>
										  <option>Sosialisasi</option>
										  <option>Pers</option>
										  <option>Kegiatan</option>
										</select>
									  </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										  <label>Highlight</label>
										  <select class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										  </select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="example-date-input" >Date</label>
											<div class="col-sm-10">
											<input class="form-control" type="date" value="2023-07-19" id="tanggal">
											</div>
										</div>
									</div>
								  </div>
							  </div>
							  
							  <div class="form-group">
								<label>Gambar Banner</label>
								<label class="file">
								  <input type="file" id="file">
								</label>
							  </div>

							  {{-- ck editor --}}
							  <div class="box">
								<div class="box-header">
								  <h4 class="box-title">Isi Berita<br>
									
								  </h4>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
								  <form>
										<textarea id="editor1" name="editor1" rows="10" cols="80">
																
										</textarea>
								  </form>
								</div>
							  </div>
						  </div>
						  <!-- /.col -->
						</div>
						<!-- /.row -->
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