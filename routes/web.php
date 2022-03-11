<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PengasuhController;
// use App\Http\Controllers\AnakAsuhController;
// use App\Http\Controllers\KegiatanController;
// use App\Http\Controllers\FormDonasiController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
route::get('/',[FrontendController::class,'data2']);

// ->middleware('auth')

Auth::routes([
    'register' => false, //menghilangkan fitur regis
    'reset' => false, //menghilangkan fitur forgot
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => [
//     'auth',
//     'role:Admin',
// ]], function (){
//     Route::get('/', function(){
//         return 'halaman admin';
//     });
    
//     Route::get('profile', function(){
//         return 'halaman profil admin';
//     });
// });

// Route::group(['prefix' => 'pengguna', 'middleware' => [
//     'auth',
//     'role:Pengguna',
// ]], function (){
//     Route::get('/', function(){
//         return 'halaman pengguna';
//     });
    
//     Route::get('profile', function(){
//         return 'halaman profil pengguna';
//     });
// });

//     Route::group(['prefix' => 'pembelian', 'middleware' => [
//         'auth',
//         'role:Admin|Kasir',
//     ]], function (){
//         Route::get('/', function(){
//             return 'halaman pembelian';
//         });
        
//         Route::get('laporan', function(){
//             return 'halaman laporan pembelian';
//         });
//     });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('buku', function(){
        return view ('buku.index');
    })->middleware(['role:admin|Pengguna']);

    Route::get('pengarang', function(){
        return view ('pengarang.index');
    })->middleware(['role:admin']);

    Route::resource('pengasuh', PengasuhController::class)->middleware(['role:Admin']);
    Route::resource('anak_asuh', AnakAsuhController::class)->middleware(['role:Admin']);
    Route::resource('kegiatan', KegiatanController::class)->middleware(['role:Admin']);
    Route::resource('form_donasi', FormDonasiController::class)->middleware(['role:Admin']);
    Route::post('form_donasi/tambah', [FormDonasiController::class,'tambah'])->middleware(['role:Admin']);

});


// FRONT END
route::get('pronen', function() {
    return view('pronen.index');
});
// route::get('/beranda', function() {
//     return view('pronen.index');
// })->name('beranda');

route::get('/sejarah', function() {
    return view('pronen.about');
})->name('sejarah');

route::get('/kegiatan',[FrontendController::class,'kegiatann'])->name('kegiatan');
route::get('/beranda',[FrontendController::class,'data'])->name('beranda');
Route::resource('donasis', FronDonasiController::class);
route::get('/donasi', function() {
    return view('pronen.donasi');
})->name('donasi');


route::get('/berita', function() {
    return view('pronen.berita');
})->name('berita');

route::get('/kontak', function() {
    return view('pronen.kontak');
})->name('kontak');

