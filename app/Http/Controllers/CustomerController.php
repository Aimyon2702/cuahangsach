<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
    public function login(){
        return  view('customer.login');
    }

    public function post_login(Request $request){
        $request->validate([  

            'email'=>'required|email',
            'password'=>'required',          
        ],[         
            'email.required' => 'Email không được để trống',
            'password.required' => 'Mật khẩu không được để trống',          
        ]);
        $login = Auth::guard('cus')->attempt($request->only('email','password'),$request->has('remember'));
        if($login) {
            return redirect()->route('home.index')->with('success','Đăng nhập thành công');
        }
        return redirect()->back()->with('error','Đăng nhập thất bại');
    }

    public function profile(){
        return  view('customer.profile');
    }

    public function change_password(){
        return  view('customer.change_password');
    }

    public function order(){
        return  view('customer.order');
    }

    public function register(){
        return  view('customer.register');
    }

    public function post_register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customer',
            'phone'=>'required|unique:customer',
            'address'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ],[
            'name.required' => 'Họ tên không được để trống',           
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email này đã tồn tại',             
            'phone.required' => 'Số điện thoại không được để trống',           
            'phone.unique' => 'Số điện thoại này đã được sử dụng',           
            'address.required' => 'Địa chỉ không được để trống',           
            'password.required' => 'Mật khẩu không được để trống',           
            'confirm_password.required' => 'Mật khẩu nhập lại không được để trống',
            'confirm_password.same' => 'Mật khẩu nhập lại không chính xác'

        ]);
        $request->merge(['password'=> bcrypt($request->password)]);
        $reg = Customer::create($request->all());

        if($reg) {
            return redirect()->route('customer.login')->with('success','Đăng ký thành công');
        }
        return redirect()->back()->with('error','Đăng ký thất bại');
    }
public function logout(){
    Auth::guard('cus')->logout();
    return redirect()->route('customer.login')->with('success','Đã đăng xuất');
}

}


