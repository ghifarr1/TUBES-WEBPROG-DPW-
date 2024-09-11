<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function bookingPage(){
        // Melakukan join antara tabel booking, produk, dan pelanggan
        $bookings = DB::table('booking')
            ->join('produk', 'booking.id_produk', '=', 'produk.id')
            ->join('pelanggan', 'booking.id_pelanggan', '=', 'pelanggan.id')
            ->select('booking.*', 'produk.nama_produk', 'pelanggan.nama_pelanggan')
            ->where('booking.id_pelanggan', auth()->user()->id)
            ->get();

        return view('booking', [
            'bookings' => $bookings
        ]);
    }

    public function createBooking(Request $request)
    {
        // Validasi input
        $request->validate([
            'jumlah_booking' => 'required',
            'id_produk' => 'required',
            'id_pelanggan' => 'required',
            'hargasatuan' => 'required',
        ]);

        $booking = new Booking();
        $booking->jumlah_booking = $request['jumlah_booking'];
        $booking->id_produk = $request['id_produk'];
        $booking->id_pelanggan = $request['id_pelanggan'];
        $booking->harga_total = $request['hargasatuan'] * $request['jumlah_booking'];
        $booking->durasi_booking = 30;
        $booking->status_booking = "pending";
        // $booking->bukti_penyerahan = "NULL";
        // $booking->bukti_pengembalian = "NULL";
        $booking->save();


        // Buat pelanggan baru
        // Booking::create([
        //     'jumlah_booking' => $request->jumlah_booking,
        //     'id_produk' => $request->id_produk,
        //     'id_pelanggan' => $request->id_pelanggan,
        //     'harga_total' => $request->hargasatuan * $request->jumlah_booking,
        // ]);

        // Redirect dengan pesan sukses
        return redirect()->route('bookingPage')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    // Method untuk menghapus booking
    public function deleteBooking($id)
    {
        // Cari booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Hapus booking
        $booking->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('bookingPage')->with('success', 'Booking berhasil dihapus');
    }

    public function penyerahanPage($id){
        $booking = Booking::findOrFail($id);
        return view('penyerahan', compact('booking'));
    }

     // Method untuk mengupdate booking
     public function updateBookingPenyerahan(Request $request, $id)
     {
         // Validasi input
         $request->validate([
             'bukti_penyerahan' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
 
         // Cari booking berdasarkan ID
         $booking = Booking::findOrFail($id);
 
         // Jika ada file foto yang diupload
         if ($request->hasFile('bukti_penyerahan')) {
             // Simpan file foto
             $path = $request->file('bukti_penyerahan')->store('\public\assets\img');
             $booking->bukti_penyerahan = $path;
 
             // Ubah status menjadi success
             $booking->status_booking = 'success';
         }
 
         // Simpan perubahan
         $booking->save();
 
         // Redirect dengan pesan sukses
         return redirect()->route('bookingPage')->with('success', 'Booking berhasil diperbarui');
     }

     public function pengembalianPage($id){
        $booking = Booking::findOrFail($id);
        return view('pengembalian', compact('booking'));
    }

    // Method untuk mengupdate booking
    public function updateBookingPengembalian(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'bukti_pengembalian' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Jika ada file foto yang diupload
        if ($request->hasFile('bukti_pengembalian')) {
            // Simpan file foto
            $path = $request->file('bukti_pengembalian')->store('\public\assets\img');
            $booking->bukti_pengembalian = $path;

            // Ubah status menjadi success
            $booking->status_booking = 'returned';
        }

        // Simpan perubahan
        $booking->save();

        // Redirect dengan pesan sukses
        return redirect()->route('bookingPage')->with('success', 'Booking berhasil diperbarui');
    }

    public function formPembayaran($id)
    {
        // Cari booking berdasarkan ID
        $booking = Booking::findOrFail($id);
        
        // Return ke view form pembayaran dengan data booking
        return view('pembayaran', compact('booking'));
    }

        // Method untuk mengupdate booking
        public function updateBookingPembayaran(Request $request, $id)
        {
            // Validasi input
            $request->validate([
                'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            // Cari booking berdasarkan ID
            $booking = Booking::findOrFail($id);
    
            // Jika ada file foto yang diupload
            if ($request->hasFile('bukti_pembayaran')) {
                // Simpan file foto
                $path = $request->file('bukti_pembayaran')->store('\public\assets\img');
                $booking->bukti_pengembalian = $path;
    
                // Ubah status menjadi success
                $booking->status_booking = 'already paid';
            }
    
            // Simpan perubahan
            $booking->save();
    
            // Redirect dengan pesan sukses
            return redirect()->route('bookingPage')->with('success', 'Booking berhasil diperbarui');
        }
}
