@extends('layouts.app')

@section('content')
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>LABORATORIUM KEBAKARAN DAN PENYELAMATAN</h1>
						<span>Jenis Layanan</span>
					</div>

				</div>
			</div>

            <div class="container">
                <div class="page-title-row">
                    <div class="page-title-content">
                        <h2>Tugas Pokok Laboratorium Kebakaran dan Penyelamatan</h2>
                    </div>
                </div>
                <div class="row col-mb-50">
                    <div class="col-md-5">
                        <a href="https://www.youtube.com/watch?v=kGKzgGrJzoE" class="d-block position-relative rounded overflow-hidden" data-lightbox="iframe">
                            <img src="{{ asset('images/layanan/laboratorium.jpg') }}" alt="Image" class="w-100">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark">
                                    <i class="i-circled i-light uil uil-play m-0"></i>
                                </div>
                                <div class="bg-overlay-bg op-06 dark"></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-7">
                        <div class="row col-mb-30">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <h3>Pelaksana Pengujian Mutu</h3>
                                <ul class="iconlist iconlist-color mb-0">
                                    <li><i class="fa-solid fa-caret-right"></i> Melaksanakan pengujian mutu peralatan proteksi kebakaran</li>
                                    <li><i class="fa-solid fa-caret-right"></i> Melaksanakan penyusunan prosedur pengujian mutu</li>
                                    <li><i class="fa-solid fa-caret-right"></i> Melaksanakan penelitian dan pengembangan peralatan proteksi kebakaran </li>
                                </ul>
                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <h3>Pelaksana Investigasi Kebakaran</h3>
                                <ul class="iconlist iconlist-color mb-0">
                                    <li><i class="fa-solid fa-caret-right"></i> Melaksanakan investigasi kebakaran lanjutan</li>
                                    <li><i class="fa-solid fa-caret-right"></i> Melaksanakan pengembangan cara investigasi kebakaran</li>
                                    <li><i class="fa-solid fa-caret-right"></i> Melaksanakan pembinaan, pengawasan, dan evaluasi investigasi kebakaran</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="layanan-mutu">
            <div class="conten-wrap">
                <div class="container">
                    <div class="row col-mb-75">
                        <h3>Layanan Pengujian Mutu</h3>
                    </div>
                    <div class="row col-mb-50">
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/01PengujianSelang1.jpg') }}" alt="Pengujian Selang Kebakaran">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/01PengujianSelang1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/01PengujianSelang2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{ asset('/images/layanan/labkar/01PengujianSelang3.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Selang Kebakaran</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/02PengujianTabungHydrostatis1.jpg') }}" alt="Pengujian Tabung Hydrostatis">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/02PengujianTabungHydrostatis1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/02PengujianTabungHydrostatis2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Tabung Hydrostatis</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/03PengujianPemadamApiPortable1.jpg') }}" alt="Pengujian Alat Pemadam Api Portable">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/03PengujianPemadamApiPortable1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/03PengujianPemadamApiPortable2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Alat Pemadam Api Portable</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/04PengujianFoamLiquid1.jpg') }}" alt="Pengujian Foam Liquid">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/04PengujianFoamLiquid1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/04PengujianFoamLiquid2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Foam Liquid</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row col-mb-50">
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/05PengujianPompaPortable1.jpg') }}" alt="Pengujian Pompa Portable">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/05PengujianPompaPortable1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/05PengujianPompaPortable2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Pompa Portable</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/06PengujianMobilKebakaran1.jpg') }}" alt="Pengujian Mobil Kebakaran">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/06PengujianMobilKebakaran1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/06PengujianMobilKebakaran2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Mobil Kebakaran</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/07PengujianKepalaPemercik1.jpg') }}" alt="Pengujian Kepala Pemercik (Sprinkler)">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/07PengujianKepalaPemercik1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/07PengujianKepalaPemercik2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{ asset('/images/layanan/labkar/07PengujianKepalaPemercik3.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Kepala Pemercik (Sprinkler)</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/08PengujianBahanBajuJaketSarungTanganPemadam1.jpg') }}" alt="Pengujian Bahan Baju/Jaket/Sarung Tangan Pemadam">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/08PengujianBahanBajuJaketSarungTanganPemadam1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/08PengujianBahanBajuJaketSarungTanganPemadam2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{ asset('/images/layanan/labkar/08PengujianBahanBajuJaketSarungTanganPemadam3.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Bahan Baju/Jaket/Sarung Tangan Pemadam</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row col-mb-50">
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/09PengujianBahanBahanSepatuKebakaran1.jpg') }}" alt="Pengujian Bahan Sepatu Kebakaran">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/09PengujianBahanBahanSepatuKebakaran1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/09PengujianBahanBahanSepatuKebakaran2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{ asset('/images/layanan/labkar/09PengujianBahanBahanSepatuKebakaran2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Bahan Sepatu Kebakaran</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/10PengujianHelmPemadam1.jpg') }}" alt="Pengujian Helm Pemadam">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/10PengujianHelmPemadam1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/10PengujianHelmPemadam2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Helm Pemadam</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/11PengujianKomponenHydrant1.jpg') }}" alt="Pengujian Komponen Hydrant">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/11PengujianKomponenHydrant1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/11PengujianKomponenHydrant2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{ asset('/images/layanan/labkar/11PengujianKomponenHydrant3.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Komponen Hydrant</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/12PengujianPintuTahanApi(SucofindoPUPR)1.jpg') }}" alt="Pengujian Pintu Tahan Api (Sucofindo/PUPR)">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/12PengujianPintuTahanApi(SucofindoPUPR)1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/12PengujianPintuTahanApi(SucofindoPUPR)2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{ asset('/images/layanan/labkar/12PengujianPintuTahanApi(SucofindoPUPR)3.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Pintu Tahan Api (Sucofindo/PUPR)</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row col-mb-50">
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/13PengujianPengendaliAsap1.jpg') }}" alt="Pengujian Pengendali Asap">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/13PengujianPengendaliAsap1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/13PengujianPengendaliAsap2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Pengendali Asap</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/14PengujianPeredamApi1.jpg') }}" alt="Pengujian Peredam Api">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/14PengujianPeredamApi1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/14PengujianPeredamApi2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Peredam Api</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/15PengujianPorosPenghentiApi1.jpg') }}" alt="Pengujian Poros Penghenti Api">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/15PengujianPorosPenghentiApi1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/15PengujianPorosPenghentiApi2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Poros Penghenti Api</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-3">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{ asset('/images/layanan/labkar/16PengujianPemancarAir1.jpg') }}" alt="Pengujian Pipa Pemancar">
                                </a>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/images/layanan/labkar/16PengujianPemancarAir1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{ asset('/images/layanan/labkar/16PengujianPemancarAir2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <a href="#" data-lightbox="gallery-item">Pengujian Pipa Pemancar</a>
                                <span><a href="#"></a>, <a href="#"></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="layanan-investigasi">
            <div class="conten-wrap">
                <div class="container">
                    <div class="page-title-row">
                        <div class="page-title-content">
                            <h2>Layanan Investigasi Kebakaran</h2>
                        </div>
                        <div class="row col-mb-50">
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/01-01FotoKegiatanWawancara-1.jpg') }}" alt="Kegiatan Wawancara">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-01FotoKegiatanWawancara-1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-01FotoKegiatanWawancara-2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Kegiatan Wawancara</a>
                                    <span>Investigasi Kebakaran Lanjutan</span>
                                </div>
                            </div>
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/01-02PengambilanDokumentasi.jpg') }}" alt="Kegiatan Dokumentasi">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-02PengambilanDokumentasi.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-02PengambilanDokumentasi.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Kegiatan Dokumentasi</a>
                                    <span>Investigasi Kebakaran Lanjutan</span>
                                </div>
                            </div>
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/01-03PengambilanSample.jpg') }}" alt="Pengambilan Sampel">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-03PengambilanSample.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-03PengambilanSample.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Pengambilan Sampel</a>
                                    <span>Investigasi Kebakaran Lanjutan</span>
                                </div>
                            </div>
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/01-04PembahasanHasilInvestigasi.jpg') }}" alt="Pembahasan Hasil Investigasi">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-04PembahasanHasilInvestigasi.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/01-04PembahasanHasilInvestigasi.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Pembahasan Hasil Investigasi</a>
                                    <span>Investigasi Kebakaran Lanjutan</span>
                                </div>
                            </div>
                        </div>
                        <div class="row col-mb-50">
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/02-01PelatihanSEM(ScanningElectronicMicroscope)-1.jpg') }}" alt="Pelatihan Penggunaan SEM">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/02-01PelatihanSEM(ScanningElectronicMicroscope)-1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/02-01PelatihanSEM(ScanningElectronicMicroscope)-2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Pengembangan Cara Investigasi</a>
                                    <span>Pelatihan Penggunaan SEM</span>
                                </div>
                            </div>
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/03-01Pembinaan.jpg') }}" alt="Pembinaan, Pengawasan, dan Evaluasi">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/03-01Pembinaan.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/03-01Pembinaan.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Pembinaan, Pengawasan, dan Evaluasi</a>
                                    <span>Pembinaan</span>
                                </div>
                            </div>
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/03-02Pengawasan1.jpg') }}" alt="Pembinaan, Pengawasan, dan Evaluasi">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/03-02Pengawasan1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/03-02Pengawasan2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Pembinaan, Pengawasan, dan Evaluasi</a>
                                    <span>Pengawasan</span>
                                </div>
                            </div>
                            <div class="portfolio-item col-md-3">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('/images/layanan/labkar/investigasi/03-03Evaluasi.jpg') }}" alt="Pembinaan, Pengawasan, dan Evaluasi">
                                    </a>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/03-03Evaluasi.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                            <a href="{{ asset('/images/layanan/labkar/investigasi/03-03Evaluasi2.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <a href="#" data-lightbox="gallery-item">Pembinaan, Pengawasan, dan Evaluasi</a>
                                    <span>Evaluasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- Content
============================================= -->

<!--section id="content">
    <div class="conten-wrap">
        <div class="container">
            <div class="row col-mb-50">

                    <div class="col-lg-4 text-center text-lg-start">
                        <img data-animate="fadeInLeftBig" src="images/services/iphone.png" alt="iPhone">
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Selang Kebakaran</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Tabung Hidrostatis</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Alat Pemadam Api Portable</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Foam Liquid</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Pompa Portable</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Mobil Kebakaran</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Kepala Pemercik (Sprinkler)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Bahan Baju/Jaket/Sarung Tangan Pemadam</h3>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Bahan Sepatu Kebakaran</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Helm Pemadam</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Komponen Hydrant</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Pintu Tahan Api (Sucofindo/PUPR)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Pengendali Asap</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Peredam Api</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Poros Penghenti Api</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-5">
                            <div class="feature-box fbox-plain fbox-sm fbox-dark">
                                <div class="fbox-content">
                                    <h3>Pengujian Pipa Pemancar</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </div>
    </div>
</section-->
@endsection
