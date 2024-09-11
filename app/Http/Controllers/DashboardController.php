<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage(){
        return view('index');
    }

    public function profilePage(){
        return view('profile', [
            'pelanggan' => Pelanggan::where('email_pelanggan', auth()->user()->email)->get()
        ]);
    }
}
