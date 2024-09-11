<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminPage(){
        $user = Auth::user();

        if ($user && $user->id == 3) {
            return view('admin');
        }else{
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman admin.');
        }
    }

    public function keuanganPage(){
        $booking = Booking::all();
        $totalKeuangan = $booking->sum('harga_total');

        return view('keuangan', compact('totalKeuangan'));
    }

    public function topTransaksiPage()
    {
        $topTransaksi = DB::table('booking')
        ->join('produk', 'booking.id_produk', '=', 'produk.id')
        ->join('pelanggan', 'booking.id_pelanggan', '=', 'pelanggan.id')
        ->select('booking.*', 'produk.nama_produk', 'pelanggan.nama_pelanggan')
        ->orderBy('booking.harga_total', 'desc') // Mengurutkan berdasarkan harga dari yang tertinggi
        ->get();

        return view('toptransaksi', [
        'topTransaksi' => $topTransaksi
        ]);
    }

    public function pelangganPage()
    {
        $pelanggan = Pelanggan::all();

        return view('reportpelanggan', compact('pelanggan'));
    }

    public function approvalPage(){
        // Melakukan join antara tabel booking, produk, dan pelanggan
        $bookings = DB::table('booking')
            ->join('produk', 'booking.id_produk', '=', 'produk.id')
            ->join('pelanggan', 'booking.id_pelanggan', '=', 'pelanggan.id')
            ->select('booking.*', 'produk.nama_produk', 'pelanggan.nama_pelanggan')
            ->get();

        return view('approval', [
            'bookings' => $bookings
        ]);
    }

    public function approve($id)
    {
        // Cari booking berdasarkan ID
        $booking = Booking::findOrFail($id);
        
        // Ubah status menjadi 'confirmed'
        $booking->status_booking = 'confirmed';
        
        // Simpan perubahan ke database
        $booking->save();
        
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Booking has been confirmed successfully.');
    }
}
