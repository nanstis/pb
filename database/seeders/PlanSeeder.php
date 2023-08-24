<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{

    public function run(): void
    {
        // Standard
        DB::table('plans')->insert([
            'name' => 'standard',
            'photos' => 5,
            'video' => 1,
            'direct' => 1,
            'price' => 300,
        ]);

        DB::table('plan_options')->insert([
            'plan_id' => 1,
            'categories_count' => 1,
            'sub_categories_count' => 1,
            'group' => 1,
        ]);

        // Premium
        DB::table('plans')->insert([
            'name' => 'premium',
            'photos' => 10,
            'video' => 0,
            'direct' => 1,
            'price' => 500,
        ]);

        DB::table('plan_options')->insert([
            'plan_id' => 2,
            'categories_count' => 1,
            'sub_categories_count' => 2,
            'group' => 1,
        ]);

        DB::table('plan_options')->insert([
            'plan_id' => 2,
            'categories_count' => 2,
            'sub_categories_count' => 1,
            'group' => 1,
        ]);

        // Exclusive
        DB::table('plans')->insert([
            'name' => 'exclusive',
            'photos' => 15,
            'video' => 0,
            'direct' => 1,
            'price' => 950,
        ]);

        DB::table('plan_options')->insert([
            'plan_id' => 3,
            'categories_count' => 1,
            'sub_categories_count' => 3,
            'group' => 2,
        ]);

        DB::table('plan_options')->insert([
            'plan_id' => 3,
            'categories_count' => 3,
            'sub_categories_count' => 1,
            'group' => 2,
        ]);
    }
}
