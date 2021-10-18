<?php

namespace App\Providers;

use App\Listeners\CreateUserCart;
use App\Models\CartItem;
use App\Observers\CartItemObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            CreateUserCart::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot() : void
    {
        CartItem::observe(CartItemObserver::class);
    }
}
