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
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1972-09-05',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Kader 1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1970-12-23',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Kader 2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin234'),
                'role' => 'Admin',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1969-02-20',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Bu Maryati',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('users123'),
                'role' => 'User',
                'NIK' => '121212121212',
                'tanggal_lahir' => '1979-09-25',
                'no_telp' => '08080880800',
                'alamat' => 'Lidah Wetan Gg. 5',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Bu Hendra',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('users234'),
                'role' => 'User',
                'NIK' => '121212121212',
                'tanggal_lahir' => '1979-09-25',
                'no_telp' => '08080880800',
                'alamat' => 'Lidah Wetan Gg. 5',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Mbak Ery',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('users345'),
                'role' => 'User',
                'NIK' => '121212121212',
                'tanggal_lahir' => '1979-09-25',
                'no_telp' => '08080880800',
                'alamat' => 'Lidah Wetan Gg. 5',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Bu Aisyah',
                'email' => 'user4@gmail.com',
                'password' => Hash::make('users456'),
                'role' => 'User',
                'NIK' => '357804876758880',
                'tanggal_lahir' => '1974-09-25',
                'no_telp' => '087677544142',
                'alamat' => 'Lidah Wetan Gg. 5',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'name' => 'Mbak Rani',
                'email' => 'user5@gmail.com',
                'password' => Hash::make('users567'),
                'role' => 'User',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1964-07-19',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
        ];

        User::insert($users);
    }
}
