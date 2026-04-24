<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $jumlahAkun = count(config('accounts.users', []));

        return view('dashboard', [
            'jumlahAkun' => $jumlahAkun,
        ]);
    }
}
