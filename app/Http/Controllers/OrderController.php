<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function index(Order $order){
        if (!empty($order->orderItems)) {
            return response()->json($order->load('user', 'address', 'orderItems'));
        }

    }
}
