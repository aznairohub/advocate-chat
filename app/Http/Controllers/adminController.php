<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
    public function viewuser()
    {
        return view('admin.viewuser');
    }
    public function viewadvocate()
    {
        return view('admin.viewadvocate');
    }
    public function adminprofile()
    {
        return view('admin.adminprofile');
    }
}
