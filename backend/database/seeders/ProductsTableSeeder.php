<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ImageLink;
use App\Models\OfferProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //? --> Normal Products

        // Create products
        $products = [
            [
                'name' => 'سامسونج غالاكسي A50',
                'price' => 460,
                'about' => 'dummyText',
                'off' => 300,
                'quantity' => 1,
                'category' => Category::where('name', 'المنظفات')->first()->name,
            ],
            [
                'name' => 'سامسونج غالاكسي تاب S7 FE',
                'price' => 380,
                'about' => 'dummyText',
                'off' => 220,
                'quantity' => 1,
                'category' => Category::where('name', 'المحمصة')->first()->name,
            ],
            [
                'name' => 'سامسونج غالاكسي تاب S8+',
                'price' => 650,
                'about' => 'dummyText',
                'off' => null,
                'quantity' => 1,
                'category' => Category::where('name', 'المحمصة')->first()->name,
            ],
            [
                'name' => 'ساعة سامسونج غالاكسي 4',
                'price' => 229,
                'about' => 'dummyText',
                'off' => 200,
                'quantity' => 1,
                'category' => Category::where('name', 'أدوات المنزل')->first()->name,
            ],
            [
                'name' => 'ساعة آبل 7',
                'price' => 330,
                'about' => 'dummyText',
                'off' => null,
                'quantity' => 1,
                'category' => Category::where('name', 'أدوات المنزل')->first()->name,
            ],
            [
                'name' => 'Beats studio 3',
                'price' => 230,
                'about' => 'dummyText',
                'off' => null,
                'quantity' => 1,
                'category' => Category::where('name', 'البهارات')->first()->name,
            ],
            [
                'name' => 'سامسونج Q60 A',
                'price' => 497,
                'about' => 'dummyText',
                'off' => null,
                'quantity' => 1,
                'category' => Category::where('name', 'الشوكولا')->first()->name,
            ],
            [
                'name' => 'سوني x 80 J',
                'price' => 498,
                'about' => 'dummyText',
                'off' => null,
                'quantity' => 1,
                'category' => Category::where('name', 'الشوكولا')->first()->name,
            ],
        ];
        Product::insert($products);

        // Create image links
        $imageLinks = [
            [
                'product_id' => 1,
                'link' => asset('images/a53_1.png'),
            ],
            [
                'product_id' => 1,
                'link' => asset('images/a53_2.png'),
            ],
            [
                'product_id' => 1,
                'link' => asset('images/a53_3.png'),
            ],
            [
                'product_id' => 2,
                'link' => asset('images/tab_s7_fe_1.png'),
            ],
            [
                'product_id' => 2,
                'link' => asset('images/tab_s7_fe_2.png'),
            ],
            [
                'product_id' => 2,
                'link' => asset('images/tab_s7_fe_3.png'),
            ],
            [
                'product_id' => 3,
                'link' => asset('images/tab_s8_1.png'),
            ],
            [
                'product_id' => 3,
                'link' => asset('images/tab_s8_2.png'),
            ],
            [
                'product_id' => 3,
                'link' => asset('images/tab_s8_3.png'),
            ],
            [
                'product_id' => 4,
                'link' => asset('images/galaxy_watch_4_1.png'),
            ],
            [
                'product_id' => 4,
                'link' => asset('images/galaxy_watch_4_2.png'),
            ],
            [
                'product_id' => 4,
                'link' => asset('images/galaxy_watch_4_3.png'),
            ],
            [
                'product_id' => 5,
                'link' => asset('images/apple_watch_series_7_1.png'),
            ],
            [
                'product_id' => 5,
                'link' => asset('images/apple_watch_series_7_2.png'),
            ],
            [
                'product_id' => 5,
                'link' => asset('images/apple_watch_series_7_3.png'),
            ],
            [
                'product_id' => 6,
                'link' => asset('images/beats_studio_3-1.png'),
            ],
            [
                'product_id' => 6,
                'link' => asset('images/beats_studio_3-2.png'),
            ],
            [
                'product_id' => 6,
                'link' => asset('images/beats_studio_3-3.png'),
            ],
            [
                'product_id' => 6,
                'link' => asset('images/beats_studio_3-4.png'),
            ],
            [
                'product_id' => 7,
                'link' => asset('images/samsung_q_60_a_1.png'),
            ],
            [
                'product_id' => 7,
                'link' => asset('images/samsung_q_60_a_2.png'),
            ],
            [
                'product_id' => 8,
                'link' => asset('images/sony_x_80_j_1.png'),
            ],
            [
                'product_id' => 8,
                'link' => asset('images/sony_x_80_j_2.png'),
            ],
        ];
        ImageLink::insert($imageLinks);


        //? --> Offers
        Product::factory(3)->create()->each(function ($product) {
            $subProducts = Product::inRandomOrder()->whereBetween('id', [1, 10])->take(3)->get();
            foreach ($subProducts as $subProduct)
                OfferProduct::factory()->create([
                    'offer_id' => $product->id,
                    'sub_product_id' => $subProduct->id
                ]);
        });
    }
}
