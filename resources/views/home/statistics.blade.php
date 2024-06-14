<div class="section border-top-0 mt-4 mb-4 border-0 bg-transparent">
    <div class="container">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h2>Statistik Kejadian Periode Tahun 2023</h2>
            <span class="text-small">*sampai Bulan Desember 2023</span>
        </div>
        <div class="row col-mb-50">
            <div class="col-sm-6 col-lg-4 text-center" data-animate="bounceIn">
                <i class="i-plain i-xlarge mx-auto mb-0 bi-fire"></i>
                <div class="counter counter-lined"><span data-from="0" data-to="{{ $statistics['countKebakaran'] }}" data-refresh-interval="50" data-speed="2000"></span>+</div>
                <h5>Kejadian Kebakaran</h5>
            </div>

            <div class="col-sm-6 col-lg-4 text-center" data-animate="bounceIn" data-delay="200">
                <i class="i-plain i-xlarge mx-auto mb-0 bi-flower1"></i>
                <div class="counter counter-lined"><span data-from="0" data-to="{{ $statistics['countPenyelamatan'] }}" data-refresh-interval="100" data-speed="2500"></span>+</div>
                <h5>Penyelamatan</h5>
            </div>

            <div class="col-sm-6 col-lg-4 text-center" data-animate="bounceIn" data-delay="400">
                <i class="i-plain i-xlarge mx-auto mb-0 bi-people"></i>
                <div class="counter counter-lined"><span data-from="0" data-to="{{ $statistics['countPencegahan'] }}" data-refresh-interval="25" data-speed="3500"></span>+</div>
                <h5>RW Tersosialisasi</h5>
            </div>

            {{-- <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
                <i class="i-plain i-xlarge mx-auto mb-0 bi-buildings"></i>
                <div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="100"></span>+</div>
                <h5>Kegiatan</h5>
            </div> --}}
        </div>

    </div>
</div>
