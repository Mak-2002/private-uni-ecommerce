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

        // Add product suggestions to occasions
        for ($i = 1; $i < 4; $i++) {
            OccasionProduct::create([
                'occasion_id' => 1,
                'product_id' => $i,
            ]);
            OccasionProduct::create([
                'occasion_id' => 2,
                'product_id' => $i + 3,
            ]);
        }
    }
}
