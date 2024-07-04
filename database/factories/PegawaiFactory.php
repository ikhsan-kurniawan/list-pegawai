<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenisKelamin = ['Laki-laki', 'Perempuan'];
        $agama = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha'];

        return [
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement($jenisKelamin),
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2000-12-31'),
            'agama' => $this->faker->randomElement($agama),
            'gambar' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
