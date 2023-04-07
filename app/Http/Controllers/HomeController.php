<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
       
        $new_product = Product::where('status',1)->limit(8)->orderBy('id','DESC')->get();
        $all_product = Product::where('status',1)->orderBy('id','DESC')->get();
        $sale = Product::where('sale_price','>',0)->orderBy('id','DESC')->get();
        $product_recommend = Product::Latest('views_count','DESC')->take(5)->get();
        return view('home',compact('new_product','sale','product_recommend','all_product'));
    }

    public function category($id)
    {
        $category = Category::where('id',$id)->first();
        $product = Product::where('category_id',$category->id)->get();
        return view('category',['cats'=>$category],compact('product'));
    }

    public function product_detail($id)
    {
        $product_recommend = Product::Latest('views_count','DESC')->take(5)->get();
        $category = Category::where('id',$id)->first();
        $pro = Product::find($id);
        return view('product-detail',['cats'=>$category],compact('pro','product_recommend'));
    }

    public function login()
    {
        return view('login');
    }
}
