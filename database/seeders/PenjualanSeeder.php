<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil daftar user yang telah diisi
        $users = DB::table('m_user')->pluck('user_id');

        // Generate data penjualan
        $penjualans = [];
        foreach ($users as $user) {
            for ($i = 0; $i < 10; $i++) { // 10 transaksi penjualan untuk setiap user
                $penjualans[] = [
                    'user_id' => $user,
                    'pembeli' => 'Nama Pembeli ' . ($i + 1),
                    'penjualan_kode' => 'KodePenjualan' . ($i + 1),
                    'penjualan_tanggal' => now(),
                ];
            }
        }

        // Masukkan data penjualan ke dalam tabel t_penjualan
        DB::table('t_penjualan')->insert($penjualans);
    }
}
