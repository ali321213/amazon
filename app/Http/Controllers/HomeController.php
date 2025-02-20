<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminIndex()
    {
        return view('Admin.index');
    }

    public function webIndex()
    {
        return view('website.index');
    }
}