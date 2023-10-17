<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{ route('index') }}" class="menu-link">
                        <div class="row">
                            <div class="col">
                                <img class="logo-default" srcset="{{asset('images/logo/logo-pemadam.png') . ' , ' . asset('images/logo/logo-pemadam.png 2x')}}" src="{{asset('images/logo/logo-pemadam.png')}}" alt="Logo Damkar">
                                <img class="logo-dark" srcset="{{asset('images/logo/logo-pemadam.png') . ' , ' . asset('images/logo/logo-pemadam.png 2x')}}" src="{{asset('images/logo/logo-pemadam.png')}}" alt="Logo Damkar">
                            </div>
                            <div class="col">
                                <img class="logo-default" srcset="{{asset('images/logo/jayaraya.png') . ' , ' . asset('images/logo/jayaraya.png 2x')}}" src="{{asset('images/logo/jayaraya.png')}}" alt="Logo">
                                <img class="logo-dark" srcset="{{asset('images/logo/jayaraya.png') . ' , ' . asset('images/logo/jayaraya.png 2x')}}" src="{{asset('images/logo/jayaraya.png')}}" alt="Logo">
                            </div>
                        </div>

                    </a>
                </div><!-- #logo end -->

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
                                    <a href="{{ route('layanan_laboraturium') }}" class="menu-link"><div>Laboratorium</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">Profil Laboratorium</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">Struktur Organisasi</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('jenis_laboratorium') }}" class="menu-link">Jenis Layanan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ env('APP.ENV') }}"><div></i>Galeri</div></a>
                                    {{-- <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('sosialisasi') }}"><div>Foto</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('pembinaan') }}"><div>Video</div></a>
                                        </li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('index') }}"><div style="text-shadow: 0 0 5px #FFFFFF; ">Kontak</div></a>
                        </li>
                    </ul>
                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
