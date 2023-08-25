<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            PlanSeeder::class,
            UserSeeder::class,
            PartnerSeeder::class,
            StateSeeder::class,
        ]);
    }
}
