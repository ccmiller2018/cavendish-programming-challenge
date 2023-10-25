<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    public function definition(): array
    {
        return [];
    }

    public function forSite(string $siteId): static
    {
        return $this->state(fn (array $attributes) => [
            'site_id' => $siteId,
        ]);
    }

    public function forUser(string $userId): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $userId
        ]);
    }
}
