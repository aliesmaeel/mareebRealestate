<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image'=>fake()->imageUrl,
            'text'=>fake()->text,
            'links' => [
                [
                    'name' => fake()->name,
                    'url' => fake()->url,
                ]
            ],
            'copy_write'=>fake()->word,
            'active'=>1
        ];
    }
}
