@extends('layout.dashboard')

@section('kontainer')

<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="single-post mb-0">

                <!-- Single Post
                ============================================= -->
                <div class="entry">

                    <!-- Entry Title
                    ============================================= -->
                    <!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <div class="single-post mw-md mx-auto">
                        <div class="entry-title">
                            <h2>Tugas Pokok Dan Fungsi</h2>
                        </div>

                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 1 Maret 2023</li>
                                <li><a href="#"><i class="uil uil-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div><!-- .entry-meta end -->
                    <!-- Entry Content
                    ============================================= -->
                    <div class="single-post mw-sm mx-auto">
                        <div class="entry">
                            <div class="entry-content mt-0">
                                {{-- <ol>
                                    <li class="fs-4"><p class="fs-4" align="justify">Dinas Penanggulangan Kebakaran dan Penyelamatan mempunyai tugas melaksanakan urusan pemerintahan bidang ketentraman dan ketertiban umum serta perlindungan masyarakat pada subbidang kebakaran.</p></li>
                                    <li class="fs-4"><p class="fs-4" align="justify">Dinas Penanggulangan Kebakaran dan Penyelamatan menyelenggarakan fungsi sebagai berikut:</p>
                                        <ul class="mw-xs">
                                            <li type="a" class="fs-4"><p class="fs-4" align="justify">penyusunan Rencana Strategis, Rencana Kerja dan Rencana Keria dan Anggaran Dinas Penanggulangan Kebakaran dan Penelamatan;</p></li>
                                        </ul>
                                    </li>
                                </ol> --}}
                                <ol>
                                    <li class="fs-4"><p class="fs-4" align="justify">Dinas Penanggulangan Kebakaran dan Penyelamatan mempunyai tugas melaksanakan urusan pemerintahan bidang ketentraman dan ketertiban umum serta perlindungan masyarakat pada subbidang kebakaran.</p></li>
                                    <li class="fs-4"><p class="fs-4" align="justify">Dinas Penanggulangan Kebakaran dan Penyelamatan menyelenggarakan fungsi sebagai berikut:</p></li>
                                </ol>
                                <ol start="1" style="list-style-type: lower-alpha;margin-left:2cmundefined;" class="mw-xs mx-auto">
                                    <ol style="list-style-type: lower-alpha;">
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan Rencana Strategis dan Dokumen Pelaksanaan Anggaran Dinas Penanggulangan Kebakaran dan Penelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">penyusunan Rencana Strategis, Rencana Kerja dan Rencana Keria dan Anggaran Dinas Penanggulangan Kebakaran dan Penelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">perumusan kebijakan, proses bisnis, standar dan prosedur Dinas Penanggulangan Kebakaran dan Penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan kebijakan, proses bisnis, standar dan prosedur Dinas Penanggulangan Kebakaran dan Penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">penyediaan dan pemutakhiran informasi daerah rawan kebakaran dan peta rawan kebakaran;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">penyusunan dan pemutakhiran Rencana Induk Sistem Proteksi Kebakaran dan Penyelamatan (RISPKP);</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelayanan teknis pencegahan kebakaran terhadap PD/UKPD, instansi Pemerintah / swasta dan masyarakat;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pengawasan dan pengendalian terhadap keselamatan kebakaran bangunan gedung, perumahan, kendaraan bermotor umum, kendaraan bermotor khusus, penggunaan dan penyimpanan bahan berbahaya dan beracun (B3);</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pemberdayaan masyarakat dalam upaya pencegahan dan pemadaman kebakaran serta penyelamatan</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan layanan pemadaman kebakaran;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan layanan penyelamatan / evakuasi pada kejadian bencana atau kondisi yang membahayakan jiwa;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">penelitian dan pengujian bahan kebakaran di laboratorium;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan investigasi kejadian kebakaran;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pembinaan dan pengembangan tenaga fungsional dan tenaga teknis pencegahan, pemadaman kebakaran dan penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pengelolaan prasarana dan sarana pencegahan, pemadaman kebakaran serta penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pemungutan, penatausahaan, penyetoran, pelaporan, dan pertanggungjawaban penerimaan retribusi di bidang upaya pencegahan, pemadaman kebakaran dan penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pemberian dukungan teknis kepada masyarakat dan perangkat daerah di bidang upaya pencegahan, pemadaman kebakaran dan penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">penegakan peraturan perundang-undangan di bidang pencegahan, dan pemadaman kebakaran sera penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">penyelenggaraan diklat pemadaman kebakaran dan penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan pengujian mutu bahan /peralatan / komponen pencegahan dan pemadaman kebakaran serta penelamatan dalam upaya pengendalian mutu dan/ atau pemenuhan persyaratan peraturan perundang-undangan yang berlaku;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan penelitian dan investigasi penyebab kebakaran;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan kerja sama dan koordinasi dengan PD/UKPD dan/ atau instansi pemerintah/swasta/ organisasi dalam pelaksanaan penyelenggaraan urusan pemerintahan bidang ketentraman dan ketertiban umum serta perlindungan masyarakat pada subbidang kebakaran;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pengelolaan data, informasi dan transformasi digital pelaksanaan penyelenggaraan urusan pemerintahan bidang ketentraman dan ketertiban umum serta perlindungan masyarakat pada subbidang kebakaran;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan pengelolaan kesekretariatan Dinas Penanggulangan Kebakaran dan Penyelamatan;</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan koordinasi, pemantauan, evaluasi, pelaporan, dan pertanggungjawaban pelaksanaan tugas fungsi Dinas Penanggulangan Kebakaran dan Penyelamatan; dan</span></li>
                                        <li style="text-align: justify;"class="fs-4"><span style='line-height:107%;' class="fs-4">pelaksanaan tugas kedinasan lain yang diperintahkan oleh Gubernur dan/ atau Sekretaris Daerah.</span></li>
                                    </ol>
                                </ol>
                                <!-- Post Single - Content End -->
                            </div>
                        </div>
                    </div>
                    
                </div><!-- .entry end -->

            </div>

        </div>
    </div>
</section>

@endsection