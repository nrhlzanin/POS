<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stok = [
            [
                'stok_id' => '001',
                'barang_id' => '001',
                'user_id' => '001',
                'stok_tanggal' => now(),
                'stok_jumlah' => '10',
            ],
            [
                'stok_id' => '002',
                'barang_id' => '002',
                'user_id' => '001',
                'stok_tanggal' => now(),
                'stok_jumlah' => '30',
            ],
            [
                'stok_id' => '003',
                'barang_id' => '003',
                'user_id' => '002',
                'stok_tanggal' => now(),
                'stok_jumlah' => '15',
            ],
            [
                'stok_id' => '004',
                'barang_id' => '004',
                'user_id' => '002',
                'stok_tanggal' => now(),
                'stok_jumlah' => '3',
            ],
            [
                'stok_id' => '005',
                'barang_id' => '005',
                'user_id' => '001',
                'stok_tanggal' => now(),
                'stok_jumlah' => '14',
            ],
            [
                'stok_id' => '006',
                'barang_id' => '006',
                'user_id' => '001',
                'stok_tanggal' => now(),
                'stok_jumlah' => '34',
            ],
            [
                'stok_id' => '007',
                'barang_id' => '007',
                'user_id' => '002',
                'stok_tanggal' => now(),
                'stok_jumlah' => '20',
            ],
            [
                'stok_id' => '008',
                'barang_id' => '008',
                'user_id' => '003',
                'stok_tanggal' => now(),
                'stok_jumlah' => '23',
            ],
            [
                'stok_id' => '009',
                'barang_id' => '009',
                'user_id' => '002',
                'stok_tanggal' => now(),
                'stok_jumlah' => '32',
            ],
            [
                'stok_id' => '010',
                'barang_id' => '010',
                'user_id' => '003',
                'stok_tanggal' => now(),
                'stok_jumlah' => '20',
            ],
        ];

        // Masukkan data stok ke dalam tabel t_stok
        DB::table('t_stok')->insert($stok);

    }
}
