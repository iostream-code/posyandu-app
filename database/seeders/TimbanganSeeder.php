<?php

namespace Database\Seeders;

use App\Models\Timbangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimbanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => '4',
                'nama' => 'Yogananda',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '4',
                'nama' => 'Yogananda',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '4',
                'nama' => 'Yogananda',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '5',
                'nama' => 'Rina Aditama',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '6',
                'nama' => 'Adryan Kusuma',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '6',
                'nama' => 'Adryan Kusuma',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
            [
                'user_id' => '6',
                'nama' => 'Adryan Kusuma',
                'tanggal_lahir' => '2022-09-17',
                'umur' => '12',
                'nama_orangtua' => 'Maryati Nur',
                'lingkar_kepala' => '20',
                'tinggi_badan' => '23',
                'berat_badan' => '30',
                'tanggal_periksa' => '2023-05-12'
            ],
        ];

        Timbangan::insert($data);
    }
}
