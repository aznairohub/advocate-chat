<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\advocate;
use App\Models\userregistration;

class advocatechatController extends Controller
{
    public function advocateRegistration(Request $req)
    {
        $data = new advocate;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phno=$req->phno;
        $data->enrollno=$req->enrollno;
        $data->username=$req->username;
        $data->password=$req->password;
        $result=$data->save();
        if($result)
        {
            return [
                "result"=>"data has been saved"
            ];
        }

    }
    public function clientRegistration(Request $req)
    {
        $data = new userregistration();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phno=$req->phno;
        $data->adhaarnumber=$req->adhaarnumber;
        $data->username=$req->username;
        $data->password=$req->password;
        $result=$data->save();
        if($result)
        {
            return [
                "result"=>"data has been saved"
            ];
        }

    }
    public function editclientprofile(Request $req)
    {
        $data = userregistration::find($req->id);
        $data->name=$req->name;
        // if($data->name=="")
        $data->email=$req->email;
        $data->phno=$req->phno;
        $data->username=$req->username;
        $data->password=$req->password;
        $result=$data->save();
        if($result)
        {
            return [
                "result"=>"data updated"
            ];
        }
    }
    public function adminviewadvocate()
    {
        
    }
    public function adminviewclientprofile()
    {
        return userregistration::all();






        
    }

}
