<!DOCTYPE html>
<html lang="zxx">  
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Datatrix Soft - Software Company in Bangladesh</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        {{-- <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div> --}}
        <!--Preloader area End here--> 
     
        <!-- Main content Start -->
        <div class="main-content">
            
            @yield('base.content')

        </div> 
        <!-- Main content End -->
     

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->


         <!-- modernizr js -->
        <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('assets/js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script> 
         <!-- counter top js -->
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>   
        <!-- particles js -->
        <script src="{{ asset('assets/js/particles.min.js') }}"></script>  
        <!-- magnific popup js -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <!-- pointer js -->
        <script src="{{ asset('assets/js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

</html>