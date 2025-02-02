<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $fillable = [
        'nama_pelanggan',
        'tanggal_transaksi',
        'total_harga'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
