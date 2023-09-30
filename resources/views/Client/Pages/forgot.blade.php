@extends('Client.layout.Master')
@section('main')


        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <img class="border-radius-15" src="assets/imgs/page/forgot_password.svg" alt="" />
                                    <h2 class="mb-15 mt-15">Quên mật khẩu ?</h2>
                                    <p class="mb-30">Đừng lo lắng, chúng tôi đã có bạn! Hãy lấy cho bạn một mật khẩu mới. Vui lòng nhập địa chỉ email hoặc tên người dùng của bạn.</p>
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" required="" name="email" placeholder="Email của bạn *" />
                                    </div>
                                 <x-client.pages.confidentiality name="confidentiality" router="confidentiality" ></x-client.pages.confidentiality>
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