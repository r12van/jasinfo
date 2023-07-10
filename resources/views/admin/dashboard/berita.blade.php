@extends('admin.layout.admin')

@section('kontainer')
<div class="content-wrapper">
    <div class="container-full">
    <section class="content">
    <div class="row">

      <div class="col-12">

       <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Berita</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <div class="table-responsive">
                <button type="button" class="waves-effect waves-light btn btn-rounded btn-primary mb-5" data-toggle="modal" data-target=".new-berita">Berita Baru</button>
                <table id="example5" class="table table-bordered table-striped" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Sumary</th>
                          <th>Isi</th>
                          <th>Wilayah</th>
                          <th>Tipe</th>
                          <th>Tanggal</th>
                          <th>Highlight</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                          <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                          <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                          <td>Jakarta Selatan</td>
                          <td>Kebakaran</td>
                          <td>2011/04/25</td>
                          <td>
                            <select name="highlight" id="highlight">
                                <option value="volvo">0</option>
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="opel">3</option>
                                <option value="audi">4</option>
                            </select>
                          </td>
                          <td>
                            <a class="image-popup-vertical-fit" href="image-berita/1.jpg" title="">
							<button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button>
						    </a>
                          </td>
                          <td>
                            <button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button>
                            <button type="button" class="waves-effect waves-light btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</button>
                          </td>
                      </tr>
                      {{-- <tr>
                        <td>2</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">0</option>
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">0</option>
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">0</option>
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>11</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr>
                      <tr>
                        <td>12</td>
                        <td>Kebakaran Rumah Di Kampung Pulo Pasar Minggu</td>
                        <td>Kebakaran telah terjadi di kampung pulo Pasar Minggu asdsda asdsad asdasd asdasd asdsad</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum sed dolorum? Veritatis vel recusandae sunt hic quaerat impedit laboriosam.</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">View</button></td>
                        <td>Jakarta Selatan</td>
                        <td>Kebakaran</td>
                        <td>2011/04/25</td>
                        <td>
                          <select name="highlight" id="highlight">
                              <option value="volvo">1</option>
                              <option value="saab">2</option>
                              <option value="opel">3</option>
                              <option value="audi">4</option>
                          </select>
                        </td>
                        <td><button type="button" class="waves-effect waves-light btn btn-info btn-xs">Simpan</button></td>
                      </tr> --}}
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Sumary</th>
                        <th>Isi</th>
                        <th>Wilayah</th>
                        <th>Tipe</th>
                        <th>Tanggal</th>
                        <th>Highlight</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                      </tr>
                  </tfoot>
              </table>
              </div>
          </div>
          <!-- /.box-body -->
       </div>

        <!-- /.box -->      
      </div> 

      <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    </div>
    @include('admin.modal.edit-berita')
    @include('admin.modal.new-berita')
</div>
@endsection