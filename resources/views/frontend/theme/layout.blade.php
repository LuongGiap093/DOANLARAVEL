<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.theme.head')
</head>
<body class="cnt-home" style="background-color: #f3f3f3;">
@include('frontend.theme.header')
@yield('content')

@include('frontend.theme.footer')
@yield('scripts')
@include('frontend.page.scripts.cart')

<!-- jQuery plugins/scripts - start -->
<script src="{!! asset('public\user\assets\js/jquery-1.11.2.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/jquery.bxslider.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/fancybox/fancybox.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/fancybox/helpers/jquery.fancybox-thumbs.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/jquery.flexslider-min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/swiper.jquery.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/jquery.waypoints.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/progressbar.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/ion.rangeSlider.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/chosen.jquery.min.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/jQuery.Brazzers-Carousel.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/plugins.js') !!}"></script>
<script src="{!! asset('public\user\assets\js/main.js') !!}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
<script src="{!! asset('public\user\assets\js/gmap.js') !!}"></script>

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
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--<script src="{!! asset('public\user\assets\js/sweetalert.js') !!}"></script>--}}

<script type="text/javascript">
    $(document).ready(function () {

        $('.claimedRight').each(function (f) {

            var newstr = $(this).text().substring(0, 100);
            $(this).text(newstr);

        });
    })
</script>

{{--back to top--}}
<a id="button"></a>
<script type="text/javascript">
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
</script>
{{--<script type="text/javascript">--}}
{{--    //sắp xếp theo...--}}
{{--    $(document).ready(function() {--}}
{{--        $('#sort').on('change',function (){--}}
{{--            alert(1);--}}
{{--            var url = $(this).val();--}}
{{--            if(url){--}}
{{--                window.location = url;--}}
{{--            }--}}
{{--            return false;--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}

@include('frontend.page.scripts.shipping')
@include('frontend.page.scripts.coupon')
@include('frontend.page.scripts.checkout')

</body>

</html>
