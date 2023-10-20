@php
    $list = [
        [
            'name'=> 'Cơm gà',
            'img' => 'assets/imgs/shop/product-1-1.jpg',
            'price'=>'15.000đ'
        ],
        [
            'name'=> 'Cơm sườn',
            'img' => 'assets/imgs/shop/cat-2.png',
            'price'=>'15.000đ'
        ],
        [
            'name'=> 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-3.png',
            'price'=>'15.000đ'
        ],
    ];
@endphp
<div class="container mb-30">
    <div class="row">
        <div class="col-lg-4-5">
            <div class="shop-product-fillter"></div>
            <div class="row product-grid">

                @foreach($list as $item)

                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img src="{{$item['img']}}" alt="shop"/>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Đồ ăn sáng</a>
                                </div>
                                <h2><a href="shop-product-right.html">{{$item['name']}}</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Cơm Phần</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>{{$item['price']}}</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Mua</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                    <h3 class="">Ưu đãi trong ngày</h3>
                    <a class="show-all" href="shop-grid-right.html">
                        All Deals
                        <i class="fi-rs-angle-right"></i>
                    </a>
                </div>
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="shop-product-right.html">
                                        <img src="{{asset('assets/imgs/shop/product-10-1.jpg')}}" alt="shop"/>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="shop-product-right.html">Cơm tấm sườn bì chả</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">Mua <a href="vendor-details-1.html">Phần ăn sáng</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>30.000 VND</span>
                                            <span class="old-price">25.000 VNĐ</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="shop-product-right.html">
                                        <img src="{{asset('assets/imgs/shop/product-10-1.jpg')}}" alt="shop"/>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="shop-product-right.html">Cơm tấm sườn bì chả</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">Mua <a href="vendor-details-1.html">Phần ăn sáng</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>30.000 VND</span>
                                            <span class="old-price">25.000 VNĐ</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="shop-product-right.html">
                                        <img src="{{asset('assets/imgs/shop/product-10-1.jpg')}}" alt="shop"/>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="shop-product-right.html">Cơm tấm sườn bì chả</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">Mua <a href="vendor-details-1.html">Phần ăn sáng</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>30.000 VND</span>
                                            <span class="old-price">25.000 VNĐ</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                        <div class="product-cart-wrap style-2">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href="shop-product-right.html">
                                        <img src="{{asset('assets/imgs/shop/product-10-1.jpg')}}" alt="shop"/>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href="shop-product-right.html">Cơm tấm sườn bì chả</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">Mua <a href="vendor-details-1.html">Phần ăn sáng</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>30.000 VND</span>
                                            <span class="old-price">25.000 VNĐ</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Đặt Mua</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

            <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                <h5 class="section-title style-1 mb-30">Các món mới ở quán</h5>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{asset('assets/imgs/shop/product-7-1.jpg')}}" alt="shop"/>
                    </div>
                    <div class="content pt-10">
                        <h5><a href="shop-product-detail.html">Cơm gà xối mỡ - 1 cánh gà thêm - một cocacola</a></h5>
                        <p class="price mb-0 mt-5">70.000 VNĐ</p>
                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{asset('assets/imgs/shop/product-8-1.jpg')}}" alt="shop"/>
                    </div>
                    <div class="content pt-10">
                        <h5><a href="shop-product-detail.html">Cơm gà xối mỡ - 1 cánh gà thêm - một cocacola</a></h5>
                        <p class="price mb-0 mt-5">70.000 VNĐ</p>
                        <div class="product-rate">
                            <div class="product-rating" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{asset('assets/imgs/shop/product-9-1.jpg')}}" alt="shop"/>
                    </div>
                    <div class="content pt-10">
                        <h5><a href="shop-product-detail.html">Cơm gà xối mỡ - 1 cánh gà thêm - một cocacola</a></h5>
                        <p class="price mb-0 mt-5">70.000 VNĐ</p>
                        <div class="product-rate">
                            <div class="product-rating" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>