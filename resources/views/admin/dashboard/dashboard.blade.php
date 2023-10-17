@extends('admin.layout.admin')

@section('kontainer')
    
<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
          <div class="row">
              <!-- <div class="col-xl-6 col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title">
                              Rata-rata Pengunjung
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="chart">
                              <div id="sales-overview"></div>
                          </div>
                      </div>
                  </div>
              </div> -->
              <div class="col-xl-6 col-12">
                  <div class="row">
                      <div class="col-lg-4 col-12">
                          <div class="box">						
                              <div class="box-body">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h4>Last Month</h4>
                                      <h4>12%</h4>
                                  </div>
                                  <h1 class="my-40">10,200</h1>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h5 class="mb-0">Kebakaran</h5>
                                      <h5 class="mb-0"><i class="ti-arrow-up text-light"></i></h5>
                                  </div>
                              </div>
                          </div>					
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="box bg-primary">						
                              <div class="box-body">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="text-white">Last Month</h4>
                                      <h4 class="text-white-50">12%</h4>
                                  </div>
                                  <h1 class="my-40 text-white">105K</h1>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h5 class="mb-0 text-white">Penyelamatan</h5>
                                      <h5 class="mb-0 text-white"><i class="ti-arrow-up text-light"></i></h5>
                                  </div>
                              </div>
                          </div>					
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="box">						
                              <div class="box-body">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h4>Last Month</h4>
                                      <h4>12%</h4>
                                  </div>
                                  <h1 class="my-40">645</h1>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h5 class="mb-0">Kegiatan</h5>
                                      <h5 class="mb-0"><i class="ti-arrow-up text-light"></i></h5>
                                  </div>
                              </div>
                          </div>					
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="box">						
                              <div class="box-body">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h4>Last Month</h4>
                                      <h4>12%</h4>
                                  </div>
                                  <h1 class="my-40">645</h1>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h5 class="mb-0">Sosialisasi</h5>
                                      <h5 class="mb-0"><i class="ti-arrow-up text-light"></i></h5>
                                  </div>
                              </div>
                          </div>					
                      </div>
                      <div class="col-12 col-lg-4">
                          <div class="box overflow-hidden">
                              <div class="box-body">
                                  <div class="d-flex">
                                      <h4 class="mb-0">1,125</h4>
                                      <span class="badge badge-info badge-pill align-self-center ml-auto">+55,6%</span>
                                  </div>
      
                                  <div>
                                      User online
                                      <div class="text-muted font-size-16">845 avg</div>
                                  </div>
                              </div>
      
                              <div class="container-fluid">
                                  <div id="chart_bar_basic"></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="box box-body bg-primary">
                            <h4>
                              <span class="text-white">Visitors</span>
                              <!-- <span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span> -->
                            </h4>
                            <br>
                            <p class="font-size-26 text-white pt-1">84,9658</p>
                            <!-- <div class="flexbox font-size-18 text-white">
                              <span><i class="ion-arrow-graph-down-right text-white mr-1"></i> %54 up</span>
                            </div> -->
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection