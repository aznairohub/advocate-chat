@extends('user.indexheader')
@section('userbody')
<div class="bradcam_area">
    <div class="bradcam_inner bradcam_bg d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Finest And Strongest Law <br>
                            Firm Win The World</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->
<!-- practice_area_start -->
<div class="practice_area practice_area2">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @foreach($services as $value)
            <div class="col-xl-4 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img src="img/practice/1.png" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>{{$value->service_name}}</h3>
                            <p>{{$value->service_descrption}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                                <form action="/requestlawaction" method="post">
                                    @csrf
                                    <div class="row pt-3">
                                        <div class="col-sm-12 ">
                                        <p class="text-warning">Subject</p>
                                            <select name="subject" id="" class="form-control">
                                                <option value="" default>Select one</option>
                                                @foreach($services as $value)
                                                <option value="{{$value->service_name}}">{{$value->service_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-12 pt-3 control-group">
                                            <p class=" text-warning">Case discription</p>
                                            <textarea class="form-control " name="issue" rows="10" value=""> </textarea>
                                        </div>
                                        <div class="p-4">
                                            <button class=" btn btn-warning btn-block btn-xl" type="submit">
                                                request
                                            </button>
                                        </div>
                                    </div>
                                </form>
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