<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>AllStore - MultiConcept eCommerce Template</title>

<link
    href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic"
    rel="stylesheet">

<link rel="stylesheet" href="{!! asset('public\user\assets\css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/ion.rangeSlider.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/ion.rangeSlider.skinFlat.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/jquery.bxslider.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/jquery.fancybox.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/flexslider.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/swiper.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/swiper.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/style.css') !!}">
<link rel="stylesheet" href="{!! asset('public\user\assets\css/media.css') !!}">
{{--back to top--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

{{--<link rel="stylesheet" href="{!! asset('public\user\assets\css/sweetalert.css') !!}">--}}
<style>
    /*header*/
    .header {
        background: #157ed2;
    }

    .topmenu .topcatalog .topcatalog-btn {
        border: none;
        background-color: #fdd922;
        padding-top: 13px;
    }
    /*yêu thích*/
    .shop-menu ul li a {
        background: none;
        color: white;
    }
    .shop-menu ul li a i {
        color: white;
    }

    /*tìm kiếm*/
    .topsearch .topsearch-btn {
        border: none;
        background-color: #fdd922;
    }

    /*menu*/
    .topmenu .mainmenu > li > a {
        color: white;
        padding: 12px 19px;
    }
    .topmenu .mainmenu.sections-show {
        background-color: #0f6cb2;
    }
    .topmenu .mainmenu {
        border: none;
        padding: 0px;
    }
    .topmenu .mainmenu > li > a:hover, .topmenu .mainmenu > li > a.active {
        color: black;
        background-color: white;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    .topmenu .mainmenu li > a > .fa {
        background: #fdd922;
    }
    .topmenu .mainmenu > li {
        border-right: 1px solid rgba(255,255,255,0.1);
    }
    /*slider*/
    .fr-slider-wrap {
        margin: 0 0 30px;
    }

    /*sản phẩm nổi bật*/
    .fr-pop-wrap {
        padding: 20px;
        background-color: white;
    }

    .fr-pop-tab-cont {
        margin: 0 0 0px;
    }

    /*banner*/
    .banners-list {
        margin: 0 -10px 10px;
    }

    /*đề nghị đặc biệt*/
    .discounts-wrap {
        padding: 20px;
        background-color: white;
        margin: 0 0 30px;
    }

    .discounts-i .discounts-i-ttl {
        text-transform: none;
    }

    .discounts-list .discounts-i {
        padding: 0px 5px 0 125px;
    }
</style>

<style>
    #button {
        display: inline-block;
        background-color: #FF9800;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 50px;
        right: 0px;
        border-radius: 50%;
        border: 2px solid white;
        transition: background-color .3s,
        opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 1000;
    }
    #button::after {
        content: "\f077";
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        color: #fff;
    }
    #button:hover {
        cursor: pointer;
        background-color: #333;
    }
    #button:active {
        background-color: #555;
    }
    #button.show {
        opacity: 1;
        visibility: visible;
    }

</style>

<style>
    .Checkout_section {
        padding: 20px;
        background-color: white;
    }
    .checkout_form h3 {
        font-size: 16px;
        line-height: 30px;
        padding: 5px 10px;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        background: #333;
        font-weight: 700;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }

</style>

<style>
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
</style>

<style>
    .swal-text:first-child {
        margin-top: 45px;
        font-family: monospace;
        font-weight: 600;
    }
    .swal-text {
        font-size: 17px;
        position: relative;
        float: none;
        line-height: normal;
        vertical-align: top;
        text-align: left;
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        font-weight: 400;
        color: blue;
        max-width: calc(100% - 20px);
        overflow-wrap: break-word;
        box-sizing: border-box;
    }
    .swal-footer {
        text-align: center;
        padding-top: 13px;
        margin-top: 13px;
        padding: 13px 16px;
        border-radius: inherit;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .swal-overlay--show-modal .swal-modal {
        opacity: 1;
        pointer-events: auto;
        box-sizing: border-box;
        -webkit-animation: showSweetAlert .3s;
        animation: showSweetAlert .3s;
        will-change: auto;
    }
    .swal-button {
        background-color: #fdd922;
        color: black;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        margin: 0;
        cursor: pointer;
    }
    .swal-button--cancel {
        background-color: #efefef;
    }
    .swal-button--danger {
        background-color: #e64942;
    }
</style>
