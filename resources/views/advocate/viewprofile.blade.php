@extends('advocate.advocateindexheader')
@section('indexbody')
<div>
    <div class="container">
        <div class="row pt-4">

            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <center>
                    <h2 class="text-light bg-primary p-4">My Profile</h2>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 20px">

            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="padding-top: 20px;width:100%">
                    @foreach($result as $value)
                    <form action="/advocateprofileaction/{{$value->id}}" method="post">
                        @csrf
                        <div class="row pt-3">
                            <div class="col-sm-12">
                                <p class=" text-primary">Name</p>
                                <input type="text" class="form-control " name="name" value="{{$value->name}}">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-sm-12 ">
                                <p class=" text-primary">Phone Number</p>
                                <input type="text" class="form-control " name="phno" value="{{$value->phno}}">
                            </div>
                            <div class="col-sm-12 pt-3 control-group">
                                <p class=" text-primary">Email</p>
                                <input type="email" class="form-control " name="email" value="{{$value->email}}">
                            </div>
                            <div class="col-sm-12 pt-3 control-group">
                                <p class=" text-primary">Username</p>
                                <input type="text" class="form-control" name="username" value="{{$value->username}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pt-3 control-group">
                                <p class=" text-primary">Password</p>
                                <input type="text" class="form-control " name="password" value="{{$value->password}}">
                            </div>
                        </div>
                        <div class="p-4">
                            <button class=" btn btn-primary btn-block" type="submit">Edit</button>
                        </div>
                    </form>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection