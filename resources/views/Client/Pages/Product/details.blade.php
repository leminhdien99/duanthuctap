@extends('Client.layout.Master')
@section('main')
    <!--End header-->
    <main class="main">
        <div class="container mb-30">
            <div class="row">
                <div class="col-xl-11 col-lg-12 m-auto">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="product-detail accordion-detail">
                                <div class="row mb-50 mt-30">
                                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                        <div class="detail-gallery">
                                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                            <!-- MAIN SLIDES -->
                                            <div class="product-image-slider">
                                                @php
                                                    $images = $product->images;
                                                    // Tách chuỗi thành mảng
                                                    $imageArray = explode(",", $images);

                                                @endphp
                                                @foreach($imageArray as $imageName)
                                                    <figure class="border-radius-10">
                                                        <img src="{{ asset('images/products/' . $imageName) }}" alt="product image" style="height: 497px; width: 497px" />
                                                    </figure>
                                                @endforeach
                                            </div>
                                            <!-- THUMBNAILS -->
                                            <div class="slider-nav-thumbnails">
                                                @foreach($imageArray as $imageName)
                                                        <div><img src="{{ asset('images/products/' . $imageName) }}" alt="product image" style="height: 110px;width: 110px" /></div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- End Gallery -->
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="detail-info pr-30 pl-30">
                                            <span class="stock-status out-stock"> Khuyến mãi </span>
                                            <h2 class="title-detail">{{$product->name_product}}</h2>
                                            <div class="product-detail-rating">
                                                <div class="product-rate-cover text-end">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (32 lượt xem)</span>
                                                </div>
                                            </div>
                                            <div class="clearfix product-price-cover">
                                                <div class="product-price primary-color float-left">
                                                    <span class="current-price text-brand">{{number_format($product->sale_price)}}đ</span>
                                                    <span>
                                                        <span class="save-price font-md color3 ml-15">26%</span>
                                                        <span class="old-price font-md ml-15">{{number_format($product->price)}}đ</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="detail-extralink mb-50">
                                                <div class="detail-qty border radius">
                                                    <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                    <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                                    <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                </div>
                                                <div class="product-extra-link2">
                                                    <button type="submit" class="button button-add-to-cart">
                                                        <i class="fi-rs-shopping-cart"></i>Thêm giỏ hàng
                                                    </button>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="font-xs">
                                                <ul class="mr-5 float-start">Loại:
                                                    <li>
                                                        @php
                                                            $category = $product->name_category;
                                                            $slugCate = $product->slug_category;
                                                            $categoryArr = explode(',', $category);
                                                            $slugArr = explode(',', $slugCate);
                                                        @endphp

                                                        @foreach($categoryArr as $key => $item)
                                                            @php
                                                                $slug = $slugArr[$key];
                                                            @endphp
                                                            <a class="text-brand" style="margin-right: 8px" href="{{ route('class', $slug) }}">{{ $item }}</a>
                                                        @endforeach
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Detail Info -->
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="tab-style3">
                                        <ul class="nav nav-tabs text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Miêu tả</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Đánh giá (3)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane fade show active" id="Description">
                                                <div class="">
                                                    <ul class="product-more-infor mt-30">
                                                        <li><span>Cơm gà</span>{{$product->name_product}}</li>
                                                        <li><span>Mô tả</span>{!! $product->describe !!}</li>
                                                        <li><span>Số lượng</span>{{$product->quantify}}</li>
                                                    </ul>
                                                    <hr class="wp-block-separator is-style-dots"/>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Additional-info">
                                                <table class="font-md">
                                                    <tbody>
                                                    <tr class="stand-up">
                                                        <th>Cơm</th>
                                                        <td>
                                                            <p>Gà chiên</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="folded-wo-wheels">
                                                        <th>Cơm thêm</th>
                                                        <td>
                                                            <p>1 phần</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="Vendor-info">
                                                <div class="vendor-logo d-flex mb-30">
                                                    <img src="assets/imgs/vendor/vendor-18.svg" alt=""/>
                                                </div>
                                                <ul class="contact-infor mb-50">
                                                    <li>
                                                        <img src="assets/imgs/theme/icons/icon-location.svg" alt=""/><strong>Address: </strong>
                                                        <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/imgs/theme/icons/icon-contact.svg" alt=""/><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span>
                                                    </li>
                                                </ul>
                                                <div class="d-flex mb-55">
                                                    <div class="mr-30">
                                                        <p class="text-brand font-xs">Rating</p>
                                                        <h4 class="mb-0">92%</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Reviews">
                                                <!--Comments-->
                                                <div class="comments-area">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <h4 class="mb-30">Câu hỏi & trả lời của khách hàng</h4>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h4 class="mb-30">Phản hồi khách hàng</h4>
                                                            <div class="d-flex mb-30">
                                                                <div class="product-rate d-inline-block mr-15">
                                                                    <div class="product-rating" style="width: 90%"></div>
                                                                </div>
                                                                <h6>4.8 out of 5</h6>
                                                            </div>
                                                            <div class="progress">
                                                                <span>5 star</span>
                                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                            </div>
                                                            <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--comment form-->
                                                <div class="comment-form">
                                                    <h4 class="mb-15">Add a review</h4>
                                                    <div class="product-rate d-inline-block mb-30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-12">
                                                            <form class="form-contact comment_form" action="#" id="commentForm">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="website" id="website" type="text" placeholder="Website"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="button button-contactForm">Submit Review</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
