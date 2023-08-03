<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfilDesa>
 */
class ProfilDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'deskripsi' => 'f44f4f 4f4f4f4f 44f 4f4f4f 4f4f4f4 f4f4f 4f4 f4f4f4',
            'img_desa' => '3c3c3c33333333 3 c33co3dpo3d3d'
        ];
    }
}
