@extends('frontend.theme.layout')
@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="{{route('trang-chu')}}">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>Đăng ký / Đăng nhập</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Đăng ký / Đăng nhập</span></h1>
            <div class="auth-wrap">
                <div class="auth-col">
                    <h2 style="margin: 0 0 10px 0px;">Đăng nhập</h2>
                    <form action="{{ route('customer.postLogin') }}" method="post" class="login"
                          style="border: 1px solid #d3ced2;padding: 20px;border-radius: 5px;">
                        @csrf
                        <p>
                            <label for="username"
                                   style="padding-right: 0px;letter-spacing: 0px;width: 100%;text-align: left;">E-mail
                                <span class="required">*</span></label>
                            <input type="text" id="username" name="email" autocomplete="off" style="width: 100%;"
                                   required>
                        </p>
                        <p>
                            <label for="password"
                                   style="padding-right: 0px;letter-spacing: 0px;width: 100%;text-align: left;">Mật khẩu
                                <span class="required">*</span></label>
                            <input type="password" id="password" name="password" autocomplete="off" style="width: 100%;"
                                   required>
                        </p>
                        @if (session('status'))
                            <div class="alert alert-success">
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif
                        <p class="auth-submit">
                            <input type="submit" value="Đăng nhập" style="margin: 0px;">
                            <input type="checkbox" id="rememberme" value="forever">
                            <label for="rememberme">Nhớ mật khẩu</label>
                        </p>
                        <p class="auth-lost_password" style="padding: 0px">
                            <a href="#">Quên mật khẩu?</a>
                        </p>
                    </form>
                </div>
                <div class="auth-col">
                    <h2 style="margin: 0 0 10px 0px;">Đăng ký</h2>
                    <form action="{{route('customer.postadd')}}" method="post" class="register"
                          style="border: 1px solid #d3ced2;padding: 20px;border-radius: 5px;">
                        @csrf
                        <p>
                            <label for="reg_name"
                                   style="padding-right: 0px;letter-spacing: 0px;width: 100%;text-align: left;">Họ tên
                                <span class="required">*</span>
                            </label>
                            <input type="text" id="reg_name" name="name" autocomplete="off" style="width: 100%;"
                                   required>
                            @if ($errors->has('name'))
                                <span class="help is-danger" style="color: red">*{{ $errors->first('name') }}</span>
                            @endif
                        </p>
                        <p>
                            <label for="reg_phone"
                                   style="padding-right: 0px;letter-spacing: 0px;width: 100%;text-align: left;">số Điện
                                thoại <span class="required">*</span>
                            </label>
                            <input type="text" id="reg_phone" name="phone" autocomplete="off" style="width: 100%;"
                                   required>
                            @if ($errors->has('phone'))
                                <span class="help is-danger" style="color: red">*{{ $errors->first('phone') }}</span>
                            @endif
                        </p>
                        <p>
                            <label for="reg_email"
                                   style="padding-right: 0px;letter-spacing: 0px;width: 100%;text-align: left;">Email
                                <span class="required">*</span>
                            </label>
                            <input type="email" id="reg_email" name="email" autocomplete="off" style="width: 100%;"
                                   required>
                            @if ($errors->has('email'))
                                <span class="help is-danger" style="color: red">*{{ $errors->first('email') }}</span>
                            @endif
                        </p>
                        <p>
                            <label for="reg_password"
                                   style="padding-right: 0px;letter-spacing: 0px;width: 100%;text-align: left;">Mật khẩu
                                <span class="required">*</span></label>
                            <input type="password" id="reg_password" name="password" autocomplete="off"
                                   style="width: 100%;" required>
                            @if ($errors->has('password'))
                                <span class="help is-danger" style="color: red">*{{ $errors->first('password') }}</span>
                            @endif
                        </p>
                        @if (session('success'))
                            <div class="alert alert-success">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        <p class="auth-submit">
                            <input type="submit" value="Đăng ký" style="margin: 0px;">
                        </p>
                    </form>
                </div>
            </div>


        </section>
    </main>
    <!-- Main Content - end -->
@endsection
