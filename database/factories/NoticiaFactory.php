<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return [
        'titulo' => fake()->words(5, true),
        'contenido' => fake()->sentence(45),
        'fecha_publicacion' => fake()->dateTimeThisMonth(),
        'imagen' => fake()->imageUrl(),
        'autor' => fake()->name(),
      ];
    }
}
