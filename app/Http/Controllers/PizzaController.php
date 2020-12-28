<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Pizza;
use App\Cart;
use App\User;

class PizzaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view ('addpizza');
    }
    public function showPizza(){
        $pizzas = Pizza::all();

        return view('home')->with('pizzas',$pizzas);
    }
    public function showDetail($id){
        $pizzas = Pizza::where('id',$id)->first();
        $userid = Auth::user();
        // $users = User::where('userid',$userid)->first();
        // $pizzas = Pizza::all();
        return view('pizzadetail',['pizza'=>$pizzas, 'user' => $userid]);
        
    }
    // public function deleteDetail($id){
    //     $pizzas = Pizza::where('id',$id)->first();
    //     $pizza->delete();
    //     return redirect('/home');
        
    // }
    public function deleteDetail(Request $request){
        // $pizzas = Pizza::where('id',$id)->first();
        // dd($request);
        $pizza = Pizza::find($request->id);
        $pizza->delete();
        return redirect('/home');
        
    }
    public function toDelete($id){
        $pizzas = Pizza::where('id',$id)->first();
        return view('pizzadelete',['pizza'=>$pizzas]);
        
    }
    public function updateDetail(Request $request){

        $request->validate([
            'pizza_name' => 'required|between:0,20',
            'pizza_price' => 'required|between:0,999999',
            'pizza_description'=> 'required|min:20|max:999999',
            'pizza_image'=>'required'
        ]);
       
        $pizza = Pizza::find($request->id);

        $pizza->pizza_name = $request->pizza_name;
        $pizza->pizza_price = $request->pizza_price;
        $pizza->pizza_description = $request->pizza_description;
        $pizza->pizza_image = $request->pizza_image;
        $path = Storage::putFile('public/images/pizza', $request->file('pizza_image'));
        $filename = basename($path);
        $pizza->pizza_image = $filename;
        $pizza->save();
        return redirect('/home');
        
    }
    public function toUpdate($id){
        $pizzas = Pizza::where('id',$id)->first();
        return view('pizzaupdate',['pizza'=>$pizzas]);
        
    }
    public function insert(Request $request){

        $request->validate([
            'pizza_name' => 'required|between:0,20',
            'pizza_price' => 'required|between:0,999999',
            'pizza_description'=> 'required|min:20|max:999999',
            'pizza_image'=>'required'
        ]);

        $pizza = new Pizza();
        $pizza->pizza_name = $request->pizza_name;
        $pizza->pizza_price = $request->pizza_price;
        $pizza->pizza_description = $request->pizza_description;
        $pizza->pizza_image = $request->pizza_image;
        $path = Storage::putFile('public/images/pizza', $request->file('pizza_image'));
        $filename = basename($path);
        $pizza->pizza_image = $filename;
        $pizza->save();
        return redirect('/home');
        
        dd($pizza);

    }
    
    public function buyPizza(Request $request){
        $total = 0;
        $cart = new Cart();
        $userid = Auth::user()->id;
        $pizzas = Pizza::where('id',$request)->first();
        // $pizzas = Pizza::all();
        // $pizzaprice = Pizza::where('pizza_price', $request)->first();
        $cart->pizza_quantity = $request->pizza_quantity;
        $cart->user_id = $userid;
        $cart->pizza_id = $request->pizza_id;
        // $total = $total + $request->pizza_price * $request->pizza_quantity;
        $cart->cart_price = $request->pizza_price * $request->pizza_quantity;
        printf("%s",$request->pizza_quantity );
        // printf("%s",$pizzas );

        $cart->save();
        return redirect('/home');
        
        dd($cart);

    }
}
