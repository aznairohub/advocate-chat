@extends('indexheader')
@section('indexbody')
<!-- Page Header Start -->
<div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 text-white text-uppercase">Services</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Services</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="text-uppercase text-primary">MATRIMONIAL</h1>
            </div>
            <div class="col-lg-9 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 200px;"></div>
                <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                    @foreach($result as $value)
                    @if($value->type=="MATRIMONIAL")
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                            <i class="fa fa-2x fa-landmark"></i>
                        </div>
                        <h5 class="mb-4 px-4 text-primary">{{$value->service_name}}</h5>
                        <p class="m-0 text-primary">{{$value->service_descrption}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="text-uppercase text-primary">CIVIL/PROPERTY</h1>
            </div>
            <div class="col-lg-9 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 200px;"></div>
                <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                    @foreach($result as $value)
                    @if($value->type=="CIVIL/PROPERTY")
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                            <i class="fa fa-2x fa-landmark"></i>
                        </div>
                        <h5 class="mb-4 px-4 text-primary">{{$value->service_name}}</h5>
                        <p class="m-0 text-primary">{{$value->service_descrption}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="text-uppercase text-primary">CIVIL/DEBT</h1>
            </div>
            <div class="col-lg-9 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 200px;"></div>
                <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                    @foreach($result as $value)
                    @if($value->type=="CIVIL/DEBT")
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                            <i class="fa fa-2x fa-landmark"></i>
                        </div>
                        <h5 class="mb-4 px-4 text-primary">{{$value->service_name}}</h5>
                        <p class="m-0 text-primary">{{$value->service_descrption}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="text-uppercase text-primary">OTHERS</h1>
            </div>
            <div class="col-lg-9 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 200px;"></div>
                <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                    @foreach($result as $value)
                    @if($value->type=="OTHERS")
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                            <i class="fa fa-2x fa-landmark"></i>
                        </div>
                        <h5 class="mb-4 px-4 text-primary">{{$value->service_name}}</h5>
                        <p class="m-0 text-primary">{{$value->service_descrption}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>




@endsection