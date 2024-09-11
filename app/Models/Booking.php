<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = ['jumlah_booking','durasi_booking','status_booking','bukti_penyerahan','bukti_pengembalian','id_pelanggan','id_produk','harga_total','bukti_pembayaran']; 
}
