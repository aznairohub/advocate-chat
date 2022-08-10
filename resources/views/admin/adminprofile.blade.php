@extends('admin.indexheader')
@section('adminindex')
<div class="container" style="padding:bottom-75px;">
    <section class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 100px;">
                <!-- left column -->
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Admin profile</h3>
                        </div>
                        @foreach($admin as $value)
                        <form action="/adminprofileaction" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="{{$value->username}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password" value="{{$value->password}}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-dark btn-block ">Edit</button>
                                <button type="submit" class="btn btn-dark btn-block ">Cancel</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection