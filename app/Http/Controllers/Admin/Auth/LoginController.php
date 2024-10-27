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
        $credentials = [
            'email' => $request->email,
            'password' => $request->login['password']
        ];

        $remember_me = $request->filled('remember_me');

        if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
            toastr()->success('Chào mừng bạn đến trang quản trị viên');
            return redirect()->route('admin.dashboard');
        } else {
            toastr()->warning('Bạn nhập sai thông tin email & mật khẩu');
            return redirect()->back();
        }
    }
}
