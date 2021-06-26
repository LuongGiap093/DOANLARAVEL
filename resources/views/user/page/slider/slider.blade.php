<div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        @foreach($sliders as $slider)
            <div class="item" style="background-image: url({!!asset('images/'. $slider->image) !!});">
                <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                        <div class="slider-header fadeInDown-1">{{($slider->slider_small_title)}}</div>
                        <div class="big-text fadeInDown-1"> {{$slider->slider_big_title}} <span
                                class="highlight">{{($slider->highlight_text)}}</span></div>
                        <div class="excerpt fadeInDown-2 hidden-xs"><span>{!! $slider->slider_description !!}</span>
                        </div>
                        <div class="button-holder fadeInDown-3"><a href="#"
                                                                   class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{$slider->slider_title_button}}</a>
                        </div>
                    </div>
                    <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
            </div>
    @endforeach
    <!-- /.item -->

    {{--        <div class="item" style="background-image: url({!! asset('frontend/assets/images/sliders/02.jpg') !!});">--}}
    {{--            <div class="container-fluid">--}}
    {{--                <div class="caption bg-color vertical-center text-left">--}}
    {{--                    <div class="slider-header fadeInDown-1">Spring 2016</div>--}}
    {{--                    <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span> </div>--}}
    {{--                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>--}}
    {{--                    <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>--}}
    {{--                </div>--}}
    {{--                <!-- /.caption -->--}}
    {{--            </div>--}}
    {{--            <!-- /.container-fluid -->--}}
    {{--        </div>--}}
    <!-- /.item -->

    </div>
    <!-- /.owl-carousel -->
</div>
