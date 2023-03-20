<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEO;
use App\Models\Member;

class AuthController extends Controller
{
    public function login()
    {
        SEO::setTitle("Đăng nhập");
        return view('frontend.pages.members.auth.login');
    }

    public function postLogin(Request $request)
    {
        session()->forget('auth_otp');
        session()->forget('token_auth');
        $filed = request()->input('user_name');
        $fieldType = filter_var($filed, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
        $credentials = [
            $fieldType => $request->input('user_name'),
            'password' => $request->input('password'),
            'status' => Member::STATUS_ACTIVE,
        ];
        if (\Auth::guard('member')->attempt($credentials)) {
            return redirect('/');
        }else {
            return redirect()->back()->withInput()->withErrors(['Sai mật khẩu, tài khoản hoặc tài khoản của bạn bị khóa.']);
        }
        
    }

    public function register()
    {
        SEO::setTitle("Đăng ký tài khoản");
        return view('frontend.pages.members.auth.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'user_name' => 'required|unique:members,user_name',
            'email' => 'required|unique:members,email',
            'password' => 'min:6|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ],[
            'user_name.required' => 'Tên tài khoản không được bỏ trống.',
            'user_name.unique' => 'Tên tài khoản đã tồn tại.',
            'email.unique' => 'Email đã tồn tại.',
            'email.required' => 'Email không được bỏ trống.',
            'password.required' => 'Mật khẩu được bỏ trống.',
            'password.password_confirmation' => 'Hai mật khẩu không khớp nhau.',
        ]);

        $member = Member::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'status' => 1,
            'account_balance' => 0
        ]);
        \Auth::guard('member')->loginUsingId($member->id);
        return redirect('/')->with(['toastr' => 'Đăng ký thành công.']);
    }

    public function logout()
    {
        \Auth::guard('member')->logout();
        return redirect('/');
    }

}