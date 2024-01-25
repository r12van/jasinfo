<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\PostController;
use App\Models\Berita;
use App\Models\Post;

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

// Route::get('/', function () {
//     $berita = new UtamaController;
//     $carousel = $berita->carousel();
//     $beritaTerkini = $berita->beritaTerkini();
//     $pers = $berita->pers();
//     $kegiatan = $berita->kegiatan();
//     $kebakaran = $berita->kebakaran();
//     $penyelamatan = $berita->penyelamatan();
//     $pencegahan = $berita->pencegahan();

//     return view('dashboard.home')->with(['beritaTerkini' => $beritaTerkini, 'carousel' => $carousel, 'pers' => $pers, 'kegiatan' => $kegiatan, 'kebakaran' => $kebakaran, 'penyelamatan' => $penyelamatan, 'pencegahan' => $pencegahan]);
// })->name('depan');

Route::get('/', function () {
    // $menus = Menu::all();

    $post = new PostController;

    $carousel = $post->carousel();
    $latestnews = $post->latestnews();
    $kebakaran = $post->kebakaran();
    $penyelamatan = $post->penyelamatan();
    $pencegahan = $post->pencegahan();
    $pers = $post->pers();
    $statistics = $post->statistics();
    $portofolio = $post->portofolio();
    return view('home.main')->with(
        [
            'carousel' => $carousel,
            'kebakaran' => $kebakaran,
            'penyelamatan' => $penyelamatan,
            'pencegahan' => $pencegahan,
            'latestnews' => $latestnews,
            'statistics' => $statistics,
            'pers' => $pers,
            'portofolio' => $portofolio//,
            // 'menus' => $menus
        ]
    );
})->name('index');

//route profil
Route::get('/sejarah', function () {
    return view('dashboard.profil.sejarah');
})->name('sejarah');
Route::get('/struktur', function () {
    return view('dashboard.profil.organisasi');
})->name('struktur');
Route::get('/identitas_logo', function () {
    return view('dashboard.profil.identitas_logo');
})->name('identitas_logo');
Route::get('/tugas_pokok', function () {
    return view('dashboard.profil.tugas_pokok');
})->name('tugas_pokok');
Route::get('/produk_hukum', function () {
    return view('dashboard.produk_hukum');
})->name('produk_hukum');

Route::get('/loker', function () {
return view('loker.index');
})->name('loker');

Route::get('/laporan-kinerja', function () {
    return view('dashboard.laporan.lkip');
})->name('laporan-kinerja');
//route layanan
Route::get('/layanan_kebakaran', function () {
    return view('dashboard.layanan.kebakaran');
})->name('layanan_kebakaran');

Route::get('/laboratorium-kebakaran', function () {
    return view('dashboard.layanan.laboraturium');
})->name('laboratorium-kebakaran');

Route::get('/profil_laboraturium', function () {
    return redirect()->route('laboratorium-kebakaran');
})->name('profil_laboraturium');

Route::get('/layanan-laboratorium', function () {
    return view('dashboard.layanan.laboratorium.jenis');
})->name('layanan-laboratorium');
Route::get('/layanan_penyelamatan', function () {
    return view('dashboard.layanan.penyelamatan');
})->name('layanan_penyelamatan');
Route::get('/konsultasi-teknis', function () {
    return view('dashboard.layanan.konsultasi');
})->name('konsultasi-teknis');

Route::get('/kontak', function () {
    return "Kontak";
})->name('kontak');

//route pencegahan kebakaran
Route::get('/sosialisasi', function () {
    return view('dashboard.layanan.pencegahan.sosialisasi_edukasi');
})->name('sosialisasi');
Route::get('/pembinaan', function () {
    return view('dashboard.layanan.pencegahan.pembinaan');
})->name('pembinaan');
Route::get('/pemberdayaan', function () {
    return view('dashboard.layanan.pencegahan.pemberdayaan');
})->name('pemberdayaan');

// route publikasi
Route::get('/berita', function () {

    $berita = new UtamaController;
    $pers = $berita->pers();
    $kegiatan = $berita->kegiatan();
    $kebakaran = $berita->publikasikebakaran();
    $penyelamatan = $berita->publikasiPenyelamatan();
    $pencegahan = $berita->pencegahan();

    return view('dashboard.publikasi.berita')->with(['pers' => $pers, 'kegiatan' => $kegiatan, 'kebakaran' => $kebakaran, 'penyelamatan' => $penyelamatan, 'pencegahan' => $pencegahan]);
})->name('berita');

Route::get('/kegiatan', function () {
    $berita = new UtamaController;
    $kegiatan = $berita->publikasiKegiatan();

    return view('dashboard.publikasi.kegiatan')->with(['kegiatan' => $kegiatan]);
})->name('kegiatan');
Route::get('/pers', function () {
    $berita = new UtamaController;
    $pers = $berita->publikasiPers();

    return view('dashboard.publikasi.pers')->with(['pers' => $pers]);
})->name('pers');

Route::get('/pencegahan', function () {
    return view('dashboard.layanan.pencegahan.pencegahan');
})->name('pencegahan');




// Route::get('/kerjasama', [LoginController::class, 'login'])->name('login');
// Route::post('/kerjasama', [LoginController::class, 'authenticate'])->name('loginProses');
// Route::get('/admin-dashboard', [LoginController::class, 'adminHome'])->name('adminHome');
// Route::get('/admin-berita', [AdminController::class, 'adminBerita'])->name('adminBerita');
Route::get('/buat-berita', [AdminController::class, 'adminBuatBerita'])->name('adminBuatBerita');

Route::resource('artikel', \App\Http\Controllers\Crud\BeritaController::class);
Route::post('/upload/ck-img', [\App\Http\Controllers\Crud\SimpleImageUpload::class, "upload"])->name('cke5-img.up');


//route untuk admin
Auth::routes();
Route::get('/admin-berita', [App\Http\Controllers\HomeController::class, 'adminBerita'])->name('adminBerita');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post-article');
});
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post-article');

//end route admin

Route::get('register', function () {
    return abort(404);
});

Route::post('register', function () {
    return abort(503);
});
