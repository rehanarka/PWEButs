<?php

namespace App\Data;

class PesananData
{
    public static function all(): array
    {
        return [
            [
                'kode_pesanan' => 'ARK-001',
                'nama_pelanggan' => 'Raka',
                'produk' => 'Americano',
                'jumlah' => 2,
                'total_harga' => 16000,
                'status' => 'Selesai',
            ],
            [
                'kode_pesanan' => 'ARK-002',
                'nama_pelanggan' => 'Naya',
                'produk' => 'Cafe Latte',
                'jumlah' => 1,
                'total_harga' => 12000,
                'status' => 'Diproses',
            ],
            [
                'kode_pesanan' => 'ARK-003',
                'nama_pelanggan' => 'Dimas',
                'produk' => 'Matcha Latte',
                'jumlah' => 2,
                'total_harga' => 30000,
                'status' => 'Menunggu',
            ],
            [
                'kode_pesanan' => 'ARK-004',
                'nama_pelanggan' => 'Salsa',
                'produk' => 'Croissant',
                'jumlah' => 3,
                'total_harga' => 30000,
                'status' => 'Selesai',
            ],
        ];
    }

    public static function count(): int
    {
        return count(self::all());
    }
}
