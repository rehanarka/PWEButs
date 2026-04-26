<?php

namespace App\Http\Controllers;

use App\Data\PesananData;
use App\Data\ProdukData;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $jumlahAkun = count(config('accounts.users', []));
        $jumlahProduk = ProdukData::count();
        $jumlahPesanan = PesananData::count();

        return view('dashboard', [
            'jumlahAkun' => $jumlahAkun,
            'jumlahProduk' => $jumlahProduk,
            'jumlahPesanan' => $jumlahPesanan,
        ]);
    }
}
