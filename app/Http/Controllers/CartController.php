<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        
    }
    public function show(){
        
        dd(auth()->id());
        // $cart = Cart::whereRaw(sql: 'userId = ?',bindings: array());
        // return response($cart);
    }
}
