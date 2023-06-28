<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Imunisasi;
use App\Models\Timbangan;
use App\Models\IbuHamil;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            Imunisasi::class,
            Timbangan::class,
            IbuHamil::class,
        ]);
    }
}
