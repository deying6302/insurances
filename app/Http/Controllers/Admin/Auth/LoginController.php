<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin() // :GET
    {
        // $logoIcon = Frontend::where('data_key', 'logo_icon.data')->first();
        // $logoIcon = $logoIcon ? json_decode($logoIcon->data_value) : null;
        return view('admin.auth.index');
    }

    public function postLogin(Request $request) // :POST
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $remember_me = $request->filled('remember_me');

        if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
            toastr()->success('Chào mừng bạn đến trang quản trị viên');
            return redirect()->route('admin.dashboard');
        } else {
            toastr()->warning('Bạn nhập sai thông tin email hoặc mật khẩu');
            return redirect()->back()->withInput();
        }
    }
}
