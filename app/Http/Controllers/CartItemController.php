<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CartItemController extends Controller
{
    public function store(Cart $cart, Request $request)
    {

        // ddd((auth()->user()->cart->id));
        // ddd(auth()->user()->cart);


        // $request->validate(['cart' => 'required']);
        $cart->cartItems()->create([
            'cart_id' => auth()->user()->cart,
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
        ]);
    }
}
