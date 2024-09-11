<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = ['nama_pelanggan','email_pelanggan','password_pelanggan','nomor_pelanggan','alamat_pelanggan','foto_pelanggan','pekerjaan_pelanggan']; 
}
