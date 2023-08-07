<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UtamaController;
use App\Models\Berita;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $berita = new UtamaController;
    $carousel = $berita->carousel();
    $beritaTerkini = $berita->beritaTerkini();
    $pers = $berita->pers();
    $kegiatan = $berita->kegiatan();
    $kebakaran = $berita->kebakaran();
    $penyelamatan = $berita->penyelamatan();
    $pencegahan = $berita->pencegahan();

    return view('dashboard.home')->with(['beritaTerkini' => $beritaTerkini, 'carousel' => $carousel, 'pers' => $pers, 'kegiatan' => $kegiatan, 'kebakaran' => $kebakaran, 'penyelamatan' => $penyelamatan, 'pencegahan' => $pencegahan]);
});
//route profil
Route::get('/sejarah', function () {
    return view('dashboard.profil.sejarah');
});
Route::get('/struktur', function () {
    return view('dashboard.profil.struktur_organisasi');
});
Route::get('/identitas_logo', function () {
    return view('dashboard.profil.identitas_logo');
});
Route::get('/tugas_pokok', function () {
    return view('dashboard.profil.tugas_pokok');
});
Route::get('/produk_hukum', function () {
    return view('dashboard.produk_hukum');
});
//route layanan
Route::get('/layanan_kebakaran', function () {
    return view('dashboard.layanan.kebakaran');
});
Route::get('/layanan_laboraturium', function () {
    return view('dashboard.layanan.laboraturium');
});
Route::get('/layanan_penyelamatan', function () {
    return view('dashboard.layanan.penyelamatan');
});

//route pencegahan kebakaran
Route::get('/sosialisasi', function () {
    return view('dashboard.layanan.pencegahan.sosialisasi_edukasi');
});
Route::get('/pembinaan', function () {
    return view('dashboard.layanan.pencegahan.pembinaan');
});
Route::get('/pemberdayaan', function () {
    return view('dashboard.layanan.pencegahan.pemberdayaan');
});

// route publikasi
Route::get('/berita', function () {

    $berita = new UtamaController;
    $pers = $berita->pers();
    $kegiatan = $berita->kegiatan();
    $kebakaran = $berita->publikasikebakaran();
    $penyelamatan = $berita->publikasiPenyelamatan();
    $pencegahan = $berita->pencegahan();

    return view('dashboard.publikasi.berita')->with(['pers' => $pers, 'kegiatan' => $kegiatan, 'kebakaran' => $kebakaran, 'penyelamatan' => $penyelamatan, 'pencegahan' => $pencegahan]);
});
Route::get('/kegiatan', function () {
    $berita = new UtamaController;
    $kegiatan = $berita->publikasiKegiatan();

    return view('dashboard.publikasi.kegiatan')->with(['kegiatan' => $kegiatan]);
});
Route::get('/pers', function () {
    $berita = new UtamaController;
    $pers = $berita->publikasiPers();

    return view('dashboard.publikasi.pers')->with(['pers' => $pers]);
});

Route::get('/pencegahan', function () {
    return view('dashboard.layanan.pencegahan.pencegahan');
});




// Route::get('/kerjasama', [LoginController::class, 'login'])->name('login');
// Route::post('/kerjasama', [LoginController::class, 'authenticate'])->name('loginProses');
// Route::get('/admin-dashboard', [LoginController::class, 'adminHome'])->name('adminHome');
// Route::get('/admin-berita', [AdminController::class, 'adminBerita'])->name('adminBerita');
Route::get('/editor-berita', [AdminController::class, 'adminBuatBerita'])->name('adminBuatBerita');

Route::resource('artikel', \App\Http\Controllers\Crud\BeritaController::class);
Route::resource('gallery', \App\Http\Controllers\Crud\GalleryController::class);//->except(['create','store']);
Route::get('/editor-galeri', [App\Http\Controllers\Crud\GalleryController::class, 'create'])->name('galeri.editor');
Route::post('/editor-galeri/store',[\App\Http\Controllers\Crud\GalleryController::class, 'store'])->name("galeri.store");

Route::post('/upload/ck-img', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "uploadCKEditor"])->name('cke5-img.up');
// untuk filepond
Route::post('/upload/img/process', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "filepondProcess"]);
Route::get('/upload/img/load', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "filepondLoad"]);
Route::get('/upload/img/restore/{file}', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "filepondRestore"]);
Route::delete('/upload/img/revert', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "filepondRevert"]);
// Route::get('/upload/img', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "uploadGaleri"]);
// Route::patch('/upload/img', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "uploadGaleri"]);

Route::get('/cari',[\App\Http\Controllers\SearchController::class, "search"])->name('pencarian');


//route untuk admin
Auth::routes();
Route::get('/tabel-berita', [App\Http\Controllers\HomeController::class, 'adminBerita'])->name('adminBerita');
Route::get('/tabel-galeri', [App\Http\Controllers\HomeController::class, 'adminGaleri'])->name('adminGaleri');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

//end route admin

Route::get('register', function () {
    return abort(404);
});

Route::post('register', function () {
    return abort(503);
});
