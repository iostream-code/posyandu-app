<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\IbuHamilSeeder;
use Database\Seeders\ImunisasiSeeder;
use Database\Seeders\TimbanganSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ImunisasiSeeder::class,
            TimbanganSeeder::class,
            IbuHamilSeeder::class,
        ]);
    }
}
