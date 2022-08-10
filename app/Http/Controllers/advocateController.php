<?php

namespace App\Http\Controllers;

use App\Models\advocate;
use App\Models\userregistration;
use App\Models\service;
use Illuminate\Http\Request;
use App\Models\advocaterequest;
use App\Models\caserequest;
use App\Models\casestatus;

class advocateController extends Controller
{
   public function index()
   {
      return view('advocate.index');
   }
   public function viewcaserequest()
   {
      $id = session('sess');
      $data['request'] = caserequest::where('advocateid', $id)->get();
      return view('advocate.viewcaserequest', $data);
   }

   public function request()
   {
      $id = session('sess');
      $data['request'] = advocaterequest::join('userregistrations', 'userregistrations.id', '=', 'advocaterequests.userid')
         ->where('advocaterequests.advocateid', $id)
         ->select('userregistrations.name', 'advocaterequests.userid', 'advocaterequests.subject', 'advocaterequests.issue', 'advocaterequests.status', 'advocaterequests.id')
         ->get();
      return view('advocate.request', $data);
   }

   public function viewapprovedcase()
   {
      $id = session('sess');
      $data['cases'] = casestatus::where('advocateid', $id)->get();
      return view('advocate.viewapprovedcase', $data);
   }
   public function viewprofile()
   {
      $id = session('sess');
      $data['result'] = advocate::where('id', $id)->get();
      return view('advocate.viewprofile', $data);
   }
   public function advocateprofileaction(Request $req, $id)
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
      advocate::where('id', $id)->update($data);
      return redirect('/viewprofile');
   }
   public function caserequestapprove($id)
   {
      $advocateid = session('sess');
      $data = [
         'status' => "approve",
         'advocateid' => $advocateid
      ];
      caserequest::where('id', $id)->update($data);
      $userid = caserequest::where('id', $id)->value('userid');
      $data1 = [
         'advocateid' => $advocateid,
         'userid' => $userid,
         'caseid' => $id,
         'requesttype' => "law",
         'status' => "advocate admitted",
      ];
      casestatus::insert($data1);
      return redirect('/viewcaserequest');
   }
   public function caserequestdecline($id)
   {
      $advocateid = session('sess');
      $data = [
         'status' => "decline",
         'advocateid' => $advocateid
      ];
      caserequest::where('id', $id)->update($data);
      return redirect('/viewcaserequest');
   }
   public function requestapprove($id)
   {
      $advocateid = session('sess');
      $data = [
         'status' => "approve"
      ];
      advocaterequest::where('id', $id)->update($data);
      $userid = advocaterequest::where('id', $id)->value('userid');
      $data1 = [
         'advocateid' => $advocateid,
         'userid' => $userid,
         'caseid' => $id,
         'requesttype' => "advocate",
         'status' => "advocate admitted",
      ];
      casestatus::insert($data1);
      return redirect('/request');
   }
   public function requestdecline($id)
   {
      $data = [
         'status' => "decline"
      ];
      advocaterequest::where('id', $id)->update($data);
      return redirect('/request');
   }
   public function update($id)
   {
      $data['status'] = casestatus::where('id', $id)->get();
      return view('advocate.update', $data);
   }
   public function updateaction(Request $req, $id)
   {
      $status = $req->input('status');
      $data = [
         'status' => $status
      ];
      casestatus::where('id', $id)->update($data);
      return redirect('/viewapprovedcase');
   }
   
}
