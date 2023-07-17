<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Faker\Factory as Faker;
class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        User::create([
            'name'=>'abc',
            'email' => 'abc@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name'=>'cde',
            'email' => 'cde@gmail.com',
            'password' => 'cde',
        ]);

    }
}
