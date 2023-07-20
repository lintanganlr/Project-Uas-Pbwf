<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = [
        'nama_barang',
        'deskripsi_barang',
        'ukuran_barang',
        'harga_barang',
        'id_kategori'
    ];


    public function kategoriBarang()
    {
        return $this->belongsTo(KategoriBarang::class,'id_kategori');
    }
}
