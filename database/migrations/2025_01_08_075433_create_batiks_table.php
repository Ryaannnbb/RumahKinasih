<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('batiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bahan_id')->constrained('bahans')->cascadeOnDelete();
            $table->string('gambar_produk');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('seri_produk');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batiks');
    }
};
