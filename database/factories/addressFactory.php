<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class addressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'region' => $this->faker->word(),
            'city' => $this->faker->city(),
            'postal_code' => $this->faker->numberBetween(1000, 4000),
            'street' => $this->faker->streetAddress(),


        ];
    }
}
