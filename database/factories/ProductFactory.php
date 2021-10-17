<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*subcategory in seeders*/
            /*isbn*/
            'label'=>$this->faker->sentence(2),
            'description'=>$this->faker->paragraphs(3),
            'price'=>$this->faker->randomNumber(),
            'inventory'=>$this->faker->randomNumber(3),
            'image'=>$this->faker->url()
        ];
    }
}
