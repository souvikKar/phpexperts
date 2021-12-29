<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="{{ asset('frontend/assets/css/font-awesome/css/all.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/aos.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/main.css?ver=1.2.0') }}" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
   <!-- header part  -->
     @include('layouts.body.header')
   <!--  -->
   </body>


    <!-- Body Part -->
    @yield('home_content')
    <!--  -->


      <!-- footer part  -->
      @include('layouts.body.footer')
   <!--  -->
    
    <script src="{{ asset('frontend/assets/scripts/bootstrap.bundle.min.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('frontend/assets/scripts/aos.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('frontend/assets/scripts/main.js?ver=1.2.0') }}"></script>
  </body>
</html>