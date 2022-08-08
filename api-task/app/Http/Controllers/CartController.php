<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function get_user_cart($user_id)
    {
        $carts = Cart::where('user_id' , $user_id)->get();
        return $carts;

    }

    public function add_product(Request $request)
    {
        $add_cart = new Cart();
        $add_cart->product_id  = $request->product_id;
        $add_cart->user_id   = $request->user_id ;
        $add_cart->quantity  = $request->quantity;

        $add_cart->save();

        $carts = Cart::where('user_id',$request->user_id)->get();
        return $carts;
    }

    public function update_product($id , Request $request)
    {

        $update_cart = Cart::where('product_id' , $id)->first();
        $update_cart->quantity  = $request->quantity;
        $update_cart->update();

        $carts = Cart::where('user_id',$request->user_id)->get();
        return $update_cart;
    }

    public function delete_product($id , Request $request)
    {
       
        $delete_cart = Cart::find($id);
        $deleted = $delete_cart;
        $delete_cart->delete();

        $carts = Cart::where('user_id',$request->user_id)->get();
        return $deleted;
    }
}
