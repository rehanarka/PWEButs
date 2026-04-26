<?php

namespace App\Data;

class ProdukData
{
    public static function all(): array
    {
        return [
            [
                'nama_produk' => 'Americano',
                'harga_produk' => 8000,
                'kategori' => 'Kopi',
                'stok' => 20,
            ],
            [
                'nama_produk' => 'Cafe Latte',
                'harga_produk' => 12000,
                'kategori' => 'Kopi',
                'stok' => 15,
            ],
            [
                'nama_produk' => 'Matcha Latte',
                'harga_produk' => 15000,
                'kategori' => 'Non Kopi',
                'stok' => 12,
            ],
            [
                'nama_produk' => 'Croissant',
                'harga_produk' => 10000,
                'kategori' => 'Snack',
                'stok' => 18,
            ],
        ];
    }

    public static function count(): int
    {
        return count(self::all());
    }
}
