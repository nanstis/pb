<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        Partner::factory()
            ->count(10)
            ->create();

        Partner::factory()->create([
            'user_id' => 1,
        ]);
    }
}
