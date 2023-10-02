@extends('client.layout.master')
@php
    $title1 = "Danh sách yêu thích";
@endphp
@section('main')

    <main class="main">
        <x-client.pages :title="$title1"></x-client.pages>
        <div class="container mb-30 mt-50">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="mb-50">
                        <h1 class="heading-2 mb-10">Danh sách yêu thích của bạn</h1>
                        <h6 class="text-body">Có <span class="text-brand">5</span> sản phẩm trong này</h6>
                    </div>
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                            <tr class="main-heading">
                                <th class="custome-checkbox start pl-30">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                                    <label class="form-check-label" for="exampleCheckbox11"></label>
                                </th>
                                <th scope="col" colspan="2">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Tình trạng tồn kho</th>
                                <th scope="col">Hoạt động</th>
                                <th scope="col" class="end">Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="pt-30">
                                <td class="custome-checkbox pl-30">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                    <label class="form-check-label" for="exampleCheckbox1"></label>
                                </td>
                                <td class="image product-thumbnail pt-40"><img src="assets/imgs/shop/product-1-1.jpg" alt="#" /></td>
                                <td class="product-des product-name">
                                    <h6><a class="product-name mb-10" href="shop-product-right.html">Bánh mặn</a></h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                </td>
                                <td class="price" data-title="Price">
                                    <h5 class="text-brand">20.000VND</h5>
                                </td>
                                <td class="text-center detail-info" data-title="Stock">
                                    <span class="stock-status in-stock mb-0"> Trong kho </span>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    <button class="btn btn-sm">Thêm vào giở hàng</button>
                                </td>
                                <td class="action text-center" data-title="Remove">
                                    <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="custome-checkbox pl-30">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox4" value="" />
                                    <label class="form-check-label" for="exampleCheckbox4"></label>
                                </td>
                                <td class="image product-thumbnail"><img src="assets/imgs/shop/product-4-1.jpg" alt="#" /></td>
                                <td class="product-des product-name">
                                    <h6><a class="product-name mb-10" href="shop-product-right.html">Bánh ngọt</a></h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                </td>
                                <td class="price" data-title="Price">
                                    <h5 class="text-brand">30.000VND</h5>
                                </td>
                                <td class="text-center detail-info" data-title="Stock">
                                    <span class="stock-status out-stock mb-0"> Hết hàng </span>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    <button class="btn btn-sm btn-secondary">Liên hệ với chúng tôi</button>
                                </td>
                                <td class="action text-center" data-title="Remove">
                                    <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection