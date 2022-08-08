<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function add_order($user_id)
    {
        
        $carts = Cart::where('user_id',$user_id)->get();
        
        foreach ($carts as $cart) {
            $order = new Order();
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->quantity = $cart->quantity;
            $order->save();
           
        }
        foreach ($carts as $cart) {
           
            $cart->delete();
        }
        $order_add = Order::where('user_id' , $user_id)->get();
        return $order_add;
    }
}
