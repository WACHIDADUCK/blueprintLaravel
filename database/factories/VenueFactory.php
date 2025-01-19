<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Venue;

class VenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'descruption' => $this->faker->text(),
            'date_start' => $this->faker->dateTime(),
            'date_end' => $this->faker->dateTime(),
            'status' => $this->faker->word(),
            'region' => $this->faker->word(),
            'seeds' => $this->faker->word(),
        ];
    }
}
