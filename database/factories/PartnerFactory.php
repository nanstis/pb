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
            'email' => fake()->unique()->companyEmail,
            'state' => fake()->citySuffix,
            'city' => fake()->city,
            'zip' => intval(fake()->postcode),
            'address' => fake()->streetAddress,
            'phone' => fake()->phoneNumber,
            'slogan' => fake()->sentence,
            'summary' => fake()->paragraph,
            'description' => fake()->paragraph,
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
