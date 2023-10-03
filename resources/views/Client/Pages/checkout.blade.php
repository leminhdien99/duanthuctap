@extends('Client.layout.Master')

@section('title')
    Thanh Toán
@endsection
@section('main')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('index')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                    <span></span> <a href="index.html" rel="nofollow">Cửa hàng</a>
                    <span></span> <a href="{{route('checkout')}}" rel="nofollow">Thanh toán</a>
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10">Thanh Toán Hóa Đơn</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">Có <span class="text-brand">3</span> sản phẩm trong giỏ hàng.</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row mb-50">
                        <div class="col-lg-6 mb-sm-15 mb-lg-0 mb-md-3">
                            <div class="toggle_info">
                                <span><i class="fi-rs-user mr-10"></i><span class="text-muted font-lg">Bạn chưa có tài khoản ?</span> <a href="{{route('register')}}" data-bs-toggle="collapse" class="collapsed font-lg" aria-expanded="false">Tạo tài khoản</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form method="post" class="apply-coupon">
                                <input type="text" placeholder="Nhập mã giảm giá...">
                                <button class="btn  btn-md" name="login">Áp dụng</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="mb-30">Hóa Đơn Chi Tiết</h4>
                        <form method="post" class="w-100">
                            <div class="row justify-content-between">
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="name" placeholder="Nhập vào họ và tên">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="email" placeholder="Nhập vào địa chỉ email">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="address" placeholder="Nhập vào địa chỉ">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="phone" placeholder="Nhập vào số điện thoại">
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" placeholder="Ghi chú" class="w-100"></textarea>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="border p-40 cart-totals ml-30 mb-50">
                        <div class="d-flex align-items-end justify-content-between mb-30">
                            <h4>Đơn hàng</h4>
                            <h6 class="text-muted">200,000 VND</h6>
                        </div>
                        <div class="divider-2 mb-30"></div>
                        <div class="table-responsive order_table checkout">
                            <table class="table no-border">
                                <tbody>
                                <tr>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Yidarton Women Summer Blue</a></h6></span>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">$13.3</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Seeds of Change Organic Quinoa</a></h6></span>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">$15.0</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Angie’s Boomchickapop Sweet </a></h6></span>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">$17.2</h4>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="payment ml-30">
                        <h4 class="mb-30">Phương thức thanh toán</h4>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Thanh Toán PayPal</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Thanh Toán ViSa</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Thanh toán MoMo</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios6" checked="">
                                <label class="form-check-label" for="exampleRadios6" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Thanh toán khi nhận hàng</label>
                            </div>
                        </div>
                        <div class="payment-logo d-flex">
                            <img class="mr-15" src="assets/imgs/theme/icons/payment-paypal.svg" alt="">
                            <img class="mr-15" src="assets/imgs/theme/icons/payment-visa.svg" alt="">
                            <img class="mr-15" src="assets/imgs/theme/icons/payment-master.svg" alt="">
                            <img src="assets/imgs/theme/icons/payment-zapper.svg" alt="">
                        </div>
                        <a href="#" class="btn btn-fill-out btn-block mt-30">Thanh toán<i class="fi-rs-sign-out ml-15"></i></a>
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