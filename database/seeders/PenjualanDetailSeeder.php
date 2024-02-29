<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Ambil daftar penjualan
                $penjualans = DB::table('t_penjualan')->pluck('penjualan_id');

                // Generate data penjualan detail untuk setiap penjualan
                $penjualanDetails = [];
                foreach ($penjualans as $penjualan) {
                    // Ambil barang secara acak dari m_barang
                    $barangs = DB::table('m_barang')->pluck('barang_id')->random(3); // Ambil 3 barang secara acak
        
                    foreach ($barangs as $barang) {
                        $penjualanDetails[] = [
                            'penjualan_id' => $penjualan,
                            'barang_id' => $barang,
                            'harga' => rand(1000, 10000), // Harga acak antara 1000 dan 10000
                            'jumlah' => rand(1, 5), // Jumlah acak antara 1 dan 5
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
        
                // Masukkan data penjualan detail ke dalam tabel t_penjualan_detail
                DB::table('t_penjualan_detail')->insert($penjualanDetails);
    }
}
