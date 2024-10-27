<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() // :GET
    {
        return view('frontend.pages.index');
    }
}
