<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;
    protected $table = 'bahans';
    protected $fillable = [
        'nama_bahan',
        'harga'
    ];
    public function bahan(){
        return $this->belongsTo(Bahan::class);
    }
}
