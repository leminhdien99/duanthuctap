@extends('Client.layout.Master')
@section('js')
    <script src="{{asset('assets/js/showhide.js')}}"></script>
@endsection
@section('main')
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <img class="border-radius-15" src="assets/imgs/page/forgot_password.svg" alt="" />
                                    <h2 class="mb-15 mt-15">Cập nhật lại mật khẩu ?</h2>
                                    <p class="mb-30">Vui lòng nhập đúng mật khẩu cũ để thuận tiện cho việc cập nhật mật khẩu của bạn. </p>
                                </div>
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session('success')}}
                                    </div>
                                @endif
                                @if(Session::has('danger'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('danger')}}
                                    </div>
                                @endif
                                <form action="{{route('postResetPassword',$token)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{$email}}" name="email" />
                                    </div>
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
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Đặt lại mật khẩu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection