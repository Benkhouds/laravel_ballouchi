<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\order;

class Address extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function order(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {

        return  $this->belongsTo(order::class);
    }
}
