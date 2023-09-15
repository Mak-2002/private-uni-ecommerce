<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "المنظفات",
            "المحمصة",
            "البهارات",
            "أدوات المنزل",
            "الشوكولا",
            "الزيت والسمن",
            "القهوة والشاي",
            "الحلويات",
            "الخضروات",
            "الألبان والأجبان",
            "العصائر والمياه",
            "الخبز والمعجنات",
            "المعلبات",
            "المناديل",
            "الحبوب",
            "اللحوم",
            "الأدوات الكهربائية"
        ];
        foreach ($categories as $category)
            Category::factory()->create([
                'name' => $category
            ]);
    }
}
