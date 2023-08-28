<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        Advertisement::factory()
            ->count(10)->forEachSequence()
            ->for(Partner::factory());

        Partner::factory()->create([
            'user_id' => 1,
            'name' => 'alphomega',
        ]);
    }
}
