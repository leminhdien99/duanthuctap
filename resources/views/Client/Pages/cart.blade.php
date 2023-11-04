@extends('Client.layout.Master')
@section('main')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Shop
                <span></span> Cart
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Giỏ hàng</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">Hiện có  <span class="text-brand">{{$quantity}}</span> sản phẩm trong giỏ hàng của bạn</h6>
                    <h6 class="text-body">
                        <a href="#" class="text-muted" onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa hết giỏ hàng?')) { document.getElementById('delete-all-form').submit(); }">
                            <i class="fi-rs-trash mr-5"></i>Xóa hết giỏ hàng
                        </a>
                    </h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive shopping-summery">
                    <table class="table table-wishlist">
                        <thead>
                        <tr class="main-heading">
                            <th></th>
                            <th scope="col" colspan="2">Sản phẩm</th>
                            <th scope="col">Giá sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col" class="">Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <x-client.cart.listcart :cart="$cart"></x-client.cart.listcart>
                        </tbody>
                    </table>
                </div>
                <div class="divider-2 mb-30"></div>
                <div class="cart-action d-flex justify-content-between">
                    <a href="{{route('index')}}" class="btn "><i class="fi-rs-arrow-left mr-10"></i>Tiếp tục mua hàng</a>
                </div>
                <x-client.pages.coupon></x-client.pages.coupon>
            </div>
            <x-client.pages.checkout :total="$total"></x-client.pages.checkout>
        </div>
    </div>
    <form id="delete-all-form" action="{{ route('deleteAll') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection