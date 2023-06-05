<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Statut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(rand(5, 10), true),
            'contenu' => $this->faker->paragraphs(rand(3, 5), true),
            'image' => asset('articles\GUpVwMxRkKDRueUghLsBuMcl3fNeKkvsuwGyp2GQ.png'),
        ];
    }
}
