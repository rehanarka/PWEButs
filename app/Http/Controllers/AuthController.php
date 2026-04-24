<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );
        $dataAkun = config('accounts.users', []);

        foreach ($dataAkun as $akun) {
            if (
                $akun['username'] === $request->username &&
                $akun['password'] === $request->password
            ) {
                session([
                    'nama' => $akun['nama'],
                    'username' => $akun['username'],
                ]);
                return redirect()->route('dashboard');
            }
        }

        return redirect()->back()
            ->withErrors(['login' => 'Username atau password salah'])
            ->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['nama', 'username']);

        return redirect()->route('login');
    }
}
