<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => '0001', 'kategori_kode' => 'KTG0001', 'kategori_nama' => 'Makanan Ringan'],
            ['kategori_id' => '0002', 'kategori_kode' => 'KTG0002', 'kategori_nama' => 'Makanan Berat'],
            ['kategori_id' => '0003', 'kategori_kode' => 'KTG0003', 'kategori_nama' => 'Minuman Hangat'],
            ['kategori_id' => '0004', 'kategori_kode' => 'KTG0004', 'kategori_nama' => 'Minuman Dingin'],
            ['kategori_id' => '0005', 'kategori_kode' => 'KTG0005', 'kategori_nama' => 'Snack'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
