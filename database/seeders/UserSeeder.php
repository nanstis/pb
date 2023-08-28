<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()->withPersonalTeam()->create([
            'name' => 'Nicholas',
            'email' => 'bleyo@alphomega.org',
            'password' => bcrypt('password'),
        ])->save();

        User::factory()->withPersonalTeam()
            ->count(10)
            ->has(Partner::factory()
                ->count(2)
                ->has(Advertisement::factory(), 'advertisement'),
                'partners')
            ->create();
    }
}
