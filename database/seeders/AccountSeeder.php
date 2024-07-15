<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::insert([
            [
                'username' => 'icikiwir Production',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user'),
                'role' => 'user',
            ],
            [
                'username' => 'icikiwir Production1',
                'email' => 'adminbiasa@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'username' => 'icikiwir Production2',
                'email' => 'admingacor@gmail.com',
                'password' => Hash::make('adminjago'),
                'role' => 'superAdmin',
            ],
        ]);
    }
}
