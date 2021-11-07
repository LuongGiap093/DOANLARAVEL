@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('shopping.home')}}">Trang chủ</a></li>
                    <li class="active">Hỗ trợ</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content">
        <div class="container">
            <div class="checkout-box faq-page">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-title">Câu hỏi thường gặp</h2>
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
                            @foreach($faqs as $key => $faq)
{{--                                    {{dd($key)}}--}}
                                <div class="panel panel-default checkout-step-01">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">
                                            <a data-toggle="collapse" class="" data-parent="#accordion"
                                               href="#{{$faq->faq_id}}">
                                                <span>{{ $key + 1  }}</span> {!! $faq->faq_title !!}
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- panel-heading -->
                                    <div id="{{$faq->faq_id}}" class="panel-collapse collapse in">
                                        <!-- panel-body  -->
                                        <div class="panel-body">
                                            {!! $faq->faq_description !!}
                                        </div>
                                        <!-- panel-body  -->
                                    </div><!-- row -->
                                </div>
                        @endforeach
                        <!-- checkout-step-01  -->
                            <!-- checkout-step-02  -->

                            <!-- checkout-step-02  -->

                            <!-- checkout-step-03  -->

                            <!-- checkout-step-09  -->

                        </div><!-- /.checkout-steps -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@stop
