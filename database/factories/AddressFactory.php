<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
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
    public function definition(): array
    {
        return [
            'region'=> $this->faker->word(),
            'city'=> $this->faker->city(),
            'street'=> $this->faker->streetName(),
            'postal_code'=> $this->faker->postcode(),
        ];
    }
}
