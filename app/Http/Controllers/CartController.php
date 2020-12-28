<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Pizza;

class CartController extends Controller
{
    public function showCart(){
        $carts = Cart::all();
        // $pizzaid = 
        // $carts = Pizza::with('Carts')->get();
        // $cart->$pizza_id = $pizzaid;
        
        return view('viewcart',['cart'=>$carts]);
    }
    public function updateCart(Request $request){
       
        $cart = Cart::find($request->id);
        $pizzas = Pizza::where('id',$request)->first();
        $cart->pizza_quantity = $request->pizza_quantity;
        $cart->cart_price = $cart->pizzas->pizza_price * $request->pizza_quantity;
        $cart->save();
        return redirect('/viewcart');
        
    }
    public function deleteCart(Request $request){
        $cart = Cart::find($request->id);
        $cart->delete();
        return redirect('/viewcart');
        
    }
    public function checkout(){
        // $pizzas = Pizza::where('id',$id)->first();
        // dd($request);
        $cart = Cart::truncate();
        
        return redirect('/home');
        
    }
}
