<?php

namespace App\Http\Controllers;

use App\Data\ProdukData;

class ProdukController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        return view('produk', [
            'produks' => ProdukData::all(),
        ]);
    }
}
