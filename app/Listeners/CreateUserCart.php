<?php

namespace App\Listeners;

use App\Models\Cart;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserCart
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Registered $event) : void
    {
        //TODO: create empty cart with user id

        Cart::create(['user_id'=>$event->user->id, 'total'=>0]);
    }
}
