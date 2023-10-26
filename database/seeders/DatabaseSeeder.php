<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->has(
                Role::factory()
                    ->state(['name' => 'admin'])
                    ->count(1),
                'roles'
            )
            ->create(
                [
                    'email' => 'admin@test.com',
                    'name' => 'Test Admin User',
                ]
            );

        $user = User::factory()
            ->has(
                Role::factory()
                    ->state(['name' => 'user'])
                    ->count(1),
                'roles'
            )
            ->create(
                [
                    'email' => 'user@test.com',
                    'name' => 'Test User',
                ]
            );

        $categories = Category::factory()->count(300)->create();

        Site::factory()
            ->count(10000)
            ->create()
            ->each(function ($site) use ($categories) {
                $catIds = $categories->pluck('id')
                    ->random(random_int(1, 5))
                    ->all();

                $site->categories()
                    ->attach($catIds);
            });
    }
}
