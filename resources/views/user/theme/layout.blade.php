<!DOCTYPE html>
<html lang="en">
    <head>
    @include('user.theme.head')
    </head>
    <body class="cnt-home">
    @include('user.theme.header')
    @yield('content')
        
    @include('user.theme.footer')	
    @yield('scripts')
    @include('user.page.scripts.scripts_cart')
        <script src="{!! asset('frontend\assets\js\jquery-1.11.1.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\bootstrap.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\bootstrap-hover-dropdown.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\owl.carousel.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\echo.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\jquery.easing-1.3.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\bootstrap-slider.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\jquery.rateit.min.js') !!}"></script> 
        <script type="text/javascript" src="{!! asset('frontend\assets\js\lightbox.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\bootstrap-select.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\wow.min.js') !!}"></script> 
        <script src="{!! asset('frontend\assets\js\scripts.js') !!}"></script>

        <!-- JavaScript Alertifyjs-->

  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    </body>
</html>