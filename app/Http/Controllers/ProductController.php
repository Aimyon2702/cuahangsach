<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $data = Product::orderBy('id','DESC')->search()->paginate(20);
        return view('admin.product.index',compact('data'));
    }

   
    public function create()
    {
        $cats = Category::orderBy('name','ASC')-> select('id','name')->get();
        return view ('admin.product.create',compact('cats'));
    }

   
    public function store(Request $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'product.'.$ext;
            $file-> move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        if(Product::create($request->all())){
            return redirect()->route('product.index')->with('success','Thêm mới sản phẩm thành công');
        }
    }

    
    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        $cats = Category::orderBy('name','ASC')-> select('id','name')->get();
        
        return view ('admin.product.edit',compact('product','cats'));
    }

   
    public function update(Request $request, Product $product)
    { 
        $product->update($request->all());
        return redirect()->route('product.index')->with('success','Cập nhật sản phẩm thành công');
    }

   
    public function destroy(Product $product)
    {
        if($product->details->count() > 0){
            return redirect()->route('product.index')->with('error','Không thể xoá sản phẩm này, đang có trong đơn hàng');
        }else{
            $product->delete();
            return redirect()->route('product.index')->with('success','Xoá sản phẩm thành công');
        }
    }
}
