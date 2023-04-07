<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('cus');
    }

    public function view(){
        return view('cart');
    }

    public function add(Cart $cart,$id){
        $product = Product::find($id);
        $cart->add($product); 
        return redirect()->back();

    }

    public function remove(Cart $cart,$id){
        $cart->remove($id); 
        return redirect()->back();

    }

    public function update(Cart $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->update($id,$quantity); 
        return redirect()->back();

    }

    public function clear(Cart $cart){
        $cart->clear(); 
        return redirect()->back();

    }
}
