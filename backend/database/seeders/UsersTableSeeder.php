<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Customer Profile
        User::factory()->create([
            'email' => 'ameer@gmail.com',
            'password' => '12345678',
            'name' => 'ameer',
            'role' => User::ROLE_CUSTOMER,
        ]);

        // Delivery Person Profile
        User::factory()->create([
            'email' => 'qusai@gmail.com',
            'password' => '12345678',
            'name' => 'qusai',
            'role' => User::ROLE_DELIVERY_PERSON,
        ]);

        User::factory(10)->create();
    }
}
