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
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Đăng ký</h1>
                                            <p class="mb-30">Bạn đã có tài khoản ? <a href="{{route('login')}}">Đăng nhập</a></p>
                                        </div>
                                        @if(Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{Session::get('success')}}
                                            </div>
                                        @endif
                                        <form action="{{route('registerFrom')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="fullname" value="{{old('fullname')}}"  placeholder="Họ và tên" />
                                                @error('fullname')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" value="{{old('email')}}"  placeholder="Email" />
                                                @error('email')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text"  name="address" value="{{old('address')}}"  placeholder="Địa chỉ" />
                                                @error('address')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" value="{{old('phone')}}"  placeholder="Số điện thoại" />
                                                @error('phone')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="date" id="reservationdatetime" data-target-input="nearest">
                                                <input type='file' name="uploadfile" multiple id="imgInp"/>
                                            </div>
                                            <div class="text-center">
                                                <img width="100" id="blah" src="#" alt="your image"/>
                                            </div>
                                            @error('uploadfile')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                            <div class="form-group">
                                                <input type="password" value="{{old('password')}}"  name="password" class="form-control" id="myInput" placeholder="Mật khẩu">
                                                @error('password')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <input style="width: 15px; height: 15px" type="checkbox" onclick="myFunction()"class="mx-1"> Hiện mật khẩu
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" value="{{old('password_confirmation')}}"  name="password_confirmation" class="form-control" id="againpassword" placeholder="Nhập lại mật khẩu">
                                                @error('password_confirmation')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <input style="width: 15px; height: 15px" type="checkbox" onclick="myFunctionone()" class="mx-1"> Hiện mật khẩu
                                                </div>
                                            </div>
                                            <div class="payment_option">
                                                <label for="exampleInputFile">Giới tính</label>
                                                <div class="custome-radio">
                                                    <input class="form-check-input" type="radio" name="gender" value="nam" {{old('gender') =="nam"? "checked" : ""}} id="exampleRadios3"/>
                                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Nam</label>
                                                </div>
                                                <div class="custome-radio">
                                                    <input class="form-check-input" type="radio" name="gender" value="nữ" {{old('gender') =="nữ"? "checked" : ""}} id="exampleRadios4"/>
                                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Nữ</label>
                                                </div>
                                            </div>
                                            @error('gender')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbok" id="exampleCheckbox12" value="checkbok" />
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>Tôi đồng ý với các điều khoản &amp; Chính Sách.</span></label>
                                                    </div>
                                                </div>
                                                <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Điều khoản</a>
                                            </div>
                                            @error('checkbok')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                            <div class="form-group mb-30">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Đăng Ký</button>
                                            </div>
                                            <p class="font-xs text-muted"><strong>Lưu ý:</strong> Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này, để quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được mô tả trong chính sách bảo mật của chúng tôi</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-20 d-none d-lg-block" style="padding-top: 200px;">
                                <img class="border-radius-15" src="assets/imgs/page/login-1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
@push('styles')
@endpush
@push('script')
@endpush