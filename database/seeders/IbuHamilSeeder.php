<?php

namespace Database\Seeders;

use App\Models\IbuHamil;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IbuHamilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => '4',
                'nama' => 'Maryati',
                'kehamilan_ke' => '2',
                'umur_kehamilan' => '5',
                'golongan_darah' => 'AB',
                'tinggi_badan' => '168',
                'berat_badan' => '68',
                'tanggal_periksa' => '2023-09-20'
            ],
            [
                'user_id' => '5',
                'nama' => 'Ari Nur Cahyani',
                'kehamilan_ke' => '1',
                'umur_kehamilan' => '3',
                'golongan_darah' => 'A',
                'tinggi_badan' => '168',
                'berat_badan' => '68',
                'tanggal_periksa' => '2023-09-20'
            ],
            [
                'user_id' => '5',
                'nama' => 'Ari Nur Cahyani',
                'kehamilan_ke' => '2',
                'umur_kehamilan' => '3',
                'golongan_darah' => 'A',
                'tinggi_badan' => '168',
                'berat_badan' => '65',
                'tanggal_periksa' => '2023-09-20'
            ],
            [
                'user_id' => '6',
                'nama' => 'Ery Karmila',
                'kehamilan_ke' => '1',
                'umur_kehamilan' => '3',
                'golongan_darah' => 'B',
                'tinggi_badan' => '168',
                'berat_badan' => '68',
                'tanggal_periksa' => '2023-09-20'
            ],
        ];

        IbuHamil::insert($data);
    }
}
