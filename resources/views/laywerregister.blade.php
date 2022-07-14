@extends('indexheader')
@section('indexbody')
<div class="container-fluid ">
    <div class=" pt-8">
        <div class="text-center pt-8  pb-2">
            <h1 class="mb-4 text-primary">Lawyer Sign Up</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="/lawyeraction" method="post">
                        @csrf
                        <div class="col-sm-12 control-group">
                            <input type="text" class="form-control p-4" name="name" placeholder="Your Name" required="required" data-validation-required-message="Name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-12 control-group">
                            <input type="email" class="form-control p-4" email="email" placeholder="Your Email" required="required" data-validation-required-message="Email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-12 control-group">
                            <input type="text" class="form-control p-4" name="phno" placeholder="Phone Number" required="required" data-validation-required-message="Mobile Number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-12 control-group">
                            <input type="text" class="form-control p-4" rows="6" name="enrollno" placeholder="Enrollment Number" required="required" data-validation-required-message="Enrollment Number">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-12 control-group">
                            <input type="text" class="form-control p-4" rows="6" name="username" placeholder="Username" required="required" data-validation-required-message="Username">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-12  control-group">
                            <input type="text" class="form-control p-4" rows="6" name="password" placeholder="Password" required="required" data-validation-required-message="Password">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="pb-5">
                            <button class=" btn btn-primary btn-block" type="submit">SignUp</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-5  mb-lg-0">
                <img src="/img/lawyer.jpg" class="pt-5" height="400px" width="700px" alt="">
            </div>
        </div>
    </div>
</div>
@endsection