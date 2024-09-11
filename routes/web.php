<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
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

// ========================================================= // 
// ====================== view route ======================= //

// ================= main view route ======================= //
// route untuk menampilkan landing page
Route::get('/', function () {
    return view('index');
});

// route untuk menampilkan about page
Route::get('/about', function () {
    return view('about');
});

// route untuk menampilkan contact page
Route::get('/contact', function () {
    return view('contact');
});
// ========================================================= //


// =================== single shop route =================== //
// route untuk menampilkan shop-single page
Route::get('/shop-single', function () {
    return view('shop-single');
})->middleware('auth');

// ========================================================= //


// =================== testimoni route ===================== //

// route untuk menampilkan testimoni sepatu
Route::get('/review-sepatu', function () {
    return view('reviewsepatu');
})->middleware('auth');

// route untuk menampilkan testimoni tas
Route::get('/review-tas', function () {
    return view('reviewtas');
})->middleware('auth');

// route untuk menampilkan testimoni tenda
Route::get('/review-tenda', function () {
    return view('reviewtenda');
})->middleware('auth');
// ========================================================= //


// ================== about segmen route =================== //
// route untuk menampilkan about bagian delivery
Route::get('/about-delivery', function () {
    return view('delivery');
});

// route untuk menampilkan about bagian shipping
Route::get('/about-shipping', function () {
    return view('shipping');
});

// route untuk menampilkan about bagian delivery
Route::get('/about-promotion', function () {
    return view('promotion');
});

// route untuk menampilkan about bagian service
Route::get('/about-service', function () {
    return view('service');
});

// ========================================================= //


// ========================================================= // 
// =================== controller route ==================== //

// ini untuk register
Route::get('/register/form', [PelangganController::class,'registerPage'])->name('formRegist')->middleware('guest');
Route::post('/register/create', [PelangganController::class,'createPelanggan'])->name('CreateRegist');

// ini untuk login logout
Route::get('/login/form', [LoginController::class,'loginPage'])->name('formLogin')->middleware('guest');
Route::post('/login', [LoginController::class,'login'])->name('loginCreate');
Route::post('/logout', [LoginController::class,'logout']);

// kembali ke dashboard
Route::get('/dashboard', [DashboardController::class,'dashboardPage']);

// route untuk profile akses
Route::get('/profile', [DashboardController::class,'profilePage'])->middleware('auth');

// route untuk akses all shop/shop sepatu/shop tas/shop tenda
Route::get('/shop', [ProdukController::class,'allShop']);
Route::get('/shop-sepatu', [ProdukController::class,'sepatuShop']);
Route::get('/shop-tas', [ProdukController::class,'tasShop']);
Route::get('/shop-tenda', [ProdukController::class,'tendaShop']);

// route untuk akses shop single page untuk tiap produk
Route::get('/shop-single/{id}', [ProdukController::class,'shopsingle'])->middleware('auth');

// route untuk akses booking dari pelanggan
Route::get('/booking', [BookingController::class, 'bookingPage'])->name('bookingPage')->middleware('auth');
Route::post('/booking-store', [BookingController::class, 'createBooking'])->name('booking-store')->middleware('auth');

// route untuk mengirim bukti peminjaman
Route::get('/bukti-penyerahan/{id}', [BookingController::class, 'penyerahanPage'])->name('bukti-penyerahan')->middleware('auth');
Route::post('/booking-update-penyerahan/{id}', [BookingController::class, 'updateBookingPenyerahan'])->name('booking-update-penyerahan')->middleware('auth');

// route untuk mengirim bukti pengembalian
Route::get('/bukti-pengembalian/{id}', [BookingController::class, 'pengembalianPage'])->name('bukti-pengembalian')->middleware('auth');
Route::post('/booking-update-pengembalian/{id}', [BookingController::class, 'updateBookingPengembalian'])->name('booking-update-pengembalian')->middleware('auth');

// route untuk menghapus booking
Route::delete('/booking/{id}', [BookingController::class, 'deleteBooking'])->name('booking-delete')->middleware('auth');

// route untuk masuk ke page pembayaran
Route::get('/booking/{id}/pembayaran', [BookingController::class, 'formPembayaran'])->name('form-pembayaran')->middleware('auth');
Route::post('/booking-update-pembayaran/{id}', [BookingController::class, 'updateBookingPembayaran'])->name('booking-update-pembayaran')->middleware('auth');

// route untuk admin
Route::get('/admin-page', [AdminController::class, 'adminPage'])->middleware('auth');
Route::get('/admin-keuangan', [AdminController::class, 'keuanganPage'])->name('keuangan')->middleware('auth');
Route::get('/admin-toptransaksi', [AdminController::class, 'topTransaksiPage'])->name('toptransaksi')->middleware('auth');
Route::get('/admin-pelanggan', [AdminController::class, 'pelangganPage'])->name('report-pelanggan')->middleware('auth');

// route untuk admin melakukan approval
Route::get('/admin-approval', [AdminController::class, 'approvalPage'])->name('approval-pelanggan')->middleware('auth');
Route::patch('/booking/{id}/approve', [AdminController::class, 'approve'])->name('approve-booking')->middleware('auth');
// ========================================================= // 
// ========================================================= // 