<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PelangganController extends Controller
{
    public function registerPage(){
        return view('login.registerPage');
    }

    public function createPelanggan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email_pelanggan' => 'required|email|unique:pelanggan', // Validasi unik email di tabel pelanggan
            'password_pelanggan' => 'required|string|max:18',
            'nomor_pelanggan' => 'required|string|max:15',
            'alamat_pelanggan' => 'required|string|max:255',
            'pekerjaan_pelanggan' => 'required|string|max:255',
        ]);

        // Buat pelanggan baru
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email_pelanggan' => $request->email_pelanggan,
            'password_pelanggan' => Hash::make($request->password_pelanggan), // Hash password sebelum disimpan
            'nomor_pelanggan' => $request->nomor_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'pekerjaan_pelanggan' => $request->pekerjaan_pelanggan,
        ]);
        
        // Buat user terkait (jika diperlukan)
        User::create([
            'name' => $request->nama_pelanggan,
            'email' => $request->email_pelanggan,
            'password' => Hash::make($request->password_pelanggan), // Hash password sebelum disimpan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('formLogin')->with('success', 'Pelanggan berhasil ditambahkan');
    }
}
