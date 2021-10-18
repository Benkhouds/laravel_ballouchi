<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function address(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        // return  $this->belongsTo(Address::class);
        return  $this->hasOne(Address::class);
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo //access order from user
    {
        return $this->belongsTo(User::class);
    }
    public function orderItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
