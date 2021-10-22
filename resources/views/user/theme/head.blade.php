<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>FlipmartShop</title>
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\main.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\blue.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\owl.carousel.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\owl.transitions.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\animate.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\rateit.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\bootstrap-select.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\font-awesome.css') !!}">
<link rel="stylesheet" href="{!! asset('public\frontend\assets\css\sweetalert.css') !!}">
<link href="{!! asset('public\frontend\assets\css\lightbox.css" rel="stylesheet') !!}">
<link href="{!! asset('public\frontend\assets\css\lightgallery.min.css" rel="stylesheet') !!}">
<link href="{!! asset('public\frontend\assets\css\lightslider.css" rel="stylesheet') !!}">
<link href="{!! asset('public\frontend\assets\css\prettify.css" rel="stylesheet') !!}">
{{--profiles--}}
<link href="{!! asset('public\frontend\assets\css\awesome.min.css') !!}" rel="stylesheet">





<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
      rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

{{--<style>--}}

{{--    --}}
{{--/*    .account-settings .user-profile {*/--}}
{{--/*        margin: 0 0 1rem 0;*/--}}
{{--/*        padding-bottom: 1rem;*/--}}
{{--/*        text-align: center;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .user-profile .user-avatar {*/--}}
{{--/*        margin: 0 0 1rem 0;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .user-profile .user-avatar img {*/--}}
{{--/*        width: 90px;*/--}}
{{--/*        height: 90px;*/--}}
{{--/*        -webkit-border-radius: 100px;*/--}}
{{--/*        -moz-border-radius: 100px;*/--}}
{{--/*        border-radius: 100px;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .user-profile h5.user-name {*/--}}
{{--/*        margin: 0 0 0.5rem 0;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .user-profile h6.user-email {*/--}}
{{--/*        margin: 0;*/--}}
{{--/*        font-size: 0.8rem;*/--}}
{{--/*        font-weight: 400;*/--}}
{{--/*        color: #9fa8b9;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .about {*/--}}
{{--/*        margin: 2rem 0 0 0;*/--}}
{{--/*        text-align: center;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .about h5 {*/--}}
{{--/*        margin: 0 0 15px 0;*/--}}
{{--/*        color: #007ae1;*/--}}
{{--/*    }*/--}}
{{--/*    .account-settings .about p {*/--}}
{{--/*        font-size: 0.825rem;*/--}}
{{--/*    }*/--}}
{{--/*    .form-control {*/--}}
{{--/*        border: 1px solid #cfd1d8;*/--}}
{{--/*        -webkit-border-radius: 2px;*/--}}
{{--/*        -moz-border-radius: 2px;*/--}}
{{--/*        border-radius: 2px;*/--}}
{{--/*        font-size: .825rem;*/--}}
{{--/*        background: #ffffff;*/--}}
{{--/*        color: #2e323c;*/--}}
{{--/*    }*/--}}

{{--/*    .card {*/--}}
{{--/*        background: #ffffff;*/--}}
{{--/*        -webkit-border-radius: 5px;*/--}}
{{--/*        -moz-border-radius: 5px;*/--}}
{{--/*        border-radius: 5px;*/--}}
{{--/*        border: 0;*/--}}
{{--/*        margin-bottom: 1rem;*/--}}
{{--/*    }*/--}}
{{--    .shopping-cart .shopping-cart-table table tbody tr .cart-product-name-info h4 {--}}
{{--        margin-top: 10px;--}}
{{--        font-family: 'Open Sans', sans-serif;--}}
{{--        font-size: 16px;--}}
{{--    }--}}

{{--    .body-content .my-wishlist-page .my-wishlist table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {--}}
{{--        vertical-align: middle;--}}
{{--        border: none;--}}
{{--        padding: 20px 0px;--}}
{{--    }--}}

{{--    .shopping-cart .shopping-cart-table .table > thead > tr > th {--}}
{{--        text-align: center;--}}
{{--        padding: 10px;--}}
{{--        font-family: 'Open Sans', sans-serif;--}}
{{--        font-size: 15px;--}}
{{--    }--}}

{{--    .shopping-cart .estimate-ship-tax table tbody tr > td {--}}
{{--        padding: 20px 0px !important;--}}
{{--    }--}}

{{--    .shopping-cart .shopping-cart-table .shopping-cart-btn span {--}}
{{--        padding: 20px 0px 40px;--}}
{{--        display: block;--}}
{{--    }--}}

