@extends('user.indexheader')
@section('userbody')
<!-- slider_area_start -->
<div class="slider_area ">
    <div class="slider_area_inner slider_bg_1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="single_slider">
                        <div class="slider_text text-warning">
                            <h3 class="">High Quality Law <br>
                                Advice and Support</h3>
                            <p class="">Leading Polish Advocates in your city</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div>
        <div class="container">
            <div class="row pt-4">
                <div class="col-sm-12">
                    <center>
                        <h2 class="text-light bg-warning p-4">Request</h2>
                    </center>
                </div>
            </div>
            <div class="container">
                <div class="row" style="padding-top: 20px">

                    <div class="col-sm-6">
                        <div class="row">
                            <center>
                                @foreach($advocate as $value)
                                <form action="/requestadvocateaction/{{$value->id}}" method="post">
                                    @csrf
                                    <div class="row pt-3">
                                        <div class="col-sm-12 ">
                                            <center>
                                                <h2>
                                                    <p class=" text-warning">Advocate:
                                                        <b class="text-dark"> {{$value->name}}</b>
                                                    </p>
                                                </h2>
                                            </center>
                                        </div>
                                        <div class="col-sm-12 ">
                                            <p class=" text-warning">Subject</p>
                                            <input type="text" class="form-control " name="subject" value="">
                                        </div>
                                        <div class="col-sm-12 pt-3 control-group">
                                            <p class=" text-warning">Issue</p>
                                            <textarea class="form-control " name="issue" rows="10"> </textarea>
                                        </div>
                                        <div class="p-4">
                                            <button class=" btn btn-warning btn-block btn-xl" type="submit">
                                                request
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="/user/img/banner/request.jpg" alt="azna" height="500px" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection