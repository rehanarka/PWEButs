<?php

namespace App\Http\Controllers;

use App\Data\PesananData;

class PesananController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        return view('pesanan', [
            'pesanans' => PesananData::all(),
        ]);
    }
}
