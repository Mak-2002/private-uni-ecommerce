<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Product, Category, User};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        $categories = [
            'homeTools',
            'cleaning',
            'spices',
            'toaster',
            'chocolate',
            'oil',
            'coffee',
            'sweets',
            'vegetables',
            'cheese',
            'water',
            'bread',
            'canned',
            'tissue',
            'seeds',
            'meat',
            'electrical',
        ];
        foreach ($categories as $category)
            Category::factory()->create([
                'name' => $category
            ]);
    }
}
