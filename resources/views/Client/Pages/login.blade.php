@extends('Client.layout.Master')

@section('title')
    Đăng Nhập
@endsection
@section('main')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('index')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang Chủ</a>
                    <span></span> Đăng Nhập
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="assets/imgs/page/login-1.png" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Đăng Nhập</h1>
                                            <p class="mb-30">Bạn chưa có tài khoản ? <a href="{{route('register')}}">Tạo tài khoản</a></p>
                                        </div>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Nhập vào địa chỉ email" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Nhập vào mật khẩu" />
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Nhớ đăng nhập</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="#">Quên mật khẩu?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Đăng Nhập</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('styles')
@endpush
@push('script')
@endpush