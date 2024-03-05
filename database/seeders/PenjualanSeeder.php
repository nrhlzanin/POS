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
        $penjualan = [
            [
                'penjualan_id' => '001', 
                'user_id' => '001',
                'pembeli' => 'Ahmad',
                'penjualan_kode' => '01',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '002', 
                'user_id' => '002',
                'pembeli' => 'Rini',
                'penjualan_kode' => '02',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '003', 
                'user_id' => '003',
                'pembeli' => 'Reta',
                'penjualan_kode' => '03',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '004', 
                'user_id' => '003',
                'pembeli' => 'Alanna',
                'penjualan_kode' => '04',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '005', 
                'user_id' => '002',
                'pembeli' => 'Ahmad',
                'penjualan_kode' => '05',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '006', 
                'user_id' => '002',
                'pembeli' => 'Marta',
                'penjualan_kode' => '06',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '007', 
                'user_id' => '001',
                'pembeli' => 'Panca',
                'penjualan_kode' => '07',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '008', 
                'user_id' => '003',
                'pembeli' => 'Denada',
                'penjualan_kode' => '08',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '009', 
                'user_id' => '001',
                'pembeli' => 'Winanda',
                'penjualan_kode' => '09',
                'penjualan_tanggal' => now() ,
            ],
            [
                'penjualan_id' => '010', 
                'user_id' => '001',
                'pembeli' => 'Rena',
                'penjualan_kode' => '10',
                'penjualan_tanggal' => now() ,
            ],
        ];

        DB::table('t_penjualan')->insert($penjualan);
    }
}
