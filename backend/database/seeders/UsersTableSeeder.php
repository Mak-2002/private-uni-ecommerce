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
        User::factory()->create([
            'email'=>'ameer@gmail.com',
            'password'=>'12345678',
            'name' => 'ameer',
        ]);
        User::factory(10)->create();
    }
}
