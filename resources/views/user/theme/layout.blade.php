<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60c621cd3d595993"></script>
<script type="text/javascript">
    //Tính phí vận chuyển
    $(document).ready(function () {
        $('.choose').on('change', function () {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action);
            // alert(matp);
            // alert(_token);
            if (action == 'city') {
                result = 'province';
            } else {
                result = 'wards';
            }
            $.ajax({
                url: '{{route('select-delivery-home')}}',
                method: 'POST',
                data: {action: action, ma_id: ma_id, _token: _token},
                success: function (data) {
                    $('#' + result).html(data);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.calculate_delivery').click(function () {
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var _token = $('input[name="_token"]').val();
            if (matp == '' && maqh == '' && xaid == '') {
                alert('Làm ơn chọn địa điểm để tính phí vận chuyển');
            } else {
                $.ajax({
                    url: '{{route('calculate-fee')}}',
                    method: 'POST',
                    data: {matp: matp, maqh: maqh, xaid: xaid, _token: _token},
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
</body>

</html>
