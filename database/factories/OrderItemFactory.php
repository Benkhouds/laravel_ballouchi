<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>ProductFactory::class,
            'quantity'=>$this->faker->randomNumber(1)
        ];
    }
}
