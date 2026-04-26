@extends('layouts.sidebar')
@section('title', 'Profile')

@section('content')
    @php
        $avatarSeed = urlencode($username ?: $nama);
        $avatarUrl = "https://api.dicebear.com/9.x/adventurer/svg?seed={$avatarSeed}";
    @endphp

    <div class="ml-56 min-h-[calc(100vh-77px)] bg-slate-50 p-6 sm:p-8">
        <div class="mx-auto flex min-h-[calc(100vh-125px)] max-w-6xl flex-col space-y-6">
            <header class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-500">ArkaCafe Admin</p>
                <h1 class="mt-2 text-2xl font-black text-slate-900 sm:text-3xl">Profile</h1>
                <p class="mt-1 text-sm text-slate-600">Informasi akun yang sedang digunakan.</p>
            </header>

            <section class="grid flex-1 gap-6 lg:grid-cols-[320px_1fr]">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full border border-slate-200 bg-slate-100">
                        <img src="{{ $avatarUrl }}" alt="Avatar {{ $nama }}" class="h-24 w-24 rounded-full">
                    </div>
                    <h2 class="mt-4 text-xl font-black text-slate-900">{{ $nama }}</h2>
                    <p class="mt-1 text-sm font-medium text-slate-500">{{ '@' . $username }}</p>
                </div>

                <div class="flex">
                    <section class="w-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h2 class="text-lg font-bold text-slate-900">Detail Akun</h2>
                    <div class="space-y-5">
                        <div class="mt-5 grid gap-4 grid-cols-2">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Nama</p>
                                <p class="mt-2 text-base font-bold text-slate-900">{{ $nama }}</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Username</p>
                                <p class="mt-2 text-base font-bold text-slate-900">{{ $username }}</p>
                            </div>
                        </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Nomor HP</p>
                                <p class="mt-2 text-base font-bold text-slate-900">{{ $nomorHP ?? '-' }}</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Role</p>
                                <p class="mt-2 text-base font-bold text-slate-900">Admin</p>
                            </div>
                        </div>
                        <div class="bg-neutral-900/60 p-4 border-neutral-800 border shadow-sm w-fit mt-4 rounded-lg shadow-black transition duration-200 hover:-translate-y-1 hover:cursor-pointer hover:bg-neutral-600/50 ">
                            <a class="text-white font-semibold" href="/dashboard">Kembali ke Dashboard</a>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
@endsection
