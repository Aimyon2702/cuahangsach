<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
class CategoryController extends Controller
{
    
    public function index()
    {
        $data = Category::orderBy('id','DESC')->search()->paginate(20);
        return view('admin.category.index',compact('data'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    
    public function store(StoreRequest $request)
    {
        
        if(Category::create($request->all())){
            return redirect()->route('category.index')->with('success','Thêm mới danh mục thành công');
        }
    }

    
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
       
        $category->update($request->only('name','prioty','status'));
        return redirect()->route('category.index')->with('success','Cập nhật danh mục thành công');
    }

    
    public function destroy(Category  $category)
    {
        if($category->products()->count() > 0){
            return redirect()->route('category.index')->with('error','Không thể xoá danh mục này');
        }else{
            $category->delete();
            return redirect()->route('category.index')->with('success','Xoá danh mục thành công');
        }
        
    }
}
