<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $nama = session('nama', 'Admin');
        $username = session('username', '-');
        $nomorHP = session('nomor_hp');

        return view('profile', compact('nama', 'username', 'nomorHP'));
    }
}
