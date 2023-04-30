<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => 'Max',
            'email' => 'max@gmail.com',
            'password' => bcrypt('12345678'),
        ])->create();
    }
}
