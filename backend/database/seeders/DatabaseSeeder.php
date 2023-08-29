<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Product, Category, OfferProduct, User};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Users
        User::factory(10)->create();

        // Categories
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

        // Products
        //? --> Normal Products
        Product::factory(10)->create();

        //? --> Offers
        Product::factory(3)->create()->each(function ($product) {
            $subProducts = Product::inRandomOrder()->whereBetween('id', [1, 10])->take(3)->get();
            foreach($subProducts as $subProduct)
                OfferProduct::factory()->create([
                    'offer_id' => $product->id,
                    'sub_product_id' => $subProduct->id
                ]);
        });
    }
}
