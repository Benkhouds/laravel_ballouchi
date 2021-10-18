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
     * @throws \Exception
     */
    public function run() : void
    {
        $id=0 ;
        while($id<10){
            $arr = range(1,50);
            $max =49 ;
            $i=0;
            while($i<7){
                $x = random_int(0,$max);
                CartItem::factory()->create([
                    'cart_id'=>$id+1 ,
                    'product_id'=>$arr[$x]
                ]);
                array_splice($arr, $x ,1);
                $i++;
                $max--;
            }
            $id++ ;
        }


    }
}
