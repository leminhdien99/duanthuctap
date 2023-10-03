@extends('Client.layout.Master')

@section('title')
    Tạo Tài Khoản
@endsection
@section('main')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('index')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang Chủ</a>
                    <span></span> Tạo Tài Khoản
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Tạo Tài Khoản Mới</h1>
                                            <p class="mb-30">Bạn đã có tài khoản ? <a href="{{route('login')}}">Đăng nhập</a></p>
                                        </div>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" required="" name="username" placeholder="Nhập vào họ và tên" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Nhập vào địa chỉ email" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Nhập mật khẩu" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Nhập lại mật khẩu" />
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>Tôi đồng ý với các điều khoản &amp; Chính Sách.</span></label>
                                                    </div>
                                                </div>
                                                <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div>
                                            <div class="form-group mb-30">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Đăng Ký</button>
                                            </div>
                                            <p class="font-xs text-muted"><strong>Lưu ý:</strong> Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này, để quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được mô tả trong chính sách bảo mật của chúng tôi</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-20 d-none d-lg-block">
                                <div class="card-login mt-115">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                        <span>Đăng nhập với Facebook</span>
                                    </a>
                                    <a href="#" class="social-login google-login">
                                        <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                        <span>Đăng nhập với Google</span>
                                    </a>
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