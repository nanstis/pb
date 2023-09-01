<?php

namespace Database\Seeders;

use App\Models\AdvertCategory;
use App\Models\Advertisement;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()->withPersonalTeam()
            ->has(Partner::factory()
                ->count(2)
                ->has(Advertisement::factory(), 'advertisement'),
                'partners')
            ->create([
                'name' => 'Nicholas',
                'email' => 'bleyo@alphomega.org',
                'password' => bcrypt('password'),
            ]);

        $this->createAdvertisements();
    }

    private function createAdvertisements(): void
    {
        Advertisement::factory()
            ->count(20)
            ->create()->each(function (Advertisement $ad) {
                AdvertCategory::factory([
                    'category_id' => rand(1, 5),
                ])->for($ad)->create();
            });


    }
}
