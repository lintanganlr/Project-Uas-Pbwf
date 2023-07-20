<?php

namespace Database\Seeders;

use App\Models\KategoriBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        KategoriBarang::create([
            'nama_kategori' => 'Kategori 1'
        ]);


        KategoriBarang::create([
            'nama_kategori' => 'Kategori 2'
        ]);
    }
}
