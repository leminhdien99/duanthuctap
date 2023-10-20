@php
    $list = [
        [
            'name' => 'Cơm gà',
            'img' => 'assets/imgs/shop/cat-1.png',
            'price' => '16.000đ',
        ],
        [
            'name' => 'Cơm sườn',
            'img' => 'assets/imgs/shop/cat-2.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-3.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm chiên',
            'img' => 'assets/imgs/shop/cat-4.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm gà',
            'img' => 'assets/imgs/shop/cat-5.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm sườn',
            'img' => 'assets/imgs/shop/cat-6.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-7.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm chiên',
            'img' => 'assets/imgs/shop/cat-8.png',
            'price' => '15.000đ',
        ],
        [
            'name' => 'Cơm chay',
            'img' => 'assets/imgs/shop/cat-9.png',
            'price' => '15.000đ',
        ],
    ];
@endphp

<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="home-slide-cover mt-30">
            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-1.png)">
                    <div class="slider-content">
                        <h1 class="display-2 mb-40">
                            Đừng bỏ lỡ điều tuyệt vời<br/>
                        </h1>
                        <p class="mb-65">Đăng ký nhận bản tin hàng ngày</p>
                        <form class="form-subcriber d-flex">
                            <input type="email" placeholder="Địa chỉ email của bạn"/>
                            <button class="btn" type="submit">Đặt mua</button>
                        </form>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-2.png)">
                    <div class="slider-content">
                        <h1 class="display-2 mb-40">
                            Cơm hợp vệ sinh<br/>
                            Giảm giá lớn </h1>
                        <p class="mb-65">Tiết kiệm tới 50% cho đơn hàng đầu tiên của bạn</p>
                        <form class="form-subcriber d-flex">
                            <input type="email" placeholder="Địa chỉ email của bạn"/>
                            <button class="btn" type="submit">Đặt mua</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>
    </div>
</section>
<section class="popular-categories section-padding">
    <div class="container wow animate__animated animate__fadeIn">
        <div class="section-title">
            <div class="title">
                <h3>Danh mục nổi bật</h3>
            </div>
            <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
        </div>
        <div class="carausel-10-columns-cover position-relative">
            <div class="carausel-10-columns" id="carausel-10-columns">
                <x-client.pages.product.category></x-client.pages.product.category>
            </div>
        </div>
    </div>

    <section class="banners mb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <img src="assets/imgs/banner/banner-1.png" alt=""/>
                        <div class="banner-text">
                            <h4>
                                Tươi mỗi ngày & <br/>Làm sạch với chúng tôi<br/>
                                Các sản phẩm </h4>
                            <a href="shop-grid-right.html" class="btn btn-xs">
                                <i class="fi-rs-arrow-small-right"></i>Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <img src="assets/imgs/banner/banner-2.png" alt=""/>
                        <div class="banner-text">
                            <h4>
                                Làm bữa sáng của bạn<br/>
                                Khỏe mạnh và dễ dàng </h4>
                            <a href="shop-grid-right.html" class="btn btn-xs">Mua ngay
                                <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <img src="assets/imgs/banner/banner-3.png" alt=""/>
                        <div class="banner-text">
                            <h4>Hữu cơ tốt nhất <br/>Sản phẩm trực tuyến</h4>
                            <a href="shop-grid-right.html" class="btn btn-xs">Mua ngay
                                <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End banners-->
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Sản phẩm phổ biến</h3>
                <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Tất cả</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Cơm
                            gà
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Cơm
                            sườn
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Cơm
                            cá
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Cơm
                            chay
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six" type="button" role="tab" aria-controls="tab-six" aria-selected="false">Cơm canh
                            chua
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab" data-bs-target="#tab-seven" type="button" role="tab" aria-controls="tab-seven" aria-selected="false">Cơm
                            khô
                        </button>
                    </li>
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($list as $item)
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('details')}}">
                                                <img class="default-img" src="{{ $item['img'] }}" alt=""/>
                                                <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Nóng</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="{{route('details')}}">{{ $item['name'] }}</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="vendor-details-1.html">{{ $item['name'] }}</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>{{ $item['price'] }}</span>
                                                <span class="old-price">{{ $item['price'] }}</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="{{route('listCart')}}"><i class="fi-rs-shopping-cart mr-5"></i>Giỏ hàng
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section><!--Products Tabs-->
    <section class="section-padding pb-5">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3 class="">Bán chạy nhất hàng ngày</h3>
                <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Đặc sắc</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Phổ
                            biến
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Mới được thêm
                            vào
                        </button>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                    <div class="banner-img style-2">
                        <div class="banner-text">
                            <h2 class="mb-100">Mang thiên nhiên vào nhà bạn</h2>
                            <a href="shop-grid-right.html" class="btn btn-xs">Mua ngay
                                <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    @foreach ($list as $item)
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{ $item['img'] }}" alt=""/>
                                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="shop-product-right.html">{{ $item['name'] }}</a></h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span>{{ $item['price'] }} </span>
                                                    <span class="old-price">{{ $item['price'] }}</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <a href="shop-cart.html" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Giỏ hàng</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Best Khuyến mãis-->
    <section class="section-padding mb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <h4 class="section-title style-1 mb-30 animated animated">Bán chạy</h4>
                    <div class="product-list-small animated animated">
                        <x-client.pages.product.selling></x-client.pages.product.selling>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End 4 columns-->