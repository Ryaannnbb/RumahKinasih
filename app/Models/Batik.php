<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batik extends Model
{
    use HasFactory;
    protected $table = 'batiks';
    protected $fillable = [
        'bahan_id',
        'gambar_produk',
        'nama_produk',
        'harga',
        'stok',
        'seri_produk',
        'deskripsi'
    ];

    public function bahan(){
        return $this->belongsTo(Bahan::class);
    }

    public function detailTransaksi(){
        return $this->hasMany(DetailTransaksi::class);
    }
}
