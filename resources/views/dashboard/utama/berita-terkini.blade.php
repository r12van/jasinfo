<div class="container">

    <div class="mx-auto text-center" style="max-width: 900px;">
        <img class="mb-5" src="{{asset('images/logo/logo-pemadam.png')}}" alt="Image" style="height: 200px;">
        <h1>Selamat Datang di Website Resmi<br>Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta</h1>
    </div>

    <div class="line"></div>
    <div class="mx-auto text-center" style="max-width: 900px;">
        <h2>Berita Terkini</h2>
    </div>
    <div class="row justify-content-center col-mb-50">
        @foreach ($beritaTerkini as $berita)
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3><a href="{{ route('artikel.show',['artikel' => $berita->slug]) }}">{{ $berita->judul }}</a></h3>
                    <p>{{ $berita->tanggal }} {{ $berita->summary }}</p>
                    <a href="{{ route('artikel.show',['artikel' => $berita->slug]) }}" class="sm-icon">read more</a>
                </div>
            </div>
        </div>
        @endforeach

        {{-- <div>
            @foreach($beritaTerkini as $berita)
            <div>test</div>
            @endforeach
        </div> --}}

        {{-- <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="200">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Dua Ekor Musang Berhasil Dievakuasi dari</h3>
                    <p>Senin (12 Juni 2023) Dua ekor musang dilaporkan berada di salah satu rumah sakit yang berlokasi di Jl. Ganggang Raya, Kel. Sungai Bambu, Kec. Tanjung Priok, Jakarta Utara.</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="400">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Sosialiasasi Pencegahan Kebakaran dan Penyelamatan di Jakarta Timur</h3>
                    <p>Selasa (13 Juni 2022) Dinas Penanggulangan Kebakaran dan Penyelamatan (Gulkarmat) Provinsi DKI Jakarta melalui Seksi Pencegahan Suku Dinas Gulkarmat Kota Administrasi Jakarta Timur dan Sektor Duren Sawit melaksanakan sosialisasi pencegahan kebakaran dan penyelamatan di lingkungan Kel. Pondok Bambu, Kec. Duren Sawit, Jakarta Timur</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Evakuasi Ular Kobra di Kramat Jati</h3>
                    <p>Selasa (13 Juni 2022) Seekor ular dilaporkan berada di rumah warga yang beralamat di Jl. Penggilingan Baru I, 011/004, Kel. Dukuh, Kec. Kramat Jati, Jakarta Timur.</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Evakuasi Biawak di Tanjung Priok</h3>
                    <p>Selasa (13 Juni 2022) Seekor Biawak dilaporkan oleh warga kepada petugas penyelamat Sektor Tanjung Priok, Jakarta Utara untuk dievakuasi. Hewan tersebut masuk ke toko kelontong dan membuat takut penghuni di dalamnya</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Kebakaran di Jalan Bima 2, Cijantung, Jakarta Timur</h3>
                    <p>Selasa (13 Juni 2022) Kebiasaan membakar sampah dapat menimbulkan dampak yang berbahaya. Asap dari pembakaran sampah dapat berdampak pada udara dan lingkungan. Selain itu, berpotensi menimbulkan kebakaran yang dapat merugikan harta dan jiwa.</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1200">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Kebakaran di Jalan Cibadak Raya, Koja, Jakarta Utara </h3>
                    <p>Kamis (15 Juni 2022) Terjadi kebakaran pada bangunan rumah tinggal yang berlokasi di Jl. Cibadak Raya, 003/004, Kel. Rawa Badak Utara, Kec. Koja, Jakarta Utara. Warga sekitar segera menghubungi petugas #DamkarDKI Sektor Koja untuk memadamkan api.</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1400">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Evakuasi Ular di Jalan Sentra Primer Timur, Cakung, Jakarta Timur</h3>
                    <p>Jumat (16 Juni 2022) Seekor ular berukuran cukup besar ditemukan oleh petugas keamanan di lingkungan kantor yang beralamat di Jl. Sentra Primer Timur, Kel. Pulo Gebang, Kec. Cakung, Jakarta Timur pada pagi ini.</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1600">
                <div class="fbox-icon">
                    <a href="#"><i class="bi-card-text"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Evakuasi Biawak di Kepulauan Seribu Selatan</h3>
                    <p>Jumat (16 Juni 2023) Petugas penyelamat Sektor Kepulauan Seribu Selatan mendapat laporan untuk mengevakuasi seekor biawak yang ditemukan di Jl. Utama Pulau Pari, 004/004, Kel. Pulau Pari, Kec. Kepulauan Seribu Selatan, Kepulauan Seribu.</p>
                    <a href="#" class="sm-icon">read more</a>
                </div>
            </div>
        </div> --}}
    </div>

</div>


