<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(Request $request) // :GET
    {
        if ($request->ajax()) {

        }

        return view('admin.pages.hospital.index');
    }
}
