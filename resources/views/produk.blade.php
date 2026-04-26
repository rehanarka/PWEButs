@extends('layouts.sidebar')

@section('title', 'Produk - ArkaCafe')

@section('content')
    <div class="ml-56 min-h-screen bg-slate-50 p-8">
        <div class="mx-auto max-w-6xl space-y-6">
            <header class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-xs font-semibold tracking-wider text-slate-500">ARKACAFE ADMIN</p>
                <h1 class="mt-2 text-3xl font-black text-slate-900 ">Produk</h1>
                <p class="mt-1 text-sm text-slate-600">Daftar produk yang tersedia di cafe.</p>
            </header>

            <section class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[640px] text-left text-sm">
                        <thead class="border-b border-slate-200 bg-slate-100 text-xs uppercase tracking-widest text-slate-500">
                            <tr>
                                <th class="px-5 py-4 font-bold">Nama Produk</th>
                                <th class="px-5 py-4 font-bold">Kategori</th>
                                <th class="px-5 py-4 font-bold">Harga</th>
                                <th class="px-5 py-4 font-bold">Stok</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($produks as $produk)
                                <tr class="text-slate-700">
                                    <td class="px-5 py-4 font-semibold text-slate-900">{{ $produk['nama_produk'] }}</td>
                                    <td class="px-5 py-4">{{ $produk['kategori'] }}</td>
                                    <td class="px-5 py-4">Rp {{ number_format($produk['harga_produk'], 0, ',', '.') }}</td>
                                    <td class="px-5 py-4">{{ $produk['stok'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection
