<?php

namespace App\Http\Controllers;
use App\Models\advocate;
use App\Models\userregistration;
use App\Models\service;
use App\Models\admin;
use App\Models\advocaterequest;
use App\Models\caserequest;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
    public function viewuser()
    {
        $data['result']=userregistration::get();
        return view('admin.viewuser',$data);
    }
    public function viewadvocate()
    {
        $data['result']=advocate::get();
        return view('admin.viewadvocate',$data);
    }
    public function adminprofile()
    {
        $data['admin']=admin::get();
        return view('admin.adminprofile',$data);
    }
    public function viewservices()
    {
        $data['result']=service::get();
        return view('admin.services',$data);
    }
    public function editservice($id)
    {
        $data['result']=service::where('id',$id)->get();
        return view('admin.editservices',$data);
    }
    public function deleteservices($id)
    {
        // return view('admin.adminprofile');
    }
    public function viewcases()
    {
        return view('admin.viewcases');
    }
    public function userapprove($id)
    {
        $data=[
            'status'=>"approved"
        ];
        userregistration::where('id',$id)->update($data);
        return redirect('/admin/viewuser');
    }
    public function userdecline($id)
    {
        $data=[
            'status'=>"declined"
        ];
        userregistration::where('id',$id)->update($data);
        return redirect('/admin/viewuser');
    }
    public function advocateapprove($id)
    {
        $data=[
            'status'=>"approved"
        ];
        advocate::where('id',$id)->update($data);
        return redirect('/admin/viewadvocate');
    }
    public function advocatedecline($id)
    {
        $data=[
            'status'=>"declined"
        ];
        advocate::where('id',$id)->update($data);
        return redirect('/admin/viewadvocate');
    }
    public function serviceaction(Request $req)
    {
        $service_name=$req->input('service_name');
        $type=$req->input('type');
        $service_descrption=$req->input('service_descrption');
        $status=$req->input('status');

        $data=[
            'service_name'=>$service_name,
            'type'=>$type,
            'service_descrption'=>$service_descrption,
            'status'=>$status
        ];
        service::insert($data);
        return redirect('/viewservices');
    }
    public function editserviceaction(Request $req,$id)
    {
        $service_name=$req->input('service_name');
        $type=$req->input('type');
        $service_descrption=$req->input('service_descrption');
        $status=$req->input('status');

        $data=[
            'service_name'=>$service_name,
            'type'=>$type,
            'service_descrption'=>$service_descrption,
            'status'=>$status
        ];
        service::where('id',$id)->update($data);
        return redirect('/viewservices');
    }
    public function adminprofileaction(Request $req)
    {
        $username=$req->input('username');
        $password=$req->input('password');
        $data=[
            'username'=>$username,
            'password'=>$password
        ];
        admin::where('id','1')->update($data);
        return redirect('/adminprofile');
    }
    
    
}
