<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua ID transaksi penjualan
        $penjualanIDs = DB::table('t_penjualan')->pluck('penjualan_id');

        // Ambil semua ID barang
        $barangIDs = DB::table('m_barang')->pluck('barang_id');

        // Generate data untuk setiap transaksi penjualan
        $penjualanDetails = [];
        foreach ($penjualanIDs as $penjualanID) {
            // Ambil 3 barang secara acak untuk setiap transaksi
            $selectedBarangIDs = $barangIDs->random(3);

            // Generate data detail penjualan untuk setiap barang
            foreach ($selectedBarangIDs as $barangID) {
                $penjualanDetails[] = [
                    'penjualan_id' => $penjualanID,
                    'barang_id' => $barangID,
                    'harga' => rand(1000, 5000),
                    'jumlah' => rand(1, 10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($penjualanDetails);
    }
}
