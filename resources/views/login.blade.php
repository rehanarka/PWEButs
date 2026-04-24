@extends('layouts.layout')

@section('title', 'Login | ArkaCafe')

@section('content')
<section class="auth-bg relative min-h-screen overflow-hidden px-4 py-10 sm:px-6 lg:px-8">
    <div class="relative mx-auto flex min-h-screen w-full max-w-5xl items-center justify-center">
        <div class="float-soft grid w-full max-w-4xl overflow-hidden rounded-3xl border border-white/60 bg-white/75 shadow-[0_30px_80px_-35px_rgba(15,23,42,0.45)] backdrop-blur-xl lg:grid-cols-2">
            <div class="hidden bg-gradient-to-br from-sky-500 via-cyan-500 to-teal-400 p-10 text-white lg:flex lg:flex-col lg:justify-between">
                <div class="space-y-4">
                    <p class="inline-flex items-center rounded-full border border-white/35 bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.18em]">ArkaCafe Portal</p>
                    <h1 class="text-3xl font-black leading-tight">Welcome Back</h1>
                    <p class="max-w-xs text-sm text-cyan-50/95">Kelola operasional cafe, pantau transaksi, dan lanjut kerja lebih cepat dari satu dashboard.</p>
                </div>
                <p class="text-xs text-cyan-50/90">UTS PWEB 242410101034.</p>
            </div>

            <div class="p-6 sm:p-8 lg:p-10">
                <div class="mb-6 space-y-1">
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-500">Secure Login</p>
                    <h2 class="text-2xl font-extrabold text-slate-900">Masuk ke akun kamu</h2>
                    <p class="text-sm text-slate-500">Gunakan username dan password yang sudah terdaftar.</p>
                </div>

                <form action="{{ route('loginPost') }}" method="post" class="space-y-4">
                    @csrf
                    <div class="space-y-2">
                        <label for="username" class="text-sm font-semibold text-slate-700">Username</label>
                        <input type="text" autocomplete="off" id="username" name="username" placeholder="Masukkan username" value="{{ old('username') }}" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 shadow-sm transition focus:border-cyan-400 focus:outline-none focus:ring-4 focus:ring-cyan-100">
                    </div>

                    <div class="space-y-2">
                        <label for="password" class="text-sm font-semibold text-slate-700">Password</label>
                        <input type="password" autocomplete="off" id="password" name="password" placeholder="Masukkan password" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 shadow-sm transition focus:border-cyan-400 focus:outline-none focus:ring-4 focus:ring-cyan-100">
                    </div>

                    @if ($errors->first())
                        <div class="rounded-xl border border-rose-200 bg-rose-50 px-3 py-2 text-sm font-medium text-rose-700">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <button type="submit" class="w-full rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 px-4 py-3 text-sm font-bold text-white shadow-lg shadow-cyan-300/40 transition hover:translate-y-[-2px] hover:cursor-pointer hover:shadow-cyan-300/60">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
