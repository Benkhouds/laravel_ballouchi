<?php

namespace Database\Factories;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CartItem::class;


    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition() : array
    {

            return [
                'cart_id'=> 1,
                'product_id'=>$this->faker->numberBetween(1,50) ,
                'quantity'=>random_int(1,6)
            ];
    }
}
