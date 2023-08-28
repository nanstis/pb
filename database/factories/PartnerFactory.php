<?php

namespace Database\Factories;

use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Partner>
 */
class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->company,
            'state' => fake()->citySuffix,
            'address' => fake()->streetAddress,
            'phone' => fake()->phoneNumber,
            'slogan' => fake()->realText,
            'summary' => fake()->realText,
            'description' => fake()->realText,
            'french' => fake()->boolean,
            'english' => fake()->boolean,
            'german' => fake()->boolean,
            'italian' => fake()->boolean,
            'other' => fake()->boolean,
            'website' => fake()->url,
            'facebook' => fake()->url,
            'twitter' => fake()->url,
            'instagram' => fake()->url,
            'linkedin' => fake()->url,
            'youtube' => fake()->url,
            'vimeo' => fake()->url,
        ];
    }
}
