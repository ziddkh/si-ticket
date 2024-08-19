<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'short_name' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'banner' => $this->faker->word(),
            'total_ticket' => $this->faker->word(),
            'maximum_user_redemption' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
