<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\TunaiController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\DompetElektronikController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoriPemesananController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view("login");
});

Route::get('/register', function () {
    return view("register");
});

Route::resource('Pemesanan', PemesananController::Class);
Route::get('Pemesanan', [PemesananController::class, 'index'])->name('Pemesanan.index');
Route::get('Pemesanan/create', [PemesananController::class, 'create'])->name('Pemesanan.create');
Route::post('Pemesanan', [PemesananController::class, 'store'])->name('Pemesanan.store');
Route::get('Pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('Pemesanan.edit');
Route::put('Pemesanan/{id}', [PemesananController::class, 'update'])->name('Pemesanan.update');
Route::delete('Pemesanan/{id}', [PemesananController::class, 'destroy'])->name('Pemesanan.destroy');

Route::resource('Pembayaran', PembayaranController::Class);
Route::get('Pembayaran', [PembayaranController::class, 'index'])->name('Pembayaran.index');
Route::get('Pembayaran/create', [PembayaranController::class, 'create'])->name('Pembayaran.create');
Route::post('Pembayaran', [PembayaranController::class, 'store'])->name('Pembayaran.store');
Route::get('Pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('Pembayaran.edit');
Route::put('Pembayaran/{id}', [PembayaranController::class, 'update'])->name('Pembayaran.update');
Route::delete('Pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('Pembayaran.destroy');

Route::resource('MetodePembayaran', MetodePembayaranController::Class);
Route::get('MetodePembayaran', [MetodePembayaranController::class, 'index'])->name('MetodePembayaran.index');
Route::get('MetodePembayaran/create', [MetodePembayaranController::class, 'create'])->name('MetodePembayaran.create');
Route::post('MetodePembayaran', [MetodePembayaranController::class, 'store'])->name('MetodePembayaran.store');
Route::get('MetodePembayaran/{id}/edit', [MetodePembayaranController::class, 'edit'])->name('MetodePembayaran.edit');
Route::put('MetodePembayaran/{id}', [MetodePembayaranController::class, 'update'])->name('MetodePembayaran.update');
Route::delete('MetodePembayaran/{id}', [MetodePembayaranController::class, 'destroy'])->name('MetodePembayaran.destroy');

Route::resource('Tunai', TunaiController::Class);
Route::get('Tunai', [TunaiController::class, 'index'])->name('Tunai.index');
Route::get('Tunai/create', [TunaiController::class, 'create'])->name('Tunai.create');
Route::post('Tunai', [TunaiController::class, 'store'])->name('Tunai.store');
Route::get('Tunai/{id}/edit', [TunaiController::class, 'edit'])->name('Tunai.edit');
Route::put('Tunai/{id}', [TunaiController::class, 'update'])->name('Tunai.update');
Route::delete('Tunai/{id}', [TunaiController::class, 'destroy'])->name('Tunai.destroy');

Route::resource('Transfer', TransferController::Class);
Route::get('Transfer', [TransferController::class, 'index'])->name('Transfer.index');
Route::get('Transfer/create', [TransferController::class, 'create'])->name('Transfer.create');
Route::post('Transfer', [TransferController::class, 'store'])->name('Transfer.store');
Route::get('Transfer/{id}/edit', [TransferController::class, 'edit'])->name('Transfer.edit');
Route::put('Transfer/{id}', [TransferController::class, 'update'])->name('Transfer.update');
Route::delete('Transfer/{id}', [TransferController::class, 'destroy'])->name('Transfer.destroy');

Route::resource('DompetElektronik', DompetElektronikController::Class);
Route::get('DompetElektronik', [DompetElektronikController::class, 'index'])->name('DompetElektronik.index');
Route::get('DompetElektronik/create', [DompetElektronikController::class, 'create'])->name('DompetElektronik.create');
Route::post('DompetElektronik', [DompetElektronikController::class, 'store'])->name('DompetElektronik.store');
Route::get('DompetElektronik/{id}/edit', [DompetElektronikController::class, 'edit'])->name('DompetElektronik.edit');
Route::put('DompetElektronik/{id}', [DompetElektronikController::class, 'update'])->name('DompetElektronik.update');
Route::delete('DompetElektronik/{id}', [DompetElektronikController::class, 'destroy'])->name('DompetElektronik.destroy');

Route::resource('Barang', BarangController::Class);
Route::get('Barang', [BarangController::class, 'index'])->name('barang-index');
Route::get('Barang/create', [BarangController::class, 'create'])->name('Barang.create');
Route::post('Barang', [BarangController::class, 'store'])->name('Barang.store');
Route::get('Barang/{id}/edit', [BarangController::class, 'edit'])->name('Barang.edit');
Route::put('Barang/{id}', [BarangController::class, 'update'])->name('Barang.update');
Route::delete('Barang/{id}', [BarangController::class, 'destroy'])->name('Barang.destroy');

Route::resource('HistoriPemesanan', HistoriPemesananController::Class);
Route::get('HistoriPemesanan', [HistoriPemesananController::class, 'index'])->name('HistoriPemesanan.index');
Route::get('HistoriPemesanan/create', [HistoriPemesananController::class, 'create'])->name('HistoriPemesanan.create');
Route::post('HistoriPemesanan', [HistoriPemesananController::class, 'store'])->name('HistoriPemesanan.store');
Route::get('HistoriPemesanan/{id}/edit', [HistoriPemesananController::class, 'edit'])->name('HistoriPemesanan.edit');
Route::put('HistoriPemesanan/{id}', [HistoriPemesananController::class, 'update'])->name('HistoriPemesanan.update');
Route::delete('HistoriPemesanan/{id}', [HistoriPemesananController::class, 'destroy'])->name('HistoriPemesanan.destroy');

Route::resource('KategoriBarang', KategoriBarangController::Class);
Route::get('KategoriBarang', [KategoriBarangController::class, 'index'])->name('KategoriBarang.index');
Route::get('KategoriBarang/create', [KategoriBarangController::class, 'create'])->name('KategoriBarang.create');
Route::post('KategoriBarang', [KategoriBarangController::class, 'store'])->name('KategoriBarang.store');
Route::get('KategoriBarang/{id}/edit', [KategoriBarangController::class, 'edit'])->name('KategoriBarangi.edit');
Route::put('KategoriBarang/{id}', [KategoriBarangController::class, 'update'])->name('KategoriBarang.update');
Route::delete('KategoriBarang/{id}', [KategoriBarangController::class, 'destroy'])->name('KategoriBarang.destroy');

Route::resource('StokBarang', StokBarangController::Class);
Route::get('StokBarang', [StokBarangController::class, 'index'])->name('StokBarang.index');
Route::get('StokBarang/create', [StokBarangController::class, 'create'])->name('StokBarang.create');
Route::post('StokBarang', [StokBarangController::class, 'store'])->name('StokBarang.store');
Route::get('StokBarang/{id}/edit', [StokBarangController::class, 'edit'])->name('StokBarang.edit');
Route::put('StokBarang/{id}', [StokBarangController::class, 'update'])->name('StokBarang.update');
Route::delete('StokBarang/{id}', [StokBarangController::class, 'destroy'])->name('StokBarang.destroy');

Route::resource('Role', RoleController::Class);
Route::get('Role', [RoleController::class, 'index'])->name('Role.index');
Route::get('Role/create', [RoleController::class, 'create'])->name('Role.create');
Route::post('Role', [RoleController::class, 'store'])->name('Role.store');
Route::get('Role/{id}/edit', [RoleController::class, 'edit'])->name('Role.edit');
Route::put('Role/{id}', [RoleController::class, 'update'])->name('Role.update');
Route::delete('Role/{id}', [RoleController::class, 'destroy'])->name('Role.destroy');


// Route::get('detail-pesanan',function() {
//     return view('beranda.detailPesanan',['title'=>'Detail Pesanan']);
// });

Route::get('detail-barang',function() {
    return view('beranda.detailBarang',['title'=>'Detail Barang']);
})->name('detail-barang');

Route::get('cart',function() {
    return view('cart',['title'=>'Cart']);
})->name('cart');

Route::post('add-to-cart',[HomeController::class,'addToCart'])->name('addToCart');

Route::get('pembayaran',[HomeController::class,'pembayaran'])->name('pembayaran');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
