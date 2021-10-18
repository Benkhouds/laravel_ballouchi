<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CartController extends Controller
{

    public function index(){

        $cart=null;
        if(auth()->user()){
            $cart = Cart::with('cartItems', 'cartItems.product')->where('user_id', auth()->user()->getAuthIdentifier())->first();
        }
        return view('cart',['cart'=>$cart]);
    }
   public function store(Request $request) {

       $product = Product::find($request->input('product_id'));

       $attributes = $request->validate([
           'quantity'=>"required|min:1|max:{$product->inventory}|numeric",
       ]);
       $cartId = Cart::where('user_id', auth()->user()->id)->first()->id;
       $item = CartItem::create(['cart_id'=>$cartId,'product_id'=>$product->id , 'quantity'=>$attributes['quantity'] ]);
       ddd($item);


   }
}
