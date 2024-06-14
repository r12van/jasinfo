@extends('layouts.app')

@section('content')
<!-- Page Title
		============================================= -->
		<section class="page-title page-title-parallax parallax scroll-detect dark">
			<img src="images/about/parallax.jpg" class="parallax-bg">
			<div class="container">
				<div class="page-title-row">
					<div class="page-title-content">
						<h1>Lowongan Kerja</h1>
						<span>Pengumuman Lowongan Kerja Tenaga Ahli Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta</span>
					</div>
				</div>
			</div>
		</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row col-mb-50">
                        <div class="col-md-12 col-lg-9" style="margin-bottom: 150px">
                            <a href="#ui-ux" class="button text-dark h-text-light border border-width-2 border-dark rounded button-shadow button-shadow-dark">UI/UX</a>
                            {{-- <a href="#programmer" class="button text-dark h-text-light border border-width-2 border-dark rounded button-shadow button-shadow-dark">Web Programmer</a> --}}
                            {{-- <a href="#dataanalis" class="button text-dark h-text-light border border-width-2 border-dark rounded button-shadow button-shadow-dark">Data Analis</a> --}}
                            {{-- <a href="#reporter" class="button text-dark h-text-light border border-width-2 border-dark rounded button-shadow button-shadow-dark">Reporter</a> --}}
                        </div>
						<div class="col-md-12">
							<div class="fancy-title title-bottom-border">
								<h3 style="padding-top: 150px; margin-top: -150px;" id="ui-ux">Perpanjangan Pengadaan Tenaga Ahli UI/UX (2 Orang)</h3>
							</div>
                            <div class="accordion accordion-bg">
								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
                                        Pengumuman hasil akhir seleksi akhir Tenaga Ahli UI/UX Tahun 2024:
									</div>
								</div>
								<div class="accordion-content">
									<object data="/document/loker/PengumumanHasilSeleksiAkhirUI-UX.pdf" type="application/pdf" width="100%" height="500px">
                                        <p>File PDF tidak bisa dilihat, silahkan <a href="/document/loker/PengumumanHasilSeleksiAkhirUI-UX.pdf">Unduh</a> untuk melihat dokumen.</p>
                                    </object>
								</div>
								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Pengumuman hasil seleksi administrasi Tenaga Ahli UI/UX Tahun 2024:
									</div>
								</div>
								<div class="accordion-content">
									<object data="/document/loker/PengumumanHasilSeleksiAdministrasiUX-UX.pdf" type="application/pdf" width="100%" height="500px">
                                        <p>File PDF tidak bisa dilihat, silahkan <a href="/document/loker/PengumumanHasilSeleksiAdministrasiUX-UX.pdf">Unduh</a> untuk melihat dokumen.</p>
                                    </object>
								</div>
                            </div>

                            <p>Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta Perpanjangan Pengadaan Tenaga Ahli UI/UX ketentuan sebagai berikut:</p>

							<div class="accordion accordion-bg">
                                <div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Persyaratan Kualifikasi Administrasi
									</div>
								</div>
								<div class="accordion-content">
									<ul class="iconlist iconlist-color mb-0">
										<li>Warga Negara Indonesia (WNI);</li>
										<li>Berusia maksimal 35 tahun; </li>
										<li>Memiliki Nomor Pokok Wajib Pajak (NPWP);</li>
										<li>Pas foto ukuran 4 x 6 berwarna;</li>
										<li>Pendidikan minimal Strata 1 (S1) Jurusan Sistem Informasi, Teknik Informatika, Teknologi Informasi, Ilmu Komputer, Multimedia, Desain Komunikasi Visual, atau Sejenisnya;</li>
										<li>Menyampaikan Surat Lamaran yang ditujukan kepada Pejabat Pembuat Komitmen Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta (format terlampir) https://bit.ly/lamaranDPKP;</li>
										<li>Melampirkan Daftar Riwayat Hidup/Curriculum Vitae (CV); </li>
										<li>Melampirkan Ijazah, Transkip Nilai;</li>
										<li>Melampirkan pengalaman kerja / kontrak kerja / porto folio;</li>
										<li>Memiliki pengalaman minimal 3 Tahun sebagai Designer UI/UX pada bidang pekerjaan sejenis.</li>
									</ul>
								</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Persyaratan Kualifikasi Teknis Tenaga Ahli UI/UX
									</div>
								</div>
								<div class="accordion-content">
                                    <p>
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="bi-plus-circle-fill"></i>Memiliki Sertifikat yang relevan dibidang Desain UI/UX (nilai tambah).</li>
										<li><i class="bi-plus-circle-fill"></i>Menguasai Software Desain (Adobe Photoshop, Adobe Ilustrator, Sketch, atau sejenisnya).</li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki Pemahaman yang Kuat Tentang Wireframe Tools (Figma, Adobe XD, atau sejenisnya).</li>
										<li><i class="bi-plus-circle-fill"></i>Mengerti dan dapat mengimplementasikan Konsep Desain UI/UX.</li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki keterampilan komunikasi, presentasi, dan kerjasama tim yang baik. </li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki kemampuan analisa, keingintahuan, dan berpikir kritis yang tinggi.</li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki portofolio desain yang menunjukkan kreativitas, kemampuan visual, dan keterampilan Desain UI/UX.</li>
									</ul>
                                    </p>
								</div>
                                <div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Tata Cara Pendaftaran
									</div>
								</div>
								<div class="accordion-content">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="bi-plus-circle-fill"></i>Pelamar mengirimkan dokumen lamaran dalam bentuk softcopy/scan yang terdiri dari:</li>
                                        <ol>
										    <li>a.	Surat Lamaran (format terlampir);</li>
										    <li>b.	Daftar Riwayat Hidup/Curriculum Vitae (CV); </li>
										    <li>c.	KTP;</li>
										    <li>d.	NPWP;</li>
										    <li>e.	Pas Foto ukuran 4 x 6 berwarna;</li>
										    <li>f.	Ijazah Terakhir, Transkip Nilai;</li>
										    <li>g.	Sertifikat Pendukung di bidang Desain UI/UX;</li>
										    <li>h.	Pengalaman Kerja / Kontrak kerja / Porto folio;</li>
                                        </ol>
										<li><i class="bi-plus-circle-fill"></i>Berkas lamaran ditujukan kepada Pejabat Pembuat Komitmen Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta melalui link: <a href="https://s.id/DesignerUIUXDPKP" target="_blank" rel="noopener noreferrer">https://s.id/DesignerUIUXDPKP</a>;</li>
										<li><i class="bi-plus-circle-fill"></i>3.	Pendaftaran yang sebelumnya dibuka mulai tanggal 19 s.d 21 April 2024 Pukul 23.59 WIB menjadi 19 s.d 22 April 2024 Pukul 16.00 WIB</li>
										<li><i class="bi-plus-circle-fill"></i>Hasil setiap tahapan seleksi diumumkan pada website, <a href="https://pemadam.jakarta.go.id/" target="_blank" rel="noopener noreferrer">https://pemadam.jakarta.go.id/</a>;</li>
										<li><i class="bi-plus-circle-fill"></i>Pelamar yang lulus seleksi Administrasi pada saat seleksi kompetensi wajib membawa dokumen pendaftaran sebagai berikut:</li>
										<ol>
                                            <li>a.	Surat Lamaran (format terlampir) </li>
										    <li>b.	Daftar Riwayat Hidup/Curriculum Vitae (CV) </li>
										    <li>c.	Asli dan Fotocopy KTP</li>
										    <li>d.	Asli dan Fotocopy NPWP</li>
										    <li>e.	Pas foto ukuran 4 x 6 berwarna (1 lembar)</li>
										    <li>f.	Asli dan Fotocopy Ijazah Terakhir dan Transkip Nilai</li>
										    <li>g.	Asli dan Fotocopy Sertifikat Pendukung</li>
										    <li>h.	Asli dan Foto Copy Pengalaman Kerja / Kontrak Kerja</li>
                                        </ol>
										<li><i class="bi-plus-circle-fill"></i>Bersedia mendaftarkan diri ke sistem SiKAP LKPP / LPSE jika sudah dinyatakan LULUS.</li>
									</ul>
								</div>
                                <div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Dokumen Pengumuman
									</div>
								</div>
								<div class="accordion-content">
                                    <object data="/document/loker/BAPengumumanPerpanjanganRekrutmenTenagaAhliUIUX.pdf" type="application/pdf" width="100%" height="500px">
                                        <p>File PDF tidak bisa dilihat, silahkan <a href="/document/loker/BAPengumumanPerpanjanganRekrutmenTenagaAhliUIUX.pdf">Unduh</a> untuk melihat dokumen.</p>
                                    </object>
                                </div>
							</div>

							<a href="https://s.id/DesignerUIUXDPKP" target="_blank" class="button button-3d button-black m-0">Lamar Sekarang</a>
							<div class="divider divider-sm"><i class="bi-star-fill"></i></div>

							<div class="fancy-title title-bottom-border">
								<h3 style="padding-top: 150px; margin-top: -150px;" id="ui-ux">Tenaga Ahli UI/UX (2 Orang)</h3>
							</div>
                            <p>Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta membuka seleksi Tenaga Ahli UI/UX ketentuan sebagai berikut:</p>

							<div class="accordion accordion-bg">
                                <div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Persyaratan Kualifikasi Administrasi
									</div>
								</div>
								<div class="accordion-content">
									<ul class="iconlist iconlist-color mb-0">
										<li>Warga Negara Indonesia (WNI);</li>
										<li>Berusia maksimal 35 tahun; </li>
										<li>Memiliki Nomor Pokok Wajib Pajak (NPWP);</li>
										<li>Pas foto ukuran 4 x 6 berwarna;</li>
										<li>Pendidikan minimal Strata 1 (S1) Jurusan Sistem Informasi, Teknik Informatika, Teknologi Informasi, Ilmu Komputer, Multimedia, Desain Komunikasi Visual, atau Sejenisnya;</li>
										<li>Menyampaikan Surat Lamaran yang ditujukan kepada Pejabat Pembuat Komitmen Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta (format terlampir) https://bit.ly/lamaranDPKP;</li>
										<li>Melampirkan Daftar Riwayat Hidup/Curriculum Vitae (CV); </li>
										<li>Melampirkan Ijazah, Transkip Nilai;</li>
										<li>Melampirkan pengalaman kerja / kontrak kerja / porto folio;</li>
										<li>Memiliki pengalaman minimal 3 Tahun sebagai Designer UI/UX pada bidang pekerjaan sejenis.</li>
									</ul>
								</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Persyaratan Kualifikasi Teknis Tenaga Ahli UI/UX
									</div>
								</div>
								<div class="accordion-content">
                                    <p>
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="bi-plus-circle-fill"></i>Memiliki Sertifikat yang relevan dibidang Desain UI/UX (nilai tambah).</li>
										<li><i class="bi-plus-circle-fill"></i>Menguasai Software Desain (Adobe Photoshop, Adobe Ilustrator, Sketch, atau sejenisnya).</li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki Pemahaman yang Kuat Tentang Wireframe Tools (Figma, Adobe XD, atau sejenisnya).</li>
										<li><i class="bi-plus-circle-fill"></i>Mengerti dan dapat mengimplementasikan Konsep Desain UI/UX.</li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki keterampilan komunikasi, presentasi, dan kerjasama tim yang baik. </li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki kemampuan analisa, keingintahuan, dan berpikir kritis yang tinggi.</li>
										<li><i class="bi-plus-circle-fill"></i>Memiliki portofolio desain yang menunjukkan kreativitas, kemampuan visual, dan keterampilan Desain UI/UX.</li>
									</ul>
                                    </p>
								</div>
                                <div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Tata Cara Pendaftaran
									</div>
								</div>
								<div class="accordion-content">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="bi-plus-circle-fill"></i>Pelamar mengirimkan dokumen lamaran dalam bentuk softcopy/scan yang terdiri dari:</li>
                                        <ol>
										    <li>a.	Surat Lamaran (format terlampir);</li>
										    <li>b.	Daftar Riwayat Hidup/Curriculum Vitae (CV); </li>
										    <li>c.	KTP;</li>
										    <li>d.	NPWP;</li>
										    <li>e.	Pas Foto ukuran 4 x 6 berwarna;</li>
										    <li>f.	Ijazah Terakhir, Transkip Nilai;</li>
										    <li>g.	Sertifikat Pendukung di bidang Desain UI/UX;</li>
										    <li>h.	Pengalaman Kerja / Kontrak kerja / Porto folio;</li>
                                        </ol>
										<li><i class="bi-plus-circle-fill"></i>Berkas lamaran ditujukan kepada Pejabat Pembuat Komitmen Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta melalui link: <a href="https://s.id/DesignerUIUXDPKP" target="_blank" rel="noopener noreferrer">https://s.id/DesignerUIUXDPKP</a>;</li>
										<li><i class="bi-plus-circle-fill"></i>Pendaftaran dibuka mulai tanggal 19 s.d 21 April 2024 Pukul 23.59 WIB</li>
										<li><i class="bi-plus-circle-fill"></i>Hasil setiap tahapan seleksi diumumkan pada website, <a href="https://pemadam.jakarta.go.id/" target="_blank" rel="noopener noreferrer">https://pemadam.jakarta.go.id/</a>;</li>
										<li><i class="bi-plus-circle-fill"></i>Pelamar yang lulus seleksi Administrasi pada saat seleksi kompetensi wajib membawa dokumen pendaftaran sebagai berikut:</li>
										<ol>
                                            <li>a.	Surat Lamaran (format terlampir) </li>
										    <li>b.	Daftar Riwayat Hidup/Curriculum Vitae (CV) </li>
										    <li>c.	Asli dan Fotocopy KTP</li>
										    <li>d.	Asli dan Fotocopy NPWP</li>
										    <li>e.	Pas foto ukuran 4 x 6 berwarna (1 lembar)</li>
										    <li>f.	Asli dan Fotocopy Ijazah Terakhir dan Transkip Nilai</li>
										    <li>g.	Asli dan Fotocopy Sertifikat Pendukung</li>
										    <li>h.	Asli dan Foto Copy Pengalaman Kerja / Kontrak Kerja</li>
                                        </ol>
										<li><i class="bi-plus-circle-fill"></i>Bersedia mendaftarkan diri ke sistem SiKAP LKPP / LPSE jika sudah dinyatakan LULUS.</li>
									</ul>
								</div>
                                <div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Dokumen Pengumuman
									</div>
								</div>
								<div class="accordion-content">
                                    <object data="/document/loker/BAPengumumanRekrutmenTenagaAhliUIUX.pdf" type="application/pdf" width="100%" height="500px">
                                        <p>File PDF tidak bisa dilihat, silahkan <a href="/document/loker/BAPengumumanRekrutmenTenagaAhliUIUX.pdf">Unduh</a> untuk melihat dokumen.</p>
                                    </object>
                                </div>
							</div>

							<a href="https://s.id/DesignerUIUXDPKP" target="_blank" class="button button-3d button-black m-0">Lamar Sekarang</a>
							<div class="divider divider-sm"><i class="bi-star-fill"></i></div>
						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->
@endsection
