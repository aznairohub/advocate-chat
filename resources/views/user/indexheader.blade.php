<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>USER|ADVOCATE CAHT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/user/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS here -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/css/magnific-popup.css">
    <link rel="stylesheet" href="/user/css/font-awesome.min.css">
    <link rel="stylesheet" href="/user/css/themify-icons.css">
    <link rel="stylesheet" href="/user/css/nice-select.css">
    <link rel="stylesheet" href="/user/css/flaticon.css">
    <link rel="stylesheet" href="/user/css/flaticon.css">
    <link rel="stylesheet" href="/user/css/gijgo.css">
    <link rel="stylesheet" href="/user/css/slicknav.css">
    <link rel="stylesheet" href="/user/css/style.css">
    <link rel="stylesheet" href="/user/css/responsive.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/userindex">
                                    <center>
                                        <h3 class="text-light">Advocate Chat</h3>
                                    </center>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="main-menu text-warning d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><i class="fa fa-home"></i><a class="active" href="/userindex">home</a></li>
                                        <li><i class="fa fa-user"></i><a class="active" href="/userprofile">Profile</a></li>
                                        <li><i class="fa fa-gavel"></i><a class="active" href="#">Case<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/user/viewadvocates">View Advocates</a></li>
                                                <li><a href="/user/services">View and RequestLaws</a></li>
                                                <li><a href="/user/viewcases">View Admitted Case Status</a></li>
                                                <li><a href="/user/viewstatus">View Case Status</a></li>
                                            </ul>
                                        </li>
                                        <li><i class="fa fa-sign-out "></i><a class="active" href="/logout">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                            <div class="social_media_links">
                                <ul>
                                    <li class="text-warning">
                                        @foreach($result as $value)
                                        <h5 class="text-warning text-uppercase"><i class="fa fa-user"></i> Welcome {{$value->name}}</h5>
                                        @endforeach

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('userbody')
    <!-- JS here -->
    <script src="/user/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/user/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/user/js/popper.min.js"></script>
    <script src="/user/js/bootstrap.min.js"></script>
    <script src="/user/js/owl.carousel.min.js"></script>
    <script src="/user/js/isotope.pkgd.min.js"></script>
    <script src="/user/js/ajax-form.js"></script>
    <script src="/user/js/waypoints.min.js"></script>
    <script src="/user/js/jquery.counterup.min.js"></script>
    <script src="/user/js/imagesloaded.pkgd.min.js"></script>
    <script src="/user/js/scrollIt.js"></script>
    <script src="/user/js/jquery.scrollUp.min.js"></script>
    <script src="/user/js/wow.min.js"></script>
    <script src="/user/js/nice-select.min.js"></script>
    <script src="/user/js/gijgo.min.js"></script>
    <script src="/user/js/jquery.slicknav.min.js"></script>
    <script src="/user/js/jquery.magnific-popup.min.js"></script>
    <script src="/user/js/plugins.js"></script>

    <!--contact js-->
    <script src="/user/js/contact.js"></script>
    <script src="/user/js/jquery.ajaxchimp.min.js"></script>
    <script src="/user/js/jquery.form.js"></script>
    <script src="/user/js/jquery.validate.min.js"></script>
    <script src="/user/js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            // disableDaysOfWeek: [0, 0],
            //     icons: {
            //      rightIcon: '<span class="fa fa-caret-down"></span>'
            //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
        var timepicker = $('#timepicker').timepicker({
            format: 'HH.MM'
        });
    </script>
</body>

</html>