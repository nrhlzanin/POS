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
        $data = [
            [
                'barang_id' => '001',
                'kategori_id' => '0005',
                'barang_kode' => 'BR001',
                'barang_nama' => 'Citato',
                'harga_beli' => '5000',
                'harga_jual' => '7500',
            ],
            [
                'barang_id' => '002',
                'kategori_id' => '0001',
                'barang_kode' => 'BR002',
                'barang_nama' => 'Risol Mayo',
                'harga_beli' => '2000',
                'harga_jual' => '2500',
            ],
            [
                'barang_id' => '003',
                'kategori_id' => '0005',
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Oreo',
                'harga_beli' => '2000',
                'harga_jual' => '2500',
            ],
            [
                'barang_id' => '004',
                'kategori_id' => '0002',
                'barang_kode' => 'BR004',
                'barang_nama' => 'Nasi Kuning',
                'harga_beli' => '9000',
                'harga_jual' => '10000',
            ],
            [
                'barang_id' => '005',
                'kategori_id' => '0003',
                'barang_kode' => 'BR005',
                'barang_nama' => 'Kopi ABC',
                'harga_beli' => '3000',
                'harga_jual' => '5000',
            ],
            [
                'barang_id' => '006',
                'kategori_id' => '0004',
                'barang_kode' => 'BR006',
                'barang_nama' => 'Mineral Water',
                'harga_beli' => '25000',
                'harga_jual' => '3500',
            ],
            [
                'barang_id' => '007',
                'kategori_id' => '0003',
                'barang_kode' => 'BR007',
                'barang_nama' => 'Espresso',
                'harga_beli' => '3000',
                'harga_jual' => '5000',
            ],
            [
                'barang_id' => '008',
                'kategori_id' => '0002',
                'barang_kode' => 'BR008',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => '9000',
                'harga_jual' => '10000',
            ],
            [
                'barang_id' => '009',
                'kategori_id' => '0002',
                'barang_kode' => 'BR009',
                'barang_nama' => 'Nasi Teriyaki',
                'harga_beli' => '9000',
                'harga_jual' => '10000',
            ],
            [
                'barang_id' => '010',
                'kategori_id' => '0001',
                'barang_kode' => 'BR010',
                'barang_nama' => 'Tahu Isi',
                'harga_beli' => '2000',
                'harga_jual' => '2500',
            ],
        ];
       DB::table('m_barang')->insert($data);
    }
}
