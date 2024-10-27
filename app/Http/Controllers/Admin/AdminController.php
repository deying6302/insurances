<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() // :GET
    {
        return view('admin.pages.index');
    }

    public function logout() // :GET
    {
        Auth::guard('admin')->logout();
        toastr()->success('Đăng xuất khỏi trang quản trị thành công');
        return redirect()->route('admin.getLogin');
    }
}
