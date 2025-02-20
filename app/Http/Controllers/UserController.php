<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }

    public function account_dashboard()
    {
        return view("admin.index");
    }
}
