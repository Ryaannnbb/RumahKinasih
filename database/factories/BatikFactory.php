<?php

namespace Database\Factories;

use App\Models\Bahan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batik>
 */
class BatikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategoriIds = Bahan::pluck('id')->toArray();
        return [
            'bahan_id' => $this->faker->randomElement($kategoriIds),
            'gambar_produk' => $this->faker->imageUrl(1080, 1080, 'products', true),
            'nama_produk' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(1000, 100000),
            'stok' => $this->faker->numberBetween(10, 100),
            'deskripsi' => $this->faker->paragraph(),
            'seri_produk' => $this->faker->bothify('SER-####'),
        ];
    }
}
