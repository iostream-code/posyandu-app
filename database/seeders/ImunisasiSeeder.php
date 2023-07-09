<?php

namespace Database\Seeders;

use App\Models\Imunisasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => '4',
                'nama' => 'Yogananda Putera',
                'tanggal_lahir' => '2022-09-17',
                'jenis_imunisasi' => 'Polio',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '4',
                'nama' => 'Yogananda Putera',
                'tanggal_lahir' => '2022-09-17',
                'jenis_imunisasi' => 'BCG',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '4',
                'nama' => 'Yogananda Putera',
                'tanggal_lahir' => '2022-09-17',
                'jenis_imunisasi' => 'Campak',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'Polio',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'BCG',
                'tanggal_imunisasi' => '2023-09-17'
            ],

            [
                'user_id' => '6',
                'nama' => 'Adryan Kusuma',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'Polio',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '6',
                'nama' => 'Adryan',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'BCG',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '6',
                'nama' => 'Adryan',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'Campak',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '6',
                'nama' => 'Adryan',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'Cacing',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '7',
                'nama' => 'Aisyah Julia',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'BCG',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '7',
                'nama' => 'Aisyah Julia',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'Campak',
                'tanggal_imunisasi' => '2023-09-17'
            ],
            [
                'user_id' => '7',
                'nama' => 'Aisyah Julia',
                'tanggal_lahir' => '2022-07-27',
                'jenis_imunisasi' => 'Cacing',
                'tanggal_imunisasi' => '2023-09-17'
            ],
        ];

        Imunisasi::insert($data);
    }
}
