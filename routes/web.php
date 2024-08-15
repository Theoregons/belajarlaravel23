<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('helo', function () {
    return 'ini laravel saya!';
});
Route::get('tampilan/{nilai}', function ($nilai) {
    return 'nilai saya adalah : '. $nilai;
});
Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil penjumlahan adalah : '. $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pengurangan adalah : '. $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil perkalian adalah : '. $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pembagian adalah : '. $nilai1 / $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'pensil', 'pintu', 'bolpoin', 'buku', 'lampu'];
    // return view('table', ['data' => $data, 'barang' => $data]);
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tambahsiswa', [SiswaController::class, 'store']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
