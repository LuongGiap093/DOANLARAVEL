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
@include('user.page.cart_page.scripts_cart')
@include('user.page.wishlist_page.scripts_wishlist')
<script src="{!! asset('public\frontend\assets\js\jquery-1.11.1.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\bootstrap.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\bootstrap-hover-dropdown.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\owl.carousel.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\echo.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\jquery.easing-1.3.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\bootstrap-slider.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\jquery.rateit.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public\frontend\assets\js\lightbox.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\bootstrap-select.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\wow.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\scripts.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\sweetalert.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\lightgallery-all.min.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\lightslider.js') !!}"></script>
<script src="{!! asset('public\frontend\assets\js\prettify.js') !!}"></script>

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

@include('user.page.checkout_page.scripts_shipping')
@include('user.page.checkout_page.scripts_checkout')

{{--<script type="text/javascript">--}}
{{--    //sắp xếp theo...--}}
{{--    $(document).ready(function() {--}}
{{--        $('#sort').on('change',function (){--}}
{{--            var url = $(this).val();--}}
{{--            if(url){--}}
{{--                window.location = url;--}}
{{--            }--}}
{{--            return false;--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}

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


{{--<script type="text/javascript">--}}
{{--    //Xác nhận đơn đặt hàng--}}
{{--    $(document).ready(function () {--}}
{{--        $('.checkout-btn').click(function () {--}}
{{--            swal({--}}
{{--                title: "Xác nhận đơn hàng",--}}
{{--                text: "Đơn hàng sẽ không được hoàn trả khi đặt, bạn có chắc muốn đặt không?",--}}
{{--                icon: "warning",--}}
{{--                buttons: true,--}}
{{--                dangerMode: true,--}}
{{--            })--}}
{{--                .then((willDelete) => {--}}
{{--                    if (willDelete) {--}}
{{--                        var customer_name = $('.customer_name').val();--}}
{{--                        var customer_email = $('.customer_email').val();--}}
{{--                        var customer_phone_number = $('.customer_phone_number').val();--}}
{{--                        var customer_address = $('.customer_address').val();--}}
{{--                        var customer_note = $('.customer_note').val();--}}
{{--                        var order_payment = $('.order_payment').val();--}}
{{--                        var order_coupon = $('.order_coupon').val();--}}
{{--                        var order_fee = $('.order_fee').val();--}}
{{--                        var customer_matp = $('.customer_matp').val();--}}
{{--                        var customer_maqh = $('.customer_maqh').val();--}}
{{--                        var customer_xaid = $('.customer_xaid').val();--}}
{{--                        var order_total = $('.order_total').val();--}}
{{--                        var _token = $('input[name="_token"]').val();--}}
{{--                        if(customer_name==''||customer_phone_number==''||customer_address==''||order_payment==''){--}}
{{--                            alert('Làm ơn điền đầy đủ thông tin khách hàng');--}}
{{--                        }else {--}}
{{--                            $.ajax({--}}
{{--                                url: '{{route('dat-hang')}}',--}}
{{--                                method: 'POST',--}}
{{--                                data: {customer_name: customer_name, customer_email: customer_email,--}}
{{--                                    customer_phone_number: customer_phone_number, customer_address: customer_address,--}}
{{--                                    customer_note: customer_note, order_payment: order_payment, order_coupon: order_coupon--}}
{{--                                    , order_fee: order_fee,order_total:order_total, customer_matp:customer_matp,--}}
{{--                                    customer_maqh:customer_maqh, customer_xaid:customer_xaid,_token: _token},--}}
{{--                                success: function () {--}}
{{--                                    swal("Cảm ơn! Đơn hàng đã được đặt thành công!", {--}}
{{--                                        icon: "success",--}}
{{--                                    });--}}
{{--                                }--}}
{{--                            });--}}
{{--                        }--}}
{{--                        window.setTimeout(function (){--}}
{{--                            location.reload();--}}
{{--                        } ,2000);--}}
{{--                    } else {--}}
{{--                        swal("Hủy xác nhận đặt hàng thành công!");--}}
{{--                    }--}}
{{--                });--}}

{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    //Tính phí vận chuyển--}}
{{--    $(document).ready(function () {--}}
{{--        $('.choose').on('change', function () {//khi class choose thay đổi--}}
{{--            var action = $(this).attr('id'); // this là lấy cái thuộc tính của id="city"--}}
{{--            var ma_id = $(this).val();// this lấy giá trị value của option--}}
{{--            var _token = $('input[name="_token"]').val();// gửi bằng form thì phải có token--}}
{{--            var result = '';--}}
{{--            // alert(action);--}}
{{--            // alert(matp);--}}
{{--            // alert(_token);--}}
{{--            if (action == 'city') {--}}
{{--                result = 'province';--}}
{{--            } else {--}}
{{--                result = 'wards';--}}
{{--            }--}}
{{--            $.ajax({--}}
{{--                url: '{{route('select-delivery-home')}}',--}}
{{--                method: 'POST',--}}
{{--                data: {action: action, ma_id: ma_id, _token: _token},--}}
{{--                success: function (data) {--}}
{{--                    $('#' + result).html(data);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function () {--}}
{{--        $('.calculate_delivery').click(function () {//khi click vào nút--}}
{{--            var matp = $('.city').val();--}}
{{--            var maqh = $('.province').val();--}}
{{--            var xaid = $('.wards').val();--}}
{{--            var _token = $('input[name="_token"]').val();--}}
{{--            if (matp == '' || maqh == '' || xaid == '') {--}}
{{--                swal("Làm ơn nhập địa điểm vận chuyển!");--}}
{{--            } else {--}}
{{--                $.ajax({--}}
{{--                    url: '{{route('calculate-fee')}}',--}}
{{--                    method: 'POST',--}}
{{--                    data: {matp: matp, maqh: maqh, xaid: xaid, _token: _token},--}}
{{--                    success: function (data) {--}}
{{--                        alertify.success('Tính phí Thành Công!');--}}
{{--                        location.reload();--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--            window.setTimeout(function (){--}}
{{--                location.reload();--}}
{{--            } ,2000);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}


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

<script>
    // banner slide
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            items : 2,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
    });
</script>

<script type="text/javascript">
    function increaseCount(a, b) {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);
        value = isNaN(value)? 0 : value;
        value ++;
        input.value = value;
    }
    function decreaseCount(a, b) {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value)? 0 : value;
            value --;
            input.value = value;
        }
    }
</script>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>
<script>
    // review
    $(".rating-component .star").on("mouseover", function () {
        var onStar = parseInt($(this).data("value"), 10); //
        $(this).parent().children("i.star").each(function (e) {
            if (e < onStar) {
                $(this).addClass("hover");
            } else {
                $(this).removeClass("hover");
            }
        });
    }).on("mouseout", function () {
        $(this).parent().children("i.star").each(function (e) {
            $(this).removeClass("hover");
        });
    });

    $(".rating-component .stars-box .star").on("click", function () {
        var onStar = parseInt($(this).data("value"), 10);
        var stars = $(this).parent().children("i.star");
        var ratingMessage = $(this).data("message");

        var msg = "";
        if (onStar > 1) {
            msg = onStar;
        } else {
            msg = onStar;
        }
        $('.rating-component .starrate .ratevalue').val(msg);



        $(".fa-smile-wink").show();

        $(".button-box .done").show();

        if (onStar === 5) {
            $(".button-box .done").removeAttr("disabled");
        } else {
            $(".button-box .done").attr("disabled", "true");
        }

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass("selected");
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass("selected");
        }

        $(".status-msg .rating_msg").val(ratingMessage);
        $(".status-msg").html(ratingMessage);
        $("[data-tag-set]").hide();
        $("[data-tag-set=" + onStar + "]").show();
    });

    $(".feedback-tags  ").on("click", function () {
        var choosedTagsLength = $(this).parent("div.tags-box").find("input").length;
        choosedTagsLength = choosedTagsLength + 1;

        if ($(this).hasClass("choosed")) {
            $(this).removeClass("choosed");
            choosedTagsLength = choosedTagsLength - 2;
        } else {
            $(this).addClass("choosed");
            $(".button-box .done").removeAttr("disabled");
        }

        console.log(choosedTagsLength);

        if (choosedTagsLength <= 0) {
            $(".button-box .done").attr("enabled", "false");
        }
    });



    $(".compliment-container .fa-smile-wink").on("click", function () {
        $(this).fadeOut("slow", function () {
            $(".list-of-compliment").fadeIn();
        });
    });



    $(".done").on("click", function () {
        $(".rating-component").hide();
        $(".feedback-tags").hide();
        $(".button-box").hide();
        $(".submited-box").show();
        $(".submited-box .loader").show();

        setTimeout(function () {
            $(".submited-box .loader").hide();
            $(".submited-box .success-message").show();
        }, 1500);
    });
</script>

</body>

</html>
