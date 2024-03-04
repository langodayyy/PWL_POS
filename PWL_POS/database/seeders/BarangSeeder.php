<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'barang_id' => 1,
            'kategori_id' => 1,
            'barang_kode' => 'BRG001',
            'barang_nama' => 'Indomie Goreng',
            'harga_beli' => 2500,
            'harga_jual' => 3000
        ],
        [
            'barang_id' => 2,
            'kategori_id' => 1,
            'barang_kode' => 'BRG002',
            'barang_nama' => 'Mie Sedap Goreng',
            'harga_beli' => 2500,
            'harga_jual' => 3000
        ],
        [
            'barang_id' => 3,
            'kategori_id' => 2,
            'barang_kode' => 'BRG003',
            'barang_nama' => 'Mizone',
            'harga_beli' => 3000,
            'harga_jual' => 5000
        ],
        [
            'barang_id' => 4,
            'kategori_id' => 2,
            'barang_kode' => 'BRG004',
            'barang_nama' => 'Aqua 600ml',
            'harga_beli' => 2000,
            'harga_jual' => 3500
        ],
        [
            'barang_id' => 5,
            'kategori_id' => 3,
            'barang_kode' => 'BRG005',
            'barang_nama' => 'Gerry Salut',
            'harga_beli' => 3000,
            'harga_jual' => 8000
        ],
        [
            'barang_id' => 6,
            'kategori_id' => 3,
            'barang_kode' => 'BRG006',
            'barang_nama' => 'Chitato',
            'harga_beli' => 4000,
            'harga_jual' => 9000
        ],
        [
            'barang_id' => 7,
            'kategori_id' => 4,
            'barang_kode' => 'BRG007',
            'barang_nama' => 'Alpukat',
            'harga_beli' => 5000,
            'harga_jual' => 9000
        ],
        [
            'barang_id' => 8,
            'kategori_id' => 4,
            'barang_kode' => 'BRG008',
            'barang_nama' => 'Durian',
            'harga_beli' => 13000,
            'harga_jual' => 20000
        ],
        [
            'barang_id' => 9,
            'kategori_id' => 5,
            'barang_kode' => 'BRG009',
            'barang_nama' => 'Kangkung',
            'harga_beli' => 500,
            'harga_jual' => 2000
        ],
        [
            'barang_id' => 10,
            'kategori_id' => 5,
            'barang_kode' => 'BRG010',
            'barang_nama' => 'Sawi',
            'harga_beli' => 1000,
            'harga_jual' => 2500
        ]
    ];
    DB::table('m_barang')->insert($data);
    }
}
