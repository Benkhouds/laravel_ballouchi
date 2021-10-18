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
     * @throws \Exception
     */
    public function definition()
    {
        return [
            /*subcategory in seeders*/
            /*isbn*/
            'subcategory_id'=> random_int(1,20),
            'label'=>$this->faker->sentence(2),
            'description'=>$this->faker->paragraph(6),
            'price'=>$this->faker->randomNumber(3),
            'inventory'=>$this->faker->randomNumber(3),
            'image'=>$this->faker->url()
        ];
    }
}
