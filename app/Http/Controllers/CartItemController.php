<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;


class CartItemController extends Controller
{
    public function store( Request $request)
    {

    //ddd((auth()->user()->cart->id));
     $cart=   auth()->user()->cart;
        //ddd($cart);

        // $request->validate(['cart' => 'required']);
       $cartItem = CartItem::create([
           'cart_id' => $cart->id,
           'product_id' => $request->input('product_id'),
           'quantity' => $request->input('quantity'),
       ]);
    }
}
