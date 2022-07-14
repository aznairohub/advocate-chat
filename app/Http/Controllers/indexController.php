<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function laywerregister()
    {
        return view('laywerregister');
    }
    public function userregister()
    {
        return view('userregister');
    }
    public function lawyerlogin()
    {
        return view('lawyerlogin');
    }
    public function userlogin()
    {
        return view('userlogin');
    }
}
