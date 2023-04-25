<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Categories::factory(4)->create();

        User::factory(10)->create()->each(function($user) use ($categories) {
            Articles::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'categories_id' => ($categories->random(1)->first())->id,
            ]);
        });
    }
}
