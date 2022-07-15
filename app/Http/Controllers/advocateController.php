<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class advocateController extends Controller
{
    public function index()
    {
       return view('advocate.index');
    }

  
}
