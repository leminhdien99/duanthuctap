@extends('Client.layout.Master')
@section('js')
    <script src="{{asset('assets/js/showhide.js')}}"></script>
@endsection
@section('main')
    <main class="main pages">
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <div class="card-login">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                        <span>Đăng nhập với Facebook</span>
                                    </a>
                                    <a href="{{route('loginGoogle')}}" class="social-login google-login">
                                        <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                        <span>Đăng nhập với Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Đăng Nhập</h1>
                                            <p class="mb-30">Bạn chưa có tài khoản ? <a href="{{route('register')}}">Đăng ký</a></p>
                                        </div>
                                        @if(Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{Session::get('success')}}
                                            </div>
                                        @endif
                                        @if(Session::has('error-login'))
                                            <div class="alert alert-danger" role="alert">
                                                {{Session::get('error-login')}}
                                            </div>
                                        @endif
                                        <form action="{{route('loginForm')}}" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="email" value="{{old('email')}}" placeholder="Nhập vào địa chỉ email" />
                                                @error('email')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" value="{{old('password')}}"  name="password" class="form-control" id="myInput" placeholder="Mật khẩu">
                                                @error('password')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" onclick="myFunction()">
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Hiện mật khẩu</span></label>
                                                    </div>
                                                </div>
                                                <a href="{{route('fogetPassword')}}">Quên mật khẩu</a>
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