<?php

namespace Database\Factories;

use App\Models\DeliveryOrder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null,
            'product_id' => fake()->numberBetween(1, 7),
            'quantity' => fake()->numberBetween(1, 10),
            'delivery_order_id' => DeliveryOrder::factory(),
        ];
    }
}
