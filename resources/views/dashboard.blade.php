@extends('layouts.sidebar')

@php
$nama = session('nama', 'Pengguna')
@endphp

@section('content')
    <div class="ml-56 min-h-screen bg-slate-50/70 p-6 sm:p-8">
        <div class="mx-auto max-w-6xl space-y-6">
            <header class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-500">ArkaCafe Admin</p>
                <h1 class="mt-2 text-2xl font-black text-slate-900 sm:text-3xl">Dashboard</h1>
                <p class="mt-1 text-sm text-slate-600">Selamat datang kembali, <span class="font-semibold text-slate-800">{{ $nama }}</span>.</p>
            </header>

            <section class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <article class="rounded-2xl border border-cyan-100 bg-gradient-to-br from-cyan-50 to-sky-50 p-5 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-cyan-700">Total Akun</p>
                    <p class="mt-2 text-3xl font-black text-slate-900">{{ $jumlahAkun }}</p>
                    <p class="mt-1 text-sm text-slate-600">Akun terdaftar di sistem.</p>
                </article>

                <article class="rounded-2xl border border-violet-100 bg-gradient-to-br from-violet-50 to-fuchsia-50 p-5 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-violet-700">Status Login</p>
                    <p class="mt-2 text-3xl font-black text-slate-900">Active</p>
                    <p class="mt-1 text-sm text-slate-600">Sesi kamu sedang berjalan normal.</p>
                </article>

                <article class="rounded-2xl border border-emerald-100 bg-gradient-to-br from-emerald-50 to-teal-50 p-5 shadow-sm sm:col-span-2 lg:col-span-1">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-emerald-700">Quick Start</p>
                    <p class="mt-2 text-lg font-bold text-slate-900">Kelola data cafe</p>
                    <p class="mt-1 text-sm text-slate-600">Mulai dari menu produk atau cek pesanan terbaru.</p>
                </article>
            </section>

            <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="text-lg font-bold text-slate-900">Aksi Cepat</h2>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="{{ route('produk') }}" class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-700">
                        Kelola Produk
                    </a>
                    <a href="{{ route('pesanan') }}" class="inline-flex items-center rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                        Lihat Pesanan
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection
