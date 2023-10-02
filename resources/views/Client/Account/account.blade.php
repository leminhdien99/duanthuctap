@extends('Client.index')
@section('main')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang Chủ</a>
                    <span></span> Trang <span></span> Tài khoản của tôi
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Thống Kê</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Đơn đặt hàng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Theo dõi đơn hàng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>Địa chỉ của tôi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Cập nhật tài khoản</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-tab" data-bs-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="fi-rs-user mr-10"></i>Cập nhật mật khẩu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="page-login.html"><i class="fi-rs-sign-out mr-10"></i>Đăng Nhập</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content account dashboard-content pl-50">

                                    <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Xin Chào Bạn!</h3>
                                            </div>
                                            <div class="card-body">
                                                <p>
                                                    Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem
                                                    <a href="#">các đơn hàng gần đây</a>,<br/>
                                                    của mình <a href="#">shipping and billing addresses</a> and
                                                    <a href="#">edit your password and account details.</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Đơn đặt hàng của bạn</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Đặt hàng</th>
                                                            <th>Ngày Đặt</th>
                                                            <th>Trạng thái</th>
                                                            <th>Tổng cộng</th>
                                                            <th>hành động</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>#1357</td>
                                                            <td>Ngày 4 tháng 3 năm 2020</td>
                                                            <td>Xử lý</td>
                                                            <td>125.000 VNĐ cho 2 sản phẩm</td>
                                                            <td><a href="#" class="btn-small d-block">xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>#2468</td>
                                                            <td>Ngày 29 tháng 6 năm 2020</td>
                                                            <td>Hoàn thành</td>
                                                            <td>364.000 VNĐ cho 5 sản phẩm</td>
                                                            <td><a href="#" class="btn-small d-block">xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>#2366</td>
                                                            <td>Ngày 02 tháng 8 năm 2020</td>
                                                            <td>Hoàn thành</td>
                                                            <td>280.000 VNĐ cho 3 sản phẩm</td>
                                                            <td><a href="#" class="btn-small d-block">xem</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Theo dõi đơn hàng</h3>
                                            </div>
                                            <div class="card-body contact-from-area">
                                                <p>Để theo dõi đơn hàng của bạn, vui lòng nhập ID đơn hàng của bạn vào ô bên dưới và nhấn nút "Theo dõi".
                                                    Điều này đã được trao cho bạn trên biên nhận của bạn và trong email xác nhận mà lẽ ra bạn phải nhận được.</p>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                                            <div class="input-style mb-20">
                                                                <label>ID Đơn hàng</label>
                                                                <input name="order-id" placeholder="Tìm thấy trong email xác nhận đặt hàng của bạn" type="text"/>
                                                            </div>
                                                            <div class="input-style mb-20">
                                                                <label>Thanh toán bằng thư điện tử</label>
                                                                <input name="billing-email" placeholder="Email bạn đã sử dụng để đặt hàng" type="email"/>
                                                            </div>
                                                            <button class="submit submit-auto-width" type="submit">Theo dõi</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card mb-3 mb-lg-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0">Địa chỉ thanh toán</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <address>
                                                            59 đường số 1<br/>
                                                            Hưng Lợi Ninh Kiều, <br/>Cần Thơ <br/>Phone: 0948253479
                                                        </address>
                                                        <p>Cần Thơ</p>
                                                        <a href="#" class="btn-small">Sửa</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Địa chỉ giao hàng</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <address>
                                                            59 đường số 1<br/>
                                                            Hưng Lợi Ninh Kiều, <br/>Cần Thơ <br/>Phone: 0948253479
                                                        </address>
                                                        <p>Cần Thơ</p>
                                                        <a href="#" class="btn-small">Sửa</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                        <x-client.account.account></x-client.account.account>
                                    </div>

                                    <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <x-client.account.password></x-client.account.password>
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