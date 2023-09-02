<?php

namespace Database\Seeders;

use App\Models\AdvertCategory;
use App\Models\AdvertCategoryChild;
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
                $categoryId = rand(1, 6);
                $categoryChildId = rand(1, 4);

                AdvertCategory::factory([
                    'category_id' => $categoryId,
                ])->for($ad)->create();

                AdvertCategoryChild::factory([
                    'category_child_id' => $categoryChildId,
                ])->for($ad)->create();
            });


    }
}
