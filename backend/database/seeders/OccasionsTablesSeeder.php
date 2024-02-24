<?php

namespace Database\Seeders;

use App\Models\Occasion;
use App\Models\OccasionProduct;
use Illuminate\Database\Seeder;

class OccasionsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Occasions
        $occasions = [
            'حفل تخرج',
            'حفلة عيد ميلاد',
        ];
        foreach ($occasions as $occasionName)
            Occasion::create([
                'name' => $occasionName,
            ]);

        $graduationCeremonyProducts = [
            1, 2, 3, 7, 60, 74
        ];

        $birthdayPartyProducts = [
            4, 5, 6, 8, 9, 11, 77, 60, 74, 58, 55, 54
        ];

        // Add product suggestions to occasions
        foreach ($graduationCeremonyProducts as $productId)
            OccasionProduct::create([
                'occasion_id' => 1,
                'product_id' => $productId,
            ]);
        foreach ($birthdayPartyProducts as $productId)
            OccasionProduct::create([
                'occasion_id' => 2,
                'product_id' => $productId,
            ]);
    }
}
