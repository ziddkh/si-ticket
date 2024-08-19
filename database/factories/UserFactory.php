<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Region;
use App\Models\City;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'gender' => $this->faker->word(),
            'identification_number' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber(),
            'emergency_name' => $this->faker->word(),
            'emergency_phone_number' => $this->faker->word(),
            'city_id' => City::factory(),
            'region_id' => Region::factory(),
        ];
    }
}
