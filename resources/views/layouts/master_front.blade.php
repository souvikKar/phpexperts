<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PHP Experts’ QuickStarter </title>
      <link rel="icon" type="image/x-icon" href="{{ asset('frontend/dist/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('frontend/dist/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/dist/css/owl.theme.default.min.css') }}">
      <link href="{{ asset('frontend/dist/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('frontend/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/dist/css/theme.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/dist/css/responsive.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="all" href="{{ asset('frontend/dist/css/stellarnav.css') }}">
   </head>
   <body>
      
    <!-- header part  -->
     @include('layouts.front.header')
   <!--  -->

    <!-- Body Part -->
    @yield('front_content')
    <!--  -->
     

       <!-- footer part  -->
      @include('layouts.front.footer')
      <!--  -->

      {{-- <script type='text/javascript' src="{{ asset('frontend/dist/js/jquery.js') }}"></script> --}}
      <script src="{{ asset('frontend/dist/js/popper.min.js') }}"></script>
      <script src="{{ asset('frontend/dist/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('frontend/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('frontend/dist/js/stellarnav.min.js') }}"></script>
      <script src="{{ asset('frontend/dist/js/owl.carousel.min.js') }}"></script>
      
      <script type="text/javascript">
       

          $('.f_carousel').owlCarousel({
         loop:true,
         nav:false,
         dots:false,
         margin:50,
         responsive:{
         0:{
         items:2
         },
         600:{
         items:2
         },
         1000:{
         items:4
         }
         }
         });
         
         $('.owl-carousel').owlCarousel({
         loop:true,
         nav:true,
         dots:false,
         margin:10,
          navText : ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
         responsive:{
         0:{
         items:1
         },
         600:{
         items:1
         },
         1000:{
         items:1
         }
         }
         });
         
         
         
      </script>
      <script src="{{ asset('frontend/dist/js/main.js') }}"></script>
   </body>
</html>