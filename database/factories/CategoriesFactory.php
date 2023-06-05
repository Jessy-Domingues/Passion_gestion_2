<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Statut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->sentence(rand(1, 3), true)
            
        ];
    }
}
