<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfilPerangkatDesa>
 */
class ProfilPerangkatDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'tempat_tanggal_lahir' => $this->faker->city . ', ' . $this->faker->date("Y-m-d"),
            'jenis_kelamin' => 'Laki - Laki',
            'status' => 'Menikah',
            'alamat' => $this->faker->address,
            'no_telp' => $this->faker->phoneNumber,
            'nama_pasangan' => $this->faker->name,
            'jumlah_anak' => rand(1, 10),
            'pendidikan_formal' => 'S1',
            'jabatan' => $this->faker->titleMale,
            'no_sk' => $this->faker->postcode,
            'img_perangkat_desa' => ''
        ];
    }
}
