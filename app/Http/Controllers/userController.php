<?php

namespace App\Http\Controllers;

use App\Models\advocate;
use App\Models\userregistration;
use App\Models\service;
use App\Models\advocaterequest;
use App\Models\caserequest;
use App\Models\casestatus;
use Illuminate\Http\Request;

class userController extends Controller
{
  public function index()
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    return view('user.index', $data);
  }
  public function profile()
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    return view('user.profile', $data);
  }
  public function userprofileaction(Request $req, $id)
  {
    $name = $req->input('name');
    $email = $req->input('email');
    $phno = $req->input('phno');
    $username = $req->input('username');
    $password = $req->input('password');
    $data = [
      'name' => $name,
      'email' => $email,
      'phno' => $phno,
      'username' => $username,
      'password' => $password
    ];
    userregistration::where('id', $id)->update($data);
    return redirect('/userprofile');
  }
  public function viewadvocates()
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    $data['advocate'] = advocate::get();
    return view('user.viewadvocates', $data);
  }
  public function services()
  {
    $id = session('sess');
    $data['services'] = service::get();
    $data['result'] = userregistration::where('id', $id)->get();
    return view('user.viewservices', $data);
  }
  public function viewcases()
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    $data['cases']=casestatus::where('userid',$id)->get();
    return view('user.viewcase', $data);
  }
  public function applycase()
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    return view('user.applycase', $data);
  }
  public function requestadvocate($aid)
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    $data['advocate'] = advocate::where('id', $aid)->get();
    return view('user.requestadvocate', $data);
  }
  public function requestlawaction(Request $req)
  {
    $id = session('sess');
    $subject = $req->input('subject');
    $issue = $req->input('issue');
    $data = [
      'userid' => $id,
      'subject' => $subject,
      'issue' => $issue

    ];
    caserequest::insert($data);
    return redirect('/user/viewcases');
  }
  public function requestadvocateaction(Request $req, $id)
  {
    $userid = session('sess');
    $subject = $req->input('subject');
    $issue = $req->input('issue');
    $data = [
      'advocateid' => $id,
      'userid' => $userid,
      'subject' => $subject,
      'issue' => $issue
    ];
    advocaterequest::insert($data);
    return redirect('/user/viewcases');
  }
  public function viewstatus()
  {
    $id = session('sess');
    $data['result'] = userregistration::where('id', $id)->get();
    $data['advocaterequest'] = advocaterequest::where('userid', $id)->get();
    $data['caserequest'] = caserequest::where('userid', $id)->get();
    return view('user.viewstatus', $data);
  }
  public function resend($id)
  {
    $data = [
      'status' => "request resend"
    ];
    advocaterequest::where('id', $id)->update($data);
    return redirect('/user/viewstatus');
  }
  public function lawresend($id)
  {
    $data = [
      'status' => "request resend"
    ];
    caserequest::where('id', $id)->update($data);
    return redirect('/user/viewstatus');
  }
  public function viewadvocate($id)
  {
    $userid = session('sess');
    $data['result'] = userregistration::where('id', $userid)->get();
    if ($id == 0) {
      return redirect('/user/viewstatus');
    } else {
      $data['advocate']=advocate::where('id',$id)->get();
      return view('user.viewadvocate',$data);
    } 
  }
  public function viewcasestatus($id, $type)
   {
    $userid = session('sess');
    $data['result'] = userregistration::where('id', $userid)->get();
      if ($type == "law") {
         $data['case'] = caserequest::where('id', $id)->get();
      } else {
         $data['case'] = advocaterequest::where('id', $id)->get();
      }
      return view('user.caseview',$data);
   }
   
  
}