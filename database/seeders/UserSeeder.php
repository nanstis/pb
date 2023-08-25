<?php

namespace Database\Seeders;

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
    }
}
