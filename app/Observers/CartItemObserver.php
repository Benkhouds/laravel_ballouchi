<?php

namespace App\Observers;

use App\Models\CartItem;

class CartItemObserver
{

    /**
     * @throws \Throwable
     */
    public function created(CartItem $cartItem) : void
    {
        if (isset($cartItem->product, $cartItem->quantity)) {
            $subtotal = $cartItem->product->price  * $cartItem->quantity ;
            $cartItem->cart()->increment('total',  $subtotal);
        }
        else{
            try {
                $cartItem->deleteOrFail();
            } catch (\Throwable $e) {
                throw $e ;
            }
        }
    }
    /**
     * @throws \Throwable
     */
    public function updated(CartItem $cartItem) : void
    {
        ddd($cartItem->getOriginal("quantity"));
    }

    /**
     * Handle the CartItem "deleted" event.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return void
     */
    public function deleted(CartItem $cartItem)
    {
        ddd($cartItem->getOriginal("quantity"), $cartItem->product->price);
    }

}
