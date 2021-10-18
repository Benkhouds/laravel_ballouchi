<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {

        CartItem::factory()->count(7)->create();
        CartItem::factory()->count(5)->create(['cart_id'=>2]);
        CartItem::factory()->count(3)->create(['cart_id'=>3]);
        CartItem::factory()->count(10)->create(['cart_id'=>4]);
        CartItem::factory()->count(4)->create(['cart_id'=>5]);
        CartItem::factory()->count(8)->create(['cart_id'=>6]);
        CartItem::factory()->count(9)->create(['cart_id'=>7]);
        CartItem::factory()->count(2)->create(['cart_id'=>8]);
        CartItem::factory()->count(12)->create(['cart_id'=>9]);
        CartItem::factory()->count(6)->create(['cart_id'=>10]);
    }
}
