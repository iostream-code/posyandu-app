<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataWarga = [
            [
                'user_id' => '2',
                'NIK' => '357804876758880',
                'tanggal_lahir' => '1974-09-25',
                'no_telp' => '087677544142',
                'alamat' => 'Lidah Wetan Gg. 5',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'user_id' => '3',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1964-07-19',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'user_id' => '3',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1972-09-05',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'user_id' => '4',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1970-12-23',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
            [
                'user_id' => '5',
                'NIK' => '3578040709090003',
                'tanggal_lahir' => '1969-02-20',
                'no_telp' => '087677544142',
                'alamat' => 'Dsn. Ngariboyo',
                'pekerjaan' => 'Ibu Rumah Tangga',
            ],
        ];

        Warga::insert($dataWarga);
    }
}
