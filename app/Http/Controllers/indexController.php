<?php

namespace App\Http\Controllers;

use App\Models\advocate;
use App\Models\userregistration;
use App\Models\service;

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
        $data['result'] = service::get();
        return view('services', $data);
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
    public function useraction(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phno = $req->input('phno');
        $adhaarnumber = $req->input('adhaarnumber');
        $username = $req->input('username');
        $password = $req->input('password');
        $data = [
            'name' => $name,
            'email' => $email,
            'phno' => $phno,
            'adhaarnumber' => $adhaarnumber,
            'username' => $username,
            'password' => $password
        ];
        userregistration::insert($data);
        return redirect('/userlogin');
    }
    public function lawyeraction(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phno = $req->input('phno');
        $enrollno = $req->input('enrollno');
        $username = $req->input('username');
        $password = $req->input('password');
        $data = [
            'name' => $name,
            'email' => $email,
            'phno' => $phno,
            'enrollno' => $enrollno,
            'username' => $username,
            'password' => $password
        ];
        advocate::insert($data);
        return redirect('/lawyerlogin');
    }
    public function userloginaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $data = userregistration::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/userindex');
        } else {
            return redirect('/userlogin');
        }
    }
    public function lawyerloginaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $data = advocate::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sess' => $data->id));
            return redirect('advocateindex');
        } else {
            return redirect('/lawyerlogin');
        }
    }
    public function logout()
    {
        return redirect('/');
    }
}
