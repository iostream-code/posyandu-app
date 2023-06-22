<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ],
            [
                'name' => 'Bu Maryati',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('users123'),
                'is_admin' => false,
            ],
            [
                'name' => 'Bu Hendra',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('users234'),
                'is_admin' => false,
            ],
            [
                'name' => 'Mbak Ery',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('users345'),
                'is_admin' => false,
            ],
            [
                'name' => 'Bu Aisyah',
                'email' => 'user4@gmail.com',
                'password' => Hash::make('users456'),    
                'is_admin' => false,
            ],
            [
                'name' => 'Mbak Rani',
                'email' => 'user5@gmail.com',
                'password' => Hash::make('users567'),
                'is_admin' => false,
            ],
        ];

        User::insert($users);
    }
}
