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
                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
