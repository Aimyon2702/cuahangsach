<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Customer;


class AdminController extends Controller
{
    public function dashboard()
    {
        $product_count = Product::count();
        $category_count = Category::count();
        $order_count = Order::count();
        $cus_count = Customer::count();
        $orders = Order::orderBy('id','DESC')->get();
        return view('admin.dashboard',compact('product_count','order_count','cus_count','orders','category_count'));
    }
    
}
    