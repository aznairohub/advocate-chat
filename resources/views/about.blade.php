@extends('indexheader')
@section('indexbody')
<!-- Page Header Start -->
<div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">25 Years Experience</h2>
                    <h1 class="text-uppercase text-primary">Learn About Us</h6>
                    <h1 class="mb-4 text-primary">We Provide Reliable And Effective Legal Services</h1>
                    <p class="text-primary">We understand our client’s perspective and the need to provide responsive legal advice with integrity, 
                        accountability, and consistency. Our clientele belongs to various sectors of industry, 
                        public sector bodies and people from across the country. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase text-primary">Our Features</h6>
                        <h1 class="mb-4 text-primary">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-light m-0 ">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-primary">Best Law Practices</h5>
                                <p class="m-0 text-primary">A Law degree has so much value in India. Around the world, an advocate is considered an esteemed position in society. Even in India, a law degree comes with many doors opened. 
                                    But, to be an acclaimed advocate there has to be more done than pursuing a degree. A law degree is not confined just to the courtroom sessions, it gives many options for students after they graduate.
                                     It is important to choose the right career path.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-light  m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-primary">Efficiency & Trust</h5>
                                <p class="m-0 text-primary">Trust leads to efficiency in any system. Why do I say this? Because trust increases honest and open communication, which promotes</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-light m-0 ">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-primary">Results You Deserve</h5>
                                <p class="m-0 text-primary"> it is essential to visit a doctor as soon as possible. 
                                    This will ensure you are treated for any injuries received as a result of the car crash, 
                                    and document this for your insurance claims. 
                                    It will help the doctor to know the situation and what happened during the accident, 
                                    so they can identify anything that could be a result of the crash.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection