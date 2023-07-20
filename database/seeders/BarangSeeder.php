<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Barang 1',
            'deskripsi_barang' => 'Barang yang bagus',
            'ukuran_barang' => 'XL',
            'harga_barang' => 100000,
            'id_kategori' =>1
        ]);


        Barang::create([
            'nama_barang' => 'Barang 2',
            'deskripsi_barang' => 'Barang terbaru',
            'ukuran_barang' => 'L',
            'harga_barang' => 130000,
            'id_kategori' => 2
        ]);

        Barang::create([
            'nama_barang' => 'Barang 3',
            'deskripsi_barang' => 'Barang terlaku',
            'ukuran_barang' => 'XXL',
            'harga_barang' => 185000,
            'id_kategori' => 1
        ]);
    }
}