{{--    .shopping-cart .estimate-ship-tax table thead tr > th {--}}
{{--        padding: 25px 0px 10px 0px;--}}
{{--    }--}}

{{--/*Làm ảnh hưởng đến show product*/--}}
{{--/*        .col-md-4 {*/--}}
{{--/*            width: 33.33333333%;*/--}}
{{--/*            padding: 0px 40px 0px 0px;*/--}}
{{--/*        }*/--}}


{{--    .cart-shopping-total {--}}
{{--        background: #f8f8f8;--}}
{{--        padding: 0px;--}}
{{--    }--}}

{{--    .shopping-cart .cart-shopping-total table tbody tr td .cart-checkout-btn button {--}}
{{--        float: right !important;--}}
{{--        margin-bottom: 20px;--}}
{{--    }--}}

{{--    .list-inline>li {--}}
{{--        display: inline;--}}
{{--        padding-right: 5px;--}}
{{--        padding-left: 5px;--}}
{{--    }--}}

{{--    .back-to-top {--}}
{{--        position: fixed;--}}
{{--        bottom: 25px;--}}
{{--        right: 25px;--}}
{{--        display: none;--}}
{{--    }--}}

{{--    img {--}}
{{--        width: 100%;--}}
{{--        vertical-align: middle;--}}
{{--    }--}}
{{--</style>--}}

<style>
    /*back to top*/
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


{{--banner slide--}}
<style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: 200px;
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

    .stylization th, .stylization td {
        padding: 10px 15px;
    }
    .stylization td {
        border-width: 0 1px 1px 0;
    }
    .stylization caption, .stylization th, .stylization td {
        font-weight: normal;
        text-align: left;
    }
    .stylization table, .stylization th, .stylization td {
        border: 1px solid #c4d8ec;
        line-height: 1.7;
    }
</style>

<style>
    .checked {
        color: orange;
    }
    img {
        vertical-align: middle;
        max-width: 100%;
    }
</style>

<style>
    /*quantity product detail*/

    .counter {
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f3f3f3;
    }
    .counter input {
        width: 45px;
        height: 22px;
        border: 1px solid #e5dfdf;
        font-size: 15px;
        text-align: center;
        appearance: none;
        outline: 0;
    }
    .counter span {
        font-weight: 600;
        display: block;
        font-size: 20px;
        cursor: pointer;
        color: #0052cc;
        user-select: none;
    }
</style>


<style>
/*tab detail product*/
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #e0e4f6;
        background-color: #f8f8f8;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 20px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 20px 20px;
        /*border: 1px solid #ccc;*/
        border-top: none;
        background-color: #fff;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 8%);
    }
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    .heading {
        font-size: 25px;
        margin-right: 25px;
    }

    .checked {
        color: orange;
    }

    /* Three column layout */
    .side {
        float: left;
        width: 15%;
        margin-top:10px;
    }

    .middle {
        margin-top:10px;
        float: left;
        width: 70%;
    }

    /* Place text to the right */
    .right {
        text-align: right;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* The bar container */
    .bar-container {
        width: 100%;
        background-color: #f1f1f1;
        text-align: center;
        color: white;
    }

    /* Individual bars */
    .bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
    .bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
    .bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
    .bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
    .bar-1 {width: 15%; height: 18px; background-color: #f44336;}

    /* Responsive layout - make the columns stack on top of each other instead of next to each other */
    @media (max-width: 400px) {
        .side, .middle {
            width: 100%;
        }
        .right {
            display: none;
        }
    }
</style>
<style>
    /*review*/
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .wrapperReview {
        margin: 0 auto;
        max-width: 960px;
        width: 100%;
    }

    .master {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    /*h1 {*/
    /*    font-size: 20px;*/
    /*    margin-bottom: 20px;*/
    /*}*/

    /*h2 {*/
    /*    line-height: 160%;*/
    /*    margin-bottom: 20px;*/
    /*    text-align: center;*/
    /*}*/

    .rating-component {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .rating-component .status-msg {
        font-size: 15px;
        text-align: center;
    }

    .rating-component .status-msg strong {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .rating-component .stars-box {
        -ms-flex-item-align: center;
        align-self: center;
        font-size: 25px;
    }

    .rating-component .stars-box .star {
        color: #ccc;
        cursor: pointer;
    }

    .rating-component .stars-box .star.hover {
        color: #ff5a49;
    }

    .rating-component .stars-box .star.selected {
        color: #ff5a49;
    }

    .feedback-tags {

    }

    .feedback-tags .tags-container {
        display: none;
    }

    .feedback-tags .tags-container .question-tag {
        text-align: center;
        margin-bottom: 20px;
    }

    .feedback-tags .tags-box {
        display: -webkit-box;
        display: -ms-flexbox;
        text-align: center;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .feedback-tags .tags-container .make-compliment {
        padding-bottom: 20px;
    }

    .feedback-tags .tags-container .make-compliment .compliment-container {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #000;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .feedback-tags
    .tags-container
    .make-compliment
    .compliment-container
    .fa-smile-wink {
        color: #ff5a49;
        cursor: pointer;
        font-size: 40px;
        margin-top: 15px;
        -webkit-animation-name: compliment;
        animation-name: compliment;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
    }

    .feedback-tags
    .tags-container
    .make-compliment
    .compliment-container
    .list-of-compliment {
        display: none;
        margin-top: 15px;
    }

    .feedback-tags .tag {
        border: 1px solid #ff5a49;
        border-radius: 5px;
        color: #ff5a49;
        cursor: pointer;
        margin-bottom: 20px;
        padding: 10px;
    }

    .feedback-tags .tag.choosed {
        background-color: #ff5a49;
        color: #fff;
    }

    .list-of-compliment ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .list-of-compliment ul li {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 10px;
        margin-left: 20px;
        min-width: 90px;
    }

    .list-of-compliment ul li:first-child {
        margin-left: 0;
    }

    .list-of-compliment ul li .icon-compliment {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        border: 2px solid #ff5a49;
        border-radius: 50%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 70px;
        margin-bottom: 15px;
        overflow: hidden;
        padding: 0 10px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        width: 70px;
    }

    .list-of-compliment ul li .icon-compliment i {
        color: #ff5a49;
        font-size: 30px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .list-of-compliment ul li.actived .icon-compliment {
        background-color: #ff5a49;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .list-of-compliment ul li.actived .icon-compliment i {
        color: #fff;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .button-box .done {
        background-color: #ff5a49;
        border: 1px solid #ff5a49;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        display: none;
        min-width: 100px;
        padding: 10px;
    }

    .button-box .done:disabled,
    .button-box .done[disabled] {
        border: 1px solid #ff9b95;
        background-color: #ff9b95;
        color: #fff;
        cursor: initial;
    }

    .submited-box {
        display: none;
        padding: 20px;
    }

    .submited-box .loader,
    .submited-box .success-message {
        display: none;
    }

    .submited-box .loader {
        border: 5px solid transparent;
        border-top: 5px solid #4dc7b7;
        border-bottom: 5px solid #ff5a49;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        -webkit-animation: spin 0.8s linear infinite;
        animation: spin 0.8s linear infinite;
    }

    @-webkit-keyframes compliment {
        1% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        25% {
            -webkit-transform: rotate(-30deg);
            transform: rotate(-30deg);
        }

        50% {
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
        }

        75% {
            -webkit-transform: rotate(-30deg);
            transform: rotate(-30deg);
        }

        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @keyframes compliment {
        1% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        25% {
            -webkit-transform: rotate(-30deg);
            transform: rotate(-30deg);
        }

        50% {
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
        }

        75% {
            -webkit-transform: rotate(-30deg);
            transform: rotate(-30deg);
        }

        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>

<style>
    /*Trigger Button*/
    .login-trigger {
        background: linear-gradient(to bottom right, #3a85e3, #14c790);
        padding: 0px 5px;
        border-radius: 30px;
    }

    @media (min-width: 576px){
        .modal-dialog {
            max-width: 400px;

        .modal-content {
            padding: 1rem;
        }
    }
    }


    .form-title {
        margin: -2rem 0rem 2rem;
    }

    .btn-round {
        border-radius: 3rem;
    }

    .delimiter {
        padding: 1rem;
    }

    .social-buttons {
    .btn {
        margin: 0 0.5rem 1rem;
    }
    }

    .signup-section {
        padding: 0.3rem 0rem;
    }

    .modal-header-login {
        min-height: 16.43px;
        padding: 15px;
    }
    button.close-login {
        float: right;
    }
    .modal-body-login {
        padding: 20px 15px;
    }
    .form-control-login {
        font-size: 15px;
        display: block;
        width: 100%;
        padding: 1rem 1.5rem;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>
<style>
    .formatForButton {
        background-color:pink;
    }
</style>

<style>
    .btn-wishlist {
        padding: 6px 10px;
        border-radius: 2px;
        background-color: #108bea;
    }
    .btn-wishlist:hover {
        background-color: red;
    }
</style>


