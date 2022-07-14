@extends('indexheader')
@section('indexbody')

<div class="container">
    <div class="row">
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class=" p-4 p-md-12">
                <div class="d-flex">
                    <div class="w-100">
                        <center><h1 class="mb-4 text-primary">Lawyer Sign In</h1></center>
                    </div>
                </div>
                <form action="#" class="signin-form">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="label" for="name">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" required="">
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" required="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                    </div>
                </form>
                <p class="text-center">Not a member? <a data-toggle="tab" href="/lawyerregister">Sign Up</a></p>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</div>
@endsection



