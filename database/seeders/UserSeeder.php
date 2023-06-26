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
                'name' => 'Ketua Kader',
                'email' => 'superAdmin@gmail.com',
                'password' => Hash::make('super000'),
                'role' => 'Super',
            ],
            [
                'name' => 'Kader 1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Kader 2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin234'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Bu Maryati',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('users123'),
                'role' => 'User',
            ],
            [
                'name' => 'Bu Hendra',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('users234'),
                'role' => 'User',
            ],
            [
                'name' => 'Mbak Ery',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('users345'),
                'role' => 'User',
            ],
            [
                'name' => 'Bu Aisyah',
                'email' => 'user4@gmail.com',
                'password' => Hash::make('users456'),
                'role' => 'User',
            ],
            [
                'name' => 'Mbak Rani',
                'email' => 'user5@gmail.com',
                'password' => Hash::make('users567'),
                'role' => 'User',
            ],
        ];

        User::insert($users);
    }
}
