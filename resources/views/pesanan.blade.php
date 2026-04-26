@extends('layouts.sidebar')
@section('title', 'Pesanan')

@section('content')
    <div class="ml-56 min-h-screen bg-slate-50 p-8">
        <div class="mx-auto max-w-6xl space-y-6">
            <header class="w-full rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-sm font-semibold tracking-wider text-slate-500">ARKACAFE ADMIN</p>
                <h1 class="font-black text-3xl text-slate-900 mt-2">Pesanan</h1>
                <p class="text-slate-600 text-sm mt-1">Daftar Pesanan Yang Tercatat Oleh Sistem</p>
            </header>

            <section class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[760px] text-left text-sm">
                        <thead class="border-b border-slate-200 bg-slate-100 text-xs uppercase tracking-widest text-slate-500">
                            <tr>
                                <th class="px-5 py-4 font-bold">Kode</th>
                                <th class="px-5 py-4 font-bold">Pelanggan</th>
                                <th class="px-5 py-4 font-bold">Produk</th>
                                <th class="px-5 py-4 font-bold">Jumlah</th>
                                <th class="px-5 py-4 font-bold">Total</th>
                                <th class="px-5 py-4 font-bold">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($pesanans as $pesanan)
                                <tr class="text-slate-700">
                                    <td class="px-5 py-4 font-semibold text-slate-900">{{ $pesanan['kode_pesanan'] }}</td>
                                    <td class="px-5 py-4">{{ $pesanan['nama_pelanggan'] }}</td>
                                    <td class="px-5 py-4">{{ $pesanan['produk'] }}</td>
                                    <td class="px-5 py-4">{{ $pesanan['jumlah'] }}</td>
                                    <td class="px-5 py-4">Rp {{ number_format($pesanan['total_harga'], 0, ',', '.') }}</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex rounded-full px-3 py-1 text-xs font-bold
                                            @if ($pesanan['status'] === 'Selesai') bg-emerald-100 text-emerald-700
                                            @elseif ($pesanan['status'] === 'Diproses') bg-sky-100 text-sky-700
                                            @else bg-amber-100 text-amber-700
                                            @endif">
                                            {{ $pesanan['status'] }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection
