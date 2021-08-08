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
<script src="{!! asset('frontend\assets\js\sweetalert.min.js') !!}"></script>
<script src="{!! asset('frontend\assets\js\lightgallery-all.min.js') !!}"></script>
<script src="{!! asset('frontend\assets\js\lightslider.js') !!}"></script>
<script src="{!! asset('frontend\assets\js\prettify.js') !!}"></script>

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
    //sắp xếp theo...
    $(document).ready(function() {
        $('#sort').on('change',function (){
            var url = $(this).val();
            if(url){
                window.location = url;
            }
            return false;
        })
    })
</script>

<script type="text/javascript">
    //show product gallery
    $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:4,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }
        });
    });
</script>

<script type="text/javascript">
    //nút back to top
    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });
</script>

<script type="text/javascript">
    //Xác nhận đơn đặt hàng
    $(document).ready(function () {
        $('.checkout-btn').click(function () {
            swal({
                title: "Xác nhận đơn hàng",
                text: "Đơn hàng sẽ không được hoàn trả khi đặt, bạn có chắc muốn đặt không?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        var customer_name = $('.customer_name').val();
                        var customer_email = $('.customer_email').val();
                        var customer_phone_number = $('.customer_phone_number').val();
                        var customer_address = $('.customer_address').val();
                        var customer_note = $('.customer_note').val();
                        var order_payment = $('.order_payment').val();
                        var order_coupon = $('.order_coupon').val();
                        var order_fee = $('.order_fee').val();
                        var customer_matp = $('.customer_matp').val();
                        var customer_maqh = $('.customer_maqh').val();
                        var customer_xaid = $('.customer_xaid').val();
                        var order_total = $('.order_total').val();
                        var _token = $('input[name="_token"]').val();
                        if(customer_name==''||customer_phone_number==''||customer_address==''||order_payment==''){
                            alert('Làm ơn điền đầy đủ thông tin khách hàng');
                        }else {
                            $.ajax({
                                url: '{{route('dat-hang')}}',
                                method: 'POST',
                                data: {customer_name: customer_name, customer_email: customer_email,
                                    customer_phone_number: customer_phone_number, customer_address: customer_address,
                                    customer_note: customer_note, order_payment: order_payment, order_coupon: order_coupon
                                    , order_fee: order_fee,order_total:order_total, customer_matp:customer_matp,
                                    customer_maqh:customer_maqh, customer_xaid:customer_xaid,_token: _token},
                                success: function () {
                                    swal("Cảm ơn! Đơn hàng đã được đặt thành công!", {
                                        icon: "success",
                                    });
                                }
                            });
                        }
                        window.setTimeout(function (){
                            location.reload();
                        } ,2000);
                    } else {
                        swal("Hủy xác nhận đặt hàng thành công!");
                    }
                });

        });
    });
</script>
<script type="text/javascript">
    //Tính phí vận chuyển
    $(document).ready(function () {
        $('.choose').on('change', function () {//khi class choose thay đổi
            var action = $(this).attr('id'); // this là lấy cái thuộc tính của id="city"
            var ma_id = $(this).val();// this lấy giá trị value của option
            var _token = $('input[name="_token"]').val();// gửi bằng form thì phải có token
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
        $('.calculate_delivery').click(function () {//khi click vào nút
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var _token = $('input[name="_token"]').val();
            if (matp == '' || maqh == '' || xaid == '') {
                swal("Làm ơn nhập địa điểm vận chuyển!");
            } else {
                $.ajax({
                    url: '{{route('calculate-fee')}}',
                    method: 'POST',
                    data: {matp: matp, maqh: maqh, xaid: xaid, _token: _token},
                    success: function (data) {
                        alertify.success('Tính phí Thành Công!');
                        location.reload();
                    }
                });
            }
            window.setTimeout(function (){
                location.reload();
            } ,2000);
        });
    });
</script>

</body>

</html>
