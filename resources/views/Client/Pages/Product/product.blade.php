@extends('Client.layout.Master')
@section('main')
    <div class="container mb-30">
        <div class="row">
            <div class="col-lg-4-5">
                    <div class="row product-grid">
                        <x-client.pages.product.saleProduct :product="$product"></x-client.pages.product.saleProduct>
                    </div>
                <!--product grid-->
                <div class="pagination-area mt-20 mb-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <section class="section-padding pb-5">
                    <div class="section-title">
                        <h3 class="">Sản phẩm mới</h3>
                        <a class="show-all" href="shop-grid-right.html">
                            All Deals
                            <i class="fi-rs-angle-right"></i>
                        </a>
                    </div>
                    <div class="row">
                        <x-client.pages.product.saleProduct :product="$productTime"></x-client.pages.product.saleProduct>
                    </div>
                </section>
                <!--End Deals-->
            </div>
            <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                <div class="sidebar-widget widget-category-2 mb-30">
                    <h5 class="section-title style-1 mb-30">Các Phần Ăn Trong Ngày</h5>
                    <ul>
                        <li>
                            <a href="shop-grid-right.html">
                                <img src="assets/imgs/theme/icons/category-1.svg" alt=""/>Bữa sáng no bụng</a><span class="count">20</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html">
                                <img src="assets/imgs/theme/icons/category-2.svg" alt=""/>Bữa trưa ngon miệng</a><span class="count">50</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html">
                                <img src="assets/imgs/theme/icons/category-3.svg" alt=""/>Bữa tối đầy đủ</a><span class="count">50</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html">
                                <img src="assets/imgs/theme/icons/category-4.svg" alt=""/>Các combo cho bữa trưa</a><span class="count">7</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html">
                                <img src="assets/imgs/theme/icons/category-5.svg" alt=""/>Các combo cho bữa tối</a><span class="count">6</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
