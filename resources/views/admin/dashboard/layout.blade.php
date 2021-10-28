{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}
{{--    <title>SB Admin 2 - Dashboard</title>--}}
{{--    <link href="{!! asset('public\admin/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">--}}
{{--    <link--}}
{{--        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"--}}
{{--        rel="stylesheet">--}}
{{--    <link href="{!! asset('public\admin/css/sb-admin-2.min.css') !!}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body id="page-top">--}}
{{--    <div id="wrapper">--}}
{{--        @include('admin.theme.sidebar')	--}}
{{--        <div id="content-wrapper" class="d-flex flex-column">--}}
{{--            <div id="content">--}}
{{--                @include('admin.theme.nav')--}}
{{--                @if(Session::has('message'))--}}
{{--                <div class="alert alert-success">--}}
{{--                  {{ Session::get('message') }}--}}
{{--                </div>--}}
{{--                @endif	                   --}}
{{--        @yield('content')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--	</div>--}}
{{--    --}}
{{--  </body>--}}
{{--</html>--}}
{{--<script src="{!! asset('public\admin/vendor/jquery/jquery.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('public\admin/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('public\admin/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('public\admin/js/sb-admin-2.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('public\admin/vendor/chart.js/Chart.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('public\admin/js/demo/chart-area-demo.js') !!}"></script>--}}
{{--  <script src="{!! asset('public\admin/js/demo/chart-pie-demo.js') !!}"></script>--}}
{{--    --}}

        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data Table | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{!! asset('public\admin/assets/images/favicon.ico') !!}">

    <!-- third party css -->
    <link href="{!! asset('public\admin/assets/libs/datatables/dataTables.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('public\admin/assets/libs/datatables/buttons.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('public\admin/assets/libs/datatables/responsive.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('public\admin/assets/libs/datatables/select.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{!! asset('public\admin/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{!! asset('public\admin/assets/css/icons.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('public\admin/assets/css/app.min.css') !!}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

</head>

<body>

<!-- Begin page -->
<div id="wrapper">
    @include('admin.theme.nav')

    @include('admin.theme.sidebar')

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Data Table</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Table</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <h4 class="m-t-0 header-title mb-4"><b>Doanh Thu Sản Phẩm</b></h4>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
    </div>
    <div class="slimscroll-menu">

        <div class="p-4">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class="mb-2">
                <img src="{!! asset('public\admin/assets/images/layouts/light.png') !!}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{!! asset('public\admin/assets/images/layouts/dark.png') !!}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="{!!asset(' admin/assets/css/bootstrap-dark.min.css') !!}" data-appstyle="{!! asset('public\admin/assets/css/app-dark.min.css') !!}">
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
    <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
</a>

<!-- Vendor js -->
<script src="{!! asset('public\admin/assets/js/vendor.min.js') !!}"></script>

<!-- Required datatable js -->
<script src="{!! asset('public\admin/assets/libs/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/datatables/dataTables.bootstrap4.min.js') !!}"></script>
<!-- Buttons examples -->
<script src="{!! asset('public\admin/assets/libs/datatables/dataTables.buttons.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/datatables/buttons.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/jszip/jszip.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/pdfmake/pdfmake.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/pdfmake/vfs_fonts.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/datatables/buttons.html5.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/datatables/buttons.print.min.js') !!}"></script>

<!-- Responsive examples -->
<script src="{!! asset('public\admin/assets/libs/datatables/dataTables.responsive.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/datatables/responsive.bootstrap4.min.js') !!}"></script>

<script src="{!! asset('public\admin/assets/libs/datatables/dataTables.keyTable.min.js') !!}"></script>
<script src="{!! asset('public\admin/assets/libs/datatables/dataTables.select.min.js') !!}"></script>

<!-- Datatables init -->
<script src="{!! asset('public\admin/assets/js/pages/datatables.init.js') !!}"></script>

<!-- App js -->
<script src="{!! asset('public\admin/assets/js/app.min.js') !!}"></script>
<script>CKEDITOR.replace('contents')</script>
<script>CKEDITOR.replace('data')</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    $(function () {
        'use strict'
        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }
        var mode = 'index'
        var intersect = true
        var $visitorsChart = $('#visitors-chart')
        // eslint-disable-next-line no-unused-vars
        var visitorsChart = new Chart($visitorsChart, {
            data: {
                labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
                datasets: [{
                    type: 'line',
                    data: [100, 120, 180,67, 180, 177, 160],
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    pointBorderColor: '#007bff',
                    pointBackgroundColor: '#007bff',
                    fill: false
                    // pointHoverBackgroundColor: '#007bff',
                    // pointHoverBorderColor    : '#007bff'
                },
                    {
                        type: 'line',
                        data: [60, 80, 70, 67, 80, 77, 100],
                        backgroundColor: 'tansparent',
                        borderColor: '#ced4da',
                        pointBorderColor: '#ced4da',
                        pointBackgroundColor: '#ced4da',
                        fill: false
                        // pointHoverBackgroundColor: '#ced4da',
                        // pointHoverBorderColor    : '#ced4da'
                    }]
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    mode: mode,
                    intersect: intersect
                },
                hover: {
                    mode: mode,
                    intersect: intersect
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        // display: false,
                        gridLines: {
                            display: true,
                            lineWidth: '4px',
                            color: 'rgba(0, 0, 0, .2)',
                            zeroLineColor: 'transparent'
                        },
                        ticks: $.extend({
                            beginAtZero: true,
                            suggestedMax: 200
                        }, ticksStyle)
                    }],
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false
                        },
                        ticks: ticksStyle
                    }]
                }
            }
        })
    })
</script>
</body>

</html>
