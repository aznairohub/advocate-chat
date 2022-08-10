<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Advocate Chat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
 <!-- <style> 
           html, body {
                background-color: #fff;
                color: #636;
                font-weight: 100;
                height: 100px;
                margin: 10px;
            }
        </style>  -->
        <!-- <scri t> -->
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 bg-secondary d-none d-lg-block">
                <a href="/adminindex" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h3 class="m-0 display-4 text-primary ">Advocate Chat</h3>
                </a>
            </div>
            <div class="col-lg-7">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-5">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>advocatechat@info.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-4">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91 789 345 6789</small>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/services" class="nav-item nav-link">Services</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SignUp</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="/laywerregister" class="dropdown-item">Lawyer</a>
                                    <a href="/userregister" class="dropdown-item">User</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SignIn</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="/userlogin" class="dropdown-item">User SignIn</a>
                                    <a href="/lawyerlogin" class="dropdown-item">Lawyer</a>
                                </div>
                            </div>
                        </div>
                        <h1><i class='fa fa-legal text-primary fa-spin'></i></h1>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    @yield('indexbody')


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white  px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-2">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">Cochin Kerala</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">advocatechat@info.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+91 789 345 6789</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <footer>
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="col-sm-3 footer-widget">
                                        <h4>Matrimonial</h4>
                                        
                                    </div>
                                    <div class="col-sm-3 footer-widget">
                                        <h4>Civil/Property</h4>
                                    </div>
                                    <div class="col-sm-3 footer-widget">
                                        <h4>Civil/Debt</h4>
                                        
                                    </div>
                                    <div class="col-sm-3 footer-widget">
                                        <h4>Other</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
<script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        introMessage: "✋ Hi! I'm form ItSolutionStuff.com"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> -->

</html>