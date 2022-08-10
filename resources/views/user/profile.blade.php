@extends('user.indexheader')
@section('userbody')
<div>
    <div class="container">
        <div class="row pt-4">
            <div class="col-sm-12">
                <center>
                    <h2 class="text-light bg-warning p-4">My Profile</h2>
                </center>
            </div>
        </div>
        <div class="row" style="padding-top: 20px">
            <div class="col-sm-6" style="padding-top: 20px">
                <img src="./user/img/banner/court.png" height="500px" width="100%" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <center>
                       @foreach($result as $value)
                       <form action="/userprofileaction/{{$value->id}}" method="post">
                            @csrf
                            <div class="row pt-3">
                                <div class="col-sm-12">
                                    <p class=" text-warning">Name</p>
                                    <input type="text" class="form-control " name="name" value="{{$value->name}}">
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm-12 ">
                                    <p class=" text-warning">Phone Number</p>
                                    <input type="text" class="form-control " name="phno" value="{{$value->phno}}">
                                </div>
                                <div class="col-sm-12 pt-3 control-group">
                                    <p class=" text-warning">Email</p>
                                    <input type="email" class="form-control " name="email" value="{{$value->email}}">
                                </div>
                                <div class="col-sm-12 pt-3 control-group">
                                    <p class=" text-warning">Username</p>
                                    <input type="text" class="form-control" name="username" value="{{$value->username}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 pt-3 control-group">
                                    <p class=" text-warning">Password</p>
                                    <input type="text" class="form-control " name="password" value="{{$value->password}}">
                                </div>
                            </div>
                            <div class="p-4">
                                <button class=" btn btn-warning btn-block" type="submit">Edit</button>
                            </div>
                        </form>
                       @endforeach
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection