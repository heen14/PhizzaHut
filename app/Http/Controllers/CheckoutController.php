<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Pizza;
use App\Checkout;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CheckoutController extends Controller
{
    public function checkout(Request $request){

        $chk = new Checkout();
        $cart = Cart::truncate();
        $userid = Auth::user()->id;
        $chk->user_id = $userid;
        $chk->date = now();
        $chk->save();
        return redirect('/home');
        

    }
    public function viewchk(){
        $chk = Checkout::all();
        return view('checkout')->with('chk',$chk);
    }
}
