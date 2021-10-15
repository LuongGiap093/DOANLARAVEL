@extends('frontend.theme.layout')
@section('content')
    <main>
        <section class="container">


            @include('frontend.page.home.slider')


            @include('frontend.page.home.sp_noi_bat')


            @include('frontend.page.home.banner')


            @include('frontend.page.home.de_nghi_dac_biet')


            @include('frontend.page.home.tin_tuc')

            @include('frontend.page.home.binh_luan')

            @include('frontend.page.home.dang_ky_nhan_tin')

            @include('frontend.page.home.thong_tin')

        </section>
    </main>
    <!-- Main Content - end -->
@endsection
