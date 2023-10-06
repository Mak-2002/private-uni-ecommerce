<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryOrder>
 */
class DeliveryOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'user_name' => 'ameer',
            'phone' => '0912345678',
            'address' => 'G1',
            'delivery_user_id' => null,
            'status' => 1,
            'placement_date' => now(),
            'pick_up_date' => null,
            'delivery_date' => null,
            'notes' => 'Without Ketchup',
            'total_cost' => 10000 + config('variables.delivery_cost'),
            'delivery_cost' => config('variables.delivery_cost'),
        ];
    }
}
