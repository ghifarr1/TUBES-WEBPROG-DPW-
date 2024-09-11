<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // view all produk
    public function allShop(){
        $data = Produk::all();
        return view('shop', compact('data'));
    }

    // view all sepatu
    public function sepatuShop(){
        return view('read.sepatu', [
            'produk' => Produk::where('jenis_produk', 'Sepatu')->get()
        ]);
    }

    // view all tas
    public function tasShop(){
        return view('read.tas', [
            'produk' => Produk::where('jenis_produk', 'Tas')->get()
        ]);
    }

    // view all tenda
    public function tendaShop(){
        return view('read.tenda', [
            'produk' => Produk::where('jenis_produk', 'Tenda')->get()
        ]);
    }

    // view shop single produk
    public function shopsingle($id){
        $produk = Produk::where('id', $id)->get();
        return view('shop-single', compact('produk'));
    }
}
