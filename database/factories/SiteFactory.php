<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'visible' => false,
        ];
    }
}
