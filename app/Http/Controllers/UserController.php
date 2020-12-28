<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function showUser(){
        $users = User::all();

        return view('viewuser')->with('users',$users);
    }
    public function showTrans(){
        $users = User::all();
        // $pizzas = Pizza::all();
        return view('usertransaction')->with('users',$users);
        
    }

    
}
