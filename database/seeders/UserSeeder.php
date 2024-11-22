<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([[
            'name' => 'Udin',
            'email' => 'admin@gamil.com',
            'password' => bcrypt('12345678')
        ], [

            'name' => 'susi',
            'email' => 'admin@gamil.com',
            'password' => bcrypt('12345678')
        ]]);
    }
}
