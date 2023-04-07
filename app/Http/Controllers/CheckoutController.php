<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    

    public function form()
    {
        return view('checkout');
    }

    public function success()
    {
        return view('checkout_success');
    }

    public function submit_form(Request $req, Cart $cart)
    {
        $c_id = Auth::guard('cus')->user()->id;

        if ($order = Order::create([
            'name' => $req->name,
            'address' =>$req->address,
            'phone' => $req->phone,
            'email' => $req->email,
            'customer_id' => $c_id,
            'note' => $req->note
        ])) {
            $order_id = $order->id;

            foreach ($cart->items as $product_id => $item) {
                $quantity = $item['quantity'];
                $price = $item['price'];
                
                OrderDetail::create([
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                    'price' => $price
                ]);
            }

            session(['cart' => '']);
            return redirect()->route('checkout.success')->with('success', 'Đặt hàng thành công');
        }else{
            return redirect()->back()->with('error', 'Đặt hàng không thành công');
        }
    }
}
