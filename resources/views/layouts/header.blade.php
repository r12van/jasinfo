<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <!-- Logo ============================================= -->
                <div id="logo">
                    <a href="{{ route('index') }}" class="menu-link">
                        <div class="row">
                            <div class="col">
                                <img class="logo-default" srcset="{{asset('img/logo/jayaraya.png') . ' , ' . asset('img/logo/jayaraya.png 2x')}}" src="{{asset('img/logo/jayaraya.png')}}" alt="Logo Provinsi DKI" style="max-height: 75px; height: 70%; width: auto;">
                            </div>
                            <div class="col">
                                <img class="logo-default" srcset="{{asset('img/logo/logo-pemadam.png') . ' , ' . asset('img/logo/logo-pemadam.png 2x')}}" src="{{asset('img/logo/logo-pemadam.png')}}" alt="Logo Pemadam" style="max-height: 75px; height: 70%; width: auto;">
                            </div>
                        </div>
                    </a>
                </div><!-- #logo end -->
                <div class="header-misc">
                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
                    </div><!-- #top-search end -->
                </div>
                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>
                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('index') }}"><div style="text-shadow: 0 0 5px #FFFFFF;">Beranda</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('loker') }}"><div style="text-shadow: 0 0 5px #FFFFFF;">Lowongan</div></a>
                        </li>
                        {{-- <li class="menu-item">
                            <a class="menu-link"><div style="text-shadow: 0 0 5px #FFFFFF;">Event</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('../../fsc') }}"><div>Fire Safety Challenge</div></a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="menu-item">
                            <a class="menu-link" ><div style="text-shadow: 0 0 5px #FFFFFF;">Profil</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('sejarah') }}"><div>Sejarah Pemadam Kebakaran</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('tugas_pokok') }} "><div>Tugas Pokok dan Fungsi</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('struktur') }} "><div>Struktur Organisasi</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('identitas_logo') }} "><div>Identitas Logo</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" ><div style="text-shadow: 0 0 5px #FFFFFF;">Layanan</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('layanan_kebakaran') }} "><div>Operasi Kebakaran</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('layanan_penyelamatan') }} "><div>Operasi Penyelamatan</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('pencegahan') }} "><div></i>Pencegahan Kebakaran</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('sosialisasi') }} "><div>Sosialisasi dan Edukasi Pencegahan Kebakaran</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('pembinaan') }} "><div>Pembinaan Teknis</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('pemberdayaan') }} "><div>Pemberdayaan Masyarakat</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link"><div></i>Laboratorium Kebakaran</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a href="{{ route('laboratorium-kebakaran') }}" class="menu-link">Profil</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('layanan-laboratorium') }}" class="menu-link">Layanan Laboratorium</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link"><div></i>Standar Pelayanan</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a href="{{ route('konsultasi-teknis') }}" class="menu-link">Layanan Konsultasi Teknis</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('laporan-kinerja') }}" class="menu-link">
                                <div>Laporan Kinerja</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('produk_hukum') }} "><div style="text-shadow: 0 0 5px #FFFFFF;">Produk Hukum</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" ><div style="text-shadow: 0 0 5px #FFFFFF;">Publikasi</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('berita') }} "><div>Berita</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('pers') }} "><div>Siaran Pers</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('kegiatan') }} "><div>Kegiatan</div></a>
                                </li>
                                {{-- <li class="menu-item">
                                    <a class="menu-link" href="{{ env('APP.ENV') }}"><div>Pengumuman</div></a>
                                </li> --}}
                                <!--li class="menu-item">
                                    <a class="menu-link" href="{{ env('APP.ENV') }}"><div></i>Galeri</div></a>
                                    {{-- <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('sosialisasi') }}"><div>Foto</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('pembinaan') }}"><div>Video</div></a>
                                        </li>
                                    </ul> --}}
                                </li-->
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#kontak"><div style="text-shadow: 0 0 5px #FFFFFF; ">Kontak</div></a>
                        </li>
                    </ul>
                </nav><!-- #primary-menu end -->
                <form class="top-search-form" action="" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
